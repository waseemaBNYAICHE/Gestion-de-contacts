<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\NewRequest;

class AdminController extends Controller
{
    public function admin()
    {
        return view ('admin');
    }
    public function post(Request $request)
    {

        $this->validate($request,
         [ 
             'mail'=>'bail|required|email',
             'pass'=>'bail|required|password',
             
         ]);

        
        $email = $request->input('email');
        $pass = $request->input('pass');
        
        $message = ucwords($email)."  ".strtoupper($pass).",";
    	return view ('admin',compact('message'));


    }
}
