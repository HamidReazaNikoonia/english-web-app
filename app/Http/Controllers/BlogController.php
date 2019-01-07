<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCategory;
use App\Post;

class BlogController extends Controller
{


	public function index() {
		$posts = Post::all();
		return $posts;
	}



    public function post_form() {
    	$categorys = PostCategory::all();
    	return view('blog.post_form', compact('categorys'));
    }

    public function store(Request $req) {

    	$req->validate([
    		'title' => 'required',
    		'post_text' => 'required'
    	]);

    	$post = new Post;
    	$post->title = $req->title;
    	$post->desciption = $req->desciption;
    	$post->category = $req->category;
    	$post->head_image   =  $req->head_image;
    	$post->author   =  $req->author;
    	$post->user_id   =  1;
    	$post->activate = 1;

    	$post->save();

    	return $post;


    }


        public function edit(Request $req) {

    	$req->validate([
    		'title' => 'required',
    		'post_text' => 'required'
    	]);

    	$post = new Post;
    	$post->title = $req->title;
    	$post->desciption = $req->desciption;
    	$post->category = $req->category;
    	$post->head_image   =  $req->head_image;
    	$post->author   =  $req->author;
    	$post->user_id   =  1;
    	$post->activate = 1;

    	$post->save();

    	return $post;


    }
}
