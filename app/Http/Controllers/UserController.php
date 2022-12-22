<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'email' =>  'required',
            'password' => 'required'
        ]);

        if ($validation -> fails()){
            return response() -> json(['error' => $validation->errors()], 422);
        }

        if (Auth::attempt(['email' => $request->email,'password' =>  $request->password])){
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;

            return response()->json(['token'=> $token]);
        }
    }

    public function userDetals(){
        $user = Auth::guard('api')->user();

        return response()->json(['data'=> $user]);
    }
}
