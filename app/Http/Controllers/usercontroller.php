<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
       $user=User::where(['email'=>$req->email])->first();
       //return $user->password;
       if($user and ($req->password==$user->password))
       {
        $req->session()->put('user',$user);
        return redirect("home");
       
       } 
       else{
             return "Email or password is not matched";

       }
    }
}
