<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsertRecord;
use App\Models\Students;

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


    //Function to get all Students record
    public function getallStudents(Request $request){
    	$student  = Students::all();
		return view('home', compact('student'));
    }

    //Function to delete Students record
     public function deleteStudent(Request $request,Students $student){
    	 $student->delete();
    	 return back();

    }

    public function updateStudent(Request $request){
    	$student = Students::find($request->id);
        $student->First_Name = isset($request->f_name) ? $request->f_name : $student->f_name;
        $student->Last_Name = isset($request->l_name) ? $request->l_name : $student->l_name;
        $student->Gender = isset($request->gender) ? $request->gender : $student->gender;
        $student->Class = isset($request->class) ? $request->class : $student->class;
        $student->mobileNumber = isset($request->m_number) ? $request->m_number : $student->m_number;
        $student->save();

        return back();

    }
}
