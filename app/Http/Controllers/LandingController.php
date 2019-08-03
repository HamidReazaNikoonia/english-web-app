<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingContent;

class LandingController extends Controller
{
    public function index() {
    	$data = LandingContent::find(1);
    	return view('landing_page.index', compact('data'));
    }

    public function edit() {
    	$data = LandingContent::find(1);

    	return view('landing_page.edit', compact('data'));

    }

    public function store(Request $req) {

    	$data = LandingContent::find(1);

    	$sub_title =      $req->sub_title;
    	$text_1_content = $req->text_1_content;
    	$text_2_content = $req->text_2_content;
    	$text_3_content = $req->text_3_content;
    	$text_1_title =   $req->text_1_title;
    	$text_2_title =   $req->text_2_title;
    	$text_3_title =   $req->text_3_title;

    	

    	if($sub_title !== null OR $sub_title !== '' OR $sub_title !== " ") {
    		$data->sub_title = trim($sub_title);
    	} 

    	if($text_1_content !== null OR $text_1_content !== '' OR $text_1_content !== " ") {
    		$data->text_1_content = trim($text_1_content);	
    	}

    	if($text_2_content !== null OR $text_2_content !== '' OR $text_2_content !== " ") {
    		$data->text_2_content = trim($text_2_content);	
    	} 

    	if($text_3_content !== null OR $text_3_content !== '' OR $text_3_content !== " ") {
    		$data->text_3_content = trim($text_3_content);	
    	}  


    	if($text_1_title !== null OR $text_1_title !== '' OR $text_1_title !== " ") {
    		$data->text_1_title = trim($text_1_title);	
    	} 
    	

    	if($text_2_title !== null OR $text_2_title !== '' OR $text_2_title !== " ") {
    		$data->text_2_title = trim($text_2_title);	
    	} 

    	if($text_3_title !== null OR $text_3_title !== '' OR $text_3_title !== " ") {
    		$data->text_3_title = trim($text_3_title);	
    	} 

    	$data->save();

    	return $data;



    }
}
