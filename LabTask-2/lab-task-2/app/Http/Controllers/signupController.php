<?php

namespace App\Http\Controllers;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;

class signupController extends Controller
{
    function signupValidation(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|min:4|max:20',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'phoneNumber' => 'required'
            ],
            [
                'name.required' => 'please enter your name',
                'name.min' => 'name must contain 4 character',
                'name.max' => 'name can contain maximum 20 character',
                'email.required' => 'please enter your email',
                'email.email' => 'please enter valid email',
                'password.required' => 'please enter your password',
                'password.min' => 'password must contain 6 character',
                'phoneNumber.required' => 'please enter your phone number'

            ]
        );

        return "success";
    }
}
