<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;

class HomeController extends Controller
{
    public function index()
    {
        $feedback=Feedback::all();
    	return view ("home",compact("feedback"));
    }

    public function donorsregistration()
    {
        return view("donorsregistration");
    }

    public function donorsearch()
    {
        return view("donorsearch");
    }


    public function redirects()
    {
        $role=Auth::user()->role;

        if ($role=='1')
        {
            return view('admin.dashboard');
        }
        elseif ($role=='2') {

            return view('admin.dashboard');           
        }
        else
        {   
            $feedback=Feedback::all();
            return view('home',compact("feedback"));
        }
    }
    public function feedback()
    {
        {   
            $feedback=Feedback::all();
            return view('feedback',compact("feedback"));
        }
    }
    

}
