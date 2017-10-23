<?php

namespace App\Http\Controllers;

use App\StudentProfile;
use Illuminate\Http\Request;
// import the Intervention Image Manager Class
// use Intervention\Image\ImageManager;

class StudentProfileController extends Controller
{
    public function index(){
    	return view('profile.profile');
    }

    public function upload(Request $request){

        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //$image = $request->file('file');
        // $filename = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
        // $path = public_path('/uploads/students_image/' . $filename);

        // Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $path = $request->file('file')->store('uploads/students_image');

        return response()->json(['url' => $path]);
    }
    public function save(Request $request){
        $this->validate($request, [
            'fullname' => 'required|min:5',
            'email' => 'required|email|min:7',
            'bio' => 'min:15',
            'facebook_id' => 'required|min:4|unique:student_profiles',
            'twitter_id' => 'min:4|string|unique:student_profiles',
            'linkedin_id' => 'min:4|string|unique:student_profiles',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            // 'image' => 'required||min:5'
        ]);

        if($request->hasFile('file')) $path = $request->file('file')->store('uploads/students_image');

        $return = new StudentProfile([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'note' => $request->input('bio'),
            'facebook_id' => $request->input('facebook_id'),
            'twitter_id' => $request->input('twitter_id'),
            'linkedin_id' => $request->input('linkedin_id'),
            'image' => $path
            // 'image' => $request->input('image') 
        ]);
        
        if($return->save()) return response()->json(['title' => 'Student Registered!', 'text' => 'Student Profile Now Available', 'status' => 'success']);
        else return response()->json(['title' => 'Registration Failed!', 'text'=>'Failed to Register Student Due To Bad Data Provided! Please Try Again Later.', 'status' => 'error']);
    }
}