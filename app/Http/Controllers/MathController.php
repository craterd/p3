<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function display()
    {
        return 'Display the calculator...';
    }

    public function process()
    {
        return 'Calculate results...';
    }
}
