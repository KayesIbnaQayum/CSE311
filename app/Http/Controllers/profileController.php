<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;


class profileController extends Controller
{
    function decryptSession(){
        if(Session::has('user')){
           $id = $this->decryptIt(session()->get('user'));
            return $id;
        }else{
            return view('login');
        }
    }

    function index(){
        if(!Session::has('user')){
            return "you have not logged in";
        }else{

        $id = $this->decryptSession();
        $profileData = DB::SELECT("SELECT * FROM userdetails ud JOIN user u ON u.userID = ud.userID WHERE u.userID = $id");

        $aboutData = DB::SELECT("SELECT * FROM `userabout` WHERE userID =  $id");
      
        return view('editProfile')->with("data", $profileData)->with('about', $aboutData);
        }
    }

    function profileView(){
        if(!Session::has('user')){
            return "you have not logged in";
        }else{

        $id = $this->decryptSession();
        $profileData = DB::SELECT("SELECT * FROM userdetails ud JOIN user u ON u.userID = ud.userID WHERE u.userID = $id");

        $aboutData = DB::SELECT("SELECT * FROM `userabout` WHERE userID =  $id");
      
        return view('profile')->with("data", $profileData)->with('about', $aboutData);
        }  
    }

    function decryptIt( $q ) {
        return base64_decode($q);
    }

    function update(Request $req){
       $id = $this->decryptSession();
        $checkIDAvailable = DB::select("SELECT count(userID) as 'isFound' FROM userdetails WHERE userID = $id"); 
        
        if($checkIDAvailable[0]->isFound == 1){
            DB::Statement("UPDATE `userabout` SET `skills`='$req->skills',`aboutme`='$req->about' WHERE userID = $id");
            DB::Statement("UPDATE `userdetails` SET `fname`='$req->fname',`lname`='$req->lname' WHERE userID = $id");
            return redirect('/profile');
        }else{
            
        }
    }


    function workprofile(){
        if(!Session::has('user')){
            return "you have not logged in";
        }else{

        $id = $this->decryptSession();
        $profileData = DB::SELECT("SELECT * FROM userdetails ud JOIN user u ON u.userID = ud.userID WHERE u.userID = $id");
        $jobposted = DB::SELECT("SELECT * FROM projects WHERE employeerID = $id");
        $aboutData = DB::SELECT("SELECT * FROM `userabout` WHERE userID =  $id");
      
        return view('workprofile')->with("data", $profileData)->with('about', $aboutData)->with('jobpostHistory', $jobposted);
        }          
    }

    function myjob(){
        $id = $this->decryptSession();
        $projectData = DB::SELECT("SELECT * FROM projectassignmed pa JOIN projects p ON pa.projectID = p.projectID WHERE pa.freelancerID = $id");
       
        return view("myjob")->with("data", $projectData);
    }
}
