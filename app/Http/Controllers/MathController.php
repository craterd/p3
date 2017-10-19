<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function display()
    {
        return view('Calculator.display');
    }

    public function process()
    {
        return view('Calculator.display');
    }
}
