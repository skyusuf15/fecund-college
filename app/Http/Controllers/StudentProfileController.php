<?php

namespace App\Http\Controllers;

use App\StudentProfile;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function index(){
    	return view('profile.profile');
    }


    public function store(Request $request){
        $this->validate($request, [
            'fullname' => 'required|min:5',
            'email' => 'required|email|min:7|unique:student_profiles',
            'note' => 'min:15|string|nullable',
            'facebook_id' => 'min:4|unique:student_profiles|nullable',
            'twitter_id' => 'min:4|string|unique:student_profiles|nullable',
            'linkedin_id' => 'min:4|string|unique:student_profiles|nullable',
            'image' => 'required|string'
        ]);

        $return = new StudentProfile($request->all());
        if($return->save()) return response()->json(['title' => 'Student Registered!', 'text' => 'Student Profile Now Available', 'status' => 'success']);
        else return response()->json(['title' => 'Registration Failed!', 'text'=>'Failed to Register Student Due To Bad Data Provided! Please Try Again Later.', 'status' => 'error']);
    }

    public function update(Request $request, StudentProfile $id){

        $this->validate($request, [
            'fullname' => 'required|min:5',
            'email' => 'required|email|min:7',
            'facebook_id' => 'min:4|string|nullable',
            'twitter_id' => 'min:4|string|nullable',
            'linkedin_id' => 'min:4|string|nullable',
        ]);

        $id->update(request()->all());
        return response()->json(['title' => 'Profile Update Success!', 'text' => 'Student Profile Updated Successfully', 'status' => 'success']);

    }

    public function get_students()
    {
        return view('profile.edit_profile')->with('students', StudentProfile::all());
    }

    public function delete(StudentProfile $id)
    {
        $id->delete();
        return back();
    }
}