<?php

namespace App\Http\Controllers;

use App\PageContent;
use App\Page;
use App\StudentProfile;
use Illuminate\Http\Request;

class showPages extends Controller
{
    public function homepage()
    {
        $PageContent = Page::where('page_name', '=', 'HOME')->get();
        if(sizeof($PageContent) < 1){
            return view('errors.404');
        }
        $contents = $PageContent[0]->contents;
        return view('welcome', compact('contents'));
    }
    public function about()
    {
    	$PageContent = Page::where('page_name', '=', 'ABOUT')->get();
        if(sizeof($PageContent) < 1){
            return view('errors.404');
        }
    	$contents = $PageContent[0]->contents;
    	return view('pages.about', compact('contents'));
    }
    public function gallery()
    {   
        $contents = StudentProfile::all();
        if(sizeof($contents) < 1){
            return view('errors.404');
        }
        
        return view('pages.gallery', compact('contents'));
    }
 	public function services($page = 'services')
    {
    	$PageContent = Page::where('page_name', '=', strtoupper($page))->get();
    	if(sizeof($PageContent) < 1){
            return view('errors.404');
    	}
    	$contents = $PageContent[0]->contents;
    	return view('pages.services',compact('contents'));
    }

}
