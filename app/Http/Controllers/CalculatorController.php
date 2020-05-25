<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function calculator(Request $request)
    {

        $result =  math_eval($request->displayInput);
        return view('index', compact('result'));
    }
}
