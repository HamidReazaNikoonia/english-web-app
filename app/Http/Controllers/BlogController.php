<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCategory;
use App\Post;

class BlogController extends Controller
{


	public function index() {
		$posts = Post::all();
		return view('blog.post_list' , compact('posts'));
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
    	$post->post_text = $req->post_text;
    	$post->head_image   =  $req->head_image;
    	$post->author   =  $req->author;
    	$post->user_id   =  1;
    	$post->activate = 1;

    	$post->save();

    	return $post;


    }



    	public function deletePost(Request $req) {
    		$id = $req->id;
    		if( $id == null OR $id == 0) {
    			return redirect()->route('blog_list')->with("status", "This Post Not Exist");
    		}


    			if(filter_var($id, FILTER_VALIDATE_INT)) {
    				$post = Post::find($id);
    				$post->delete();
    				return redirect()->route('blog_list')->with("status", "Post {$id} NO deleted");
    			} else {
    				return redirect()->route('blog_list')->with("status", "This Post Not Exist");
    			}
    		
    	}


    	public function edit($id) {

    		
    		if($id == 0) {
    			return "false";
    		}


    		$data = Post::find($id);
    		$categorys = PostCategory::all();

    			if($data == null OR count($data) == 0)  {
    				return "post not exist";
    			}


    		return view('blog.post_form_edit' , compact(['data','categorys']));
    	}


        public function edit_store(Request $req) {

    	$req->validate([
    		'title' => 'required',
    		'post_text' => 'required'
    	]);

    	$post = new Post;
    	$post->title = $req->title;
    	$post->desciption = $req->desciption;
    	$post->category = $req->category;
    	$post->head_image   =  $req->head_image;
    	$post->post_text = $req->post_text;
    	$post->author   =  $req->author;
    	$post->user_id   =  1;
    	$post->activate = 1;

    	$post->save();

    	return $post;


    }
}
