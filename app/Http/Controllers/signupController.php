<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class signupController extends Controller
{
    function signup(Request $req){
        $email = $req->input("email");
        $password1 = $req->input("pass1");
        $password2 = $req->input("pass2");
        $fname = $req->input("fname");
        $lname = $req->input("lname");


        if($password1 == $password2){
            $statement = DB::select("SELECT count(email) as 'isFound' FROM user WHERE email ='$email'"); 
            if($statement[0]->isFound == 0){

                $statement = DB::statement("INSERT INTO `user` (`userID`, `email`, `password`) VALUES (NULL, '$email', '$password1')");
                $userID = DB::SELECT("Select userID from user where email ='$email' and password='$password1'");

                $userID = $userID[0]->userID;
               $statement2 = DB::statement("INSERT INTO `userdetails` (`userID`, `fname`,`lname`) VALUES ('$userID',  '$fname','$lname')");

                if($statement == 1 && $statement2 ==1){
                    return redirect('/login');
                }
               
            }else{
                return Redirect::route('reg', array('Error' => "Account Already Exists"));;
            }
     
           
        }else{
            return Redirect::route('reg', array('Error' => "password has not mached"));;
        }
        

    }
}
