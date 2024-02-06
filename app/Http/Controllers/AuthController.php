<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view("Syncoweb.login");
    }

    public function registration(){
        return view("Syncoweb.registration");
    }

    public function homepage(){
        return view("Syncoweb.homepage");
    }




    //==UserAuthentication==//

    public function registerPost(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20'
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
    
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('homepage');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }
        else{
            return back()->with('fail','Incorrect Email');
        }
    }

}
