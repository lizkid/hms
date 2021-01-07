<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class welcomeController extends Controller
{
    public function welcome(Request $request)
    {
        //validation
        $request->validate([
            'email'=>'required|email|unique:users',
            'phone_number'=>'required',
            'password'=>'required|alphaNum|min:6|confirmed',
            'password_confirmation'=>'required'

        ]);
        $data = new User();
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->password = $request->password;
        $data->password = Hash::make($request->newPassword);
        $data->save();
        return view('admin');


    }

    public function login(Request $request)
    {
        $data= $request->input();
        return redirect('admin', $data);
//        $data = $request->only('email', 'password');
//        if (Auth::attempt($data))
//        {
//            $request->session()->regenerate();
//            return redirect()->intended('admin');
//        }
//        return "failed to login";

    }
}
