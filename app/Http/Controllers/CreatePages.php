<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class CreatePages extends Controller
{
    public function view(){
    	return view('create.pages');
    }

    public function saved(Request $request){

    	$this->validate($request, [
			'page_name' => 'required||min:3',
			'page_abbr' => 'required||min:1'
		]);


    	// Create A New Page Content
    	$return = new Page($request->all());

		if($return->save()) $arrayName = array('response' => 'Page Successfully Created', 'status' => 'success');
		else $arrayName = array('response' => 'Page Failed To Create!', 'status' => 'error');

   		return $arrayName;
    }
}
