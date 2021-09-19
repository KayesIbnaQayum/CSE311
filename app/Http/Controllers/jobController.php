<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class jobController extends Controller
{
    function postjob(Request $req){
        $title = $req->input("title");
        $budget = $req->input("budget");
        $keyword = $req->input("keyword");
        $details = $req->input("details");
        $endDate = $req->input("endDate");
        //$file = $req->file("fileToUpload");

        $id = $this->decryptSession();
        $statement = DB::statement("INSERT INTO `projects` (`employeerID`, `budgets`, `keywords`, `details`, `endDate`, `title`) VALUES ('$id', '$budget', '$keyword', '$details', '$endDate', '$title')");
        return view('workprofile');
    }


    function decryptSession(){
        if(Session::has('user')){
           $id = $this->decryptIt(session()->get('user'));
            return $id;
        }else{
            return view('login');
        }
    }

    function decryptIt( $q ) {
        return base64_decode($q);
    }

    function bid(Request $req){
        $bid = $req->input("bid");
        $projectID = session()->get('projectID');
        $freelancerID = $this->decryptSession();

        $statement = DB::statement("INSERT INTO `bids` (`projectID`, `price`, `freelancerID`) VALUES ('$projectID', '$bid', '$freelancerID')");
        return redirect('/profile');
    }


    function bidlist($id){
        $userid = $this->decryptSession();
        session()->put('bidlistProjectID', $id);

        $projectData = DB::SELECT("SELECT * FROM `bids` b JOIN userdetails ud ON ud.userID = b.freelancerID JOIN projects p ON p.projectID = b.projectID WHERE p.employeerID = $userid AND b.projectID=$id");
       $lowtotal = DB::SELECT("SELECT price from bids where projectID = $id ORDER BY price ASC LIMIT 1");
        $totalbid = DB::SELECT("SELECT COUNT(freelancerID) as 'totalbid' from bids where projectID = $id");
        
        return view('bidlist')->with("data", $projectData)->with("low", $lowtotal)->with("totalbid", $totalbid);
    }

    function bidcon(Request $req){
        $id = $req->input("id");
        $projectID = session()->get('bidlistProjectID');
        $emloyeerID = $this->decryptSession();
        $statement = DB::statement("INSERT INTO `projectassignmed` (`projectID`, `employeerID`, `freelancerID`) VALUES ('$projectID', '$emloyeerID', '$id')");
        return redirect('/workprofile');
    }
}
