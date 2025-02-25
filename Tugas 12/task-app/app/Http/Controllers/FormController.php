<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(){

        return view('form');

    }

    public function SignUp(Request $request){
        $first = $request->input("fname");
        $last = $request->input("lname");
    
        return view("welcome", ['first' => $first, 'last' => $last]);
    }
}
