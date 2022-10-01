<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorsController extends Controller
{
	
    //
    public function addData(Request $req)
    {

    	$donor = new Donor;
    	$donor->firstName=$req->firstName;
    	$donor->lastName=$req->lastName;
    	$donor->email=$req->email;
    	$donor->blood_group=$req->blood_group;
    	$donor->birthDate=$req->birthDate;
    	$donor->phoneNumber=$req->phoneNumber;
    	$donor->weight=$req->weight;
    	$donor->gender=$req->gender;
    	$donor->city=$req->city;
    	$donor->address=$req->address;
    	$donor->save();

        return redirect()->back()->with('success','successfully registered as donor');

    }

}
