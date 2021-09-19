<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use Session;
use Illuminate\Http\Request;

class projectController extends Controller
{
    function index($id){
        $projectData = DB::SELECT("SELECT * FROM userdetails ud JOIN employeers e ON e.userID = ud.userID JOIN projects p ON p.employeerID = e.employeerID WHERE p.projectID = $id");
        session()->put('projectID', $id);
        return view('project')->with('data', $projectData);
    }

    
}
