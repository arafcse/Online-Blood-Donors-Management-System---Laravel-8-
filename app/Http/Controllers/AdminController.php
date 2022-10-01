<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use App\Models\Feedback;

class AdminController extends Controller
{
    public function user()
    {
    	$data=user::all();
    	return view ("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function activedonors()
    {
        $data=donor::all();
        return view("admin.activedonors",compact('data'));
    }

    public function feedbacks()
    {
        $feedback=Feedback::all();
        return view("admin.feedbacks",compact('feedback'));
    }
    public function deletefeedback($id)
    {
        $feedback=Feedback::find($id);
        $feedback->delete();
        return redirect()->back();
    }

    
    public function adminlogin(){

        return view('auth.login');
    }
}
