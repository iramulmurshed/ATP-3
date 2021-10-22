<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class loginController extends Controller
{
    function loginValidation(Request $request)
    {

        $credential = array("email" => "s.a.utchas@gmail.com", "password" => "123456", "name" => "utchas");

        $validate = $request->validate(
            [

                'email' => 'required|email',
                'password' => 'required|min:6',

            ],
            [

                'email.required' => 'please enter your email',
                'email.email' => 'please enter valid email',
                'password.required' => 'please enter your password',
                'password.min' => 'password must contain 6 character',

            ]
        );
        if ($request->email == $credential['email'] && $request->password == $credential['password']) {
            return view('pages.home')->with('name',$credential['name']);
        } else {
            return "email or password not match";
        }
    }
}
