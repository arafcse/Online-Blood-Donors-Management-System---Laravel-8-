<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function addFeedback(Request $req){

    $feedback = new Feedback;
        $feedback->Name=$req->Name;
        $feedback->Email=$req->Email;
        $feedback->Feedback=$req->Feedback;
        $feedback->save();
        
    return redirect()->back();
    }
}
