<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class loginVerification extends Controller
{
    function login(Request $req){
        $email = $req->input("email");
        $password = $req->input("password");

       $statement = DB::select("SELECT count(email) as 'isFound' FROM user WHERE email ='$email' and password ='$password'"); 
       if($statement[0]->isFound == 1){
        $id = DB::select("SELECT userID FROM user WHERE email ='$email' and password ='$password'"); 
        $hashID = $this->encryptIt($id[0]->userID);
           session()->put('user', $hashID);
            return redirect('/profile');
       }

       return Redirect::route('login', array('Error' => "username or password not matched"));;
    }


    function encryptIt( $q ) {

        return base64_encode($q);  
    }
}
