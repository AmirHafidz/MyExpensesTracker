<?php

namespace App\Http\Controllers;

use App\Events\NewUserRegistered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'c_password' => 'required|same:password',
        ],
        [
            'name.required' => 'Please enter your name first.',
            'name.min' => 'Please enter your name atleast 3 character.',
            'email.required' => 'Please enter your email first.',
            'email.unique' => 'This email is already used.',
            'password.required' => 'Please enter your pasword first.',
            'password.min' => 'Please enter your pasword atleast 6 character.',
            'password.required' => 'Please enter your pasword first.',
            'c_password.same' => 'Password provided is mismatch.'
        ]

        );

        if($validate->fails()){
            return response()->json('Fails');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new NewUserRegistered($user));

        return response()->json([
            'message' => 'You have successfully registered.'
        ]);
    }

    public function login(Request $request)
    {
        if(Auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return response()->json([
                'You have successfully login.'
            ]);
        }else{
            return redirect()->back()->withErrors(['message'=> 'Invalid Credentials.']);
        }
    }
}
