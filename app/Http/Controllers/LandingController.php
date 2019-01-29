<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingContent;

class LandingController extends Controller
{
    public function index() {
    	return view('landing_page.index');
    }

    public function edit() {
    	$data = LandingContent::find(1);

    	return view('landing_page.edit', compact('data'));

    }

    public function store(Request $req) {

    	$data = LandingContent::find(1);

    	$sub_title = $req->sub_title;

    	$data->sub_title = $sub_title;

    	$data->save();

    	return $data;



    }
}
