<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCategory;

class BlogController extends Controller
{
    public function post_form() {
    	$categorys = PostCategory::all();
    	return view('blog.post_form', compact('categorys'));
    }
}
