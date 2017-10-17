<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageContent;
use Illuminate\Http\Request;

class PageTitleController extends Controller
{
	public function view(){
    	$pages = Page::all();
    	return view('create.content', compact('pages'));
    }
    
    public function pages_dropdown(){
    	$pages = Page::all();
    	return view('edit.content', compact('pages'));
    }

    public function pages_content(Page $id){
    	return $id->contents;
    }

    public function saved(Request $request, Page $page_id){

    	$this->validate($request, [
			'content' => 'required||min:20',
			'content_title' => 'required||min:5'
		]);

		// $pgContent = new PageContent(['content' => $request->content, ]);
		// $pgContent->content = $request

    	// Create A New Page Content
    	$return = $page_id->contents()->create($request->all());

		if($return) $arrayName = array('response' => 'Post Successfully Created', 'status' => 'success');
		else $arrayName = array('response' => 'Post Failed To Create!', 'status' => 'error');

   		return $arrayName;
    }

    public function updateContent(Request $request, PageContent $id){
	    $this->validate($request, [
			'content' => 'required||min:20',
            'content_title' => 'required||min:4'
		]);
    	$return = $id->update($request->all());

		if($return) $arrayName = array('response' => 'update Successfully', 'status' => 'success');
		else $arrayName = array('response' => 'update Failed!', 'status' => 'error');

   		return $arrayName;
    }

}
