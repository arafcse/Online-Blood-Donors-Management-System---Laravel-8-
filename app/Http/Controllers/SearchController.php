<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(isset($_GET['query'])){   
            $search_text = $_GET['query'];
            $cities = DB::table('donors')->where('city','LIKE','%'.$search_text.'%')->get();
            return view('donorsearch',compact('cities'));

        } else{
            return view("donorsearch");
        }
        
    }

    public function store(Request $request)
    {

    }
    
}
