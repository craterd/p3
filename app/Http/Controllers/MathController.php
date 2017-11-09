<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function display()
    {
        return view('Calculator.display');
    }

    public function process(Request $request)
    {

        $operation = $request->input('operation', '+');
        
        // validate form inputs

        $this->validate($request, [
           'input1' => 'required|numeric',
           'input2' => 'required|numeric' 
        ]);
      
        // if no errors, do the math
        if ($request && (!isset($errors) || count($errors) == 0))
        {
            $input1 = (float) $request->input('input1');
            $input2 = (float) $request->input('input2');

            if ($operation == '+') {
                $results = $input1 + $input2;
            } elseif ($operation == '-') {
                $results = $input1 - $input2;
            } elseif ($operation == "*") {
                $results = $input1 * $input2;
            } else {
                $results = $input1 / $input2;
            }
        
            if (!$request->has('decimals')) {
                $results = round($results);
            }
        }

        return view('Calculator.display')->with([
            'input1' => $input1,
            'input2' => $input2,
            'operation' => $operation,
            'results' => $results,
            'decimals' => $request->has('decimals')
        ]);
    }
}
