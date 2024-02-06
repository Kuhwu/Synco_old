<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view("Syncoweb.login");
    }

    public function registration(){
        return view("Syncoweb.registration");
    }



    //==UserAuthentication==//

    public function registerPost(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $res = $user->save();

        if($res){
            return back()->with('success', 'Registration Complete');
        }
        else{
            return back()->with('fail', 'Registration Failed');
        }
    }
}
