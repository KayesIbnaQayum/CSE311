<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class searchController extends Controller
{
    function search($searchValue){
       
        $projectData = DB::SELECT("SELECT projectID,title,details,budgets,startDate,keywords FROM projects WHERE isActive = 1 AND title like '%$searchValue%'");
        

       return view('search')->with('data', $projectData);
    }

    function searchfromMenu(Request $req){
        
        $searchValue = $req->search;  
        $projectData = DB::SELECT("SELECT projectID,title,details,budgets,startDate,keywords FROM projects WHERE isActive = 1 AND title like '%$searchValue%'");
        

       return view('search')->with('data', $projectData);
    }
}
