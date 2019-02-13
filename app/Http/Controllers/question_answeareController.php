<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class question_answeareController extends Controller
{
    public function index() {
    	return view("admin.question_answeare");
    }
}
