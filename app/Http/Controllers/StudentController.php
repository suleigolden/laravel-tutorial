<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsertRecord;

class StudentController extends Controller
{
	//Function to Insert Student Record
    public function InsertStudent(Request $request){

    	$post =  new InsertRecord();
    	$post ->First_Name = $request['f_name'];
    	$post ->Last_Name = $request['l_name'];
    	$post ->Gender = $request['gender'];
    	$post ->Class = $request['class'];
    	$post ->mobileNumber = $request['m_number'];
    	$post ->save();
    	return back();
    }
}
