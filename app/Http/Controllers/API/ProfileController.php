<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;

class ProfileController extends Controller
{
    public function change_password(Request $request){
        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'password' => 'required|min:6|same:password',
            'confirm_password' => 'required|same:password'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Validation Fails',,
                'errors' => $validator->errors()
            ],422);
        }

        $user=$request->user();
        if(Hash::check($request->old_password,$user->password)){
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return response()->json([
                'message' => 'Password successfully updated',
            ],200);
        }
        else{
            return response()->json([
                'message' => 'Old Password does not mathed',
                'error' => $validator->errors()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
            ],400);
        }
    }
}
