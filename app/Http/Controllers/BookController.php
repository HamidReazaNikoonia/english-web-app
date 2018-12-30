<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Book;

class BookController extends Controller
{
    public function index() {
    	return view('book.index');
    }

    public function list() {

    	$books = Book::all();

    	return view('admin.book_list' , compact('books'));
    }

    public function store() {
    	return view('admin.book_form');
    }

    public function save_book(Request $req) {



    	
    		// validate form 
    		
    	$req->validate([

    		'name' => 'required',
    		'short_details' => 'required|max:700',
    		'price' => 'required|numeric',
    		'category' => 'required',
    		'book_file' => 'file'

    	]);

    	$Obj = new Book;

    	$Obj->name = $req->name;
    	$Obj->short_details = $req->short_details;
    	$Obj->details = $req->details;
    	$Obj->price = $req->price;
    	$Obj->author = $req->author;
    	$Obj->category = $req->category;
    	$Obj->details_1 = $req->details_1;
    	$Obj->details_2 = $req->details_2;
    	$Obj->details_3 = $req->details_3;


    	if($req->hasFile('book_file')) {

    		$uploadedFile = $req->file('book_file');
	    	$filename = $uploadedFile->getClientOriginalName();
	    	$path = $req->file('book_file')->storeAs(
	    		'books', $filename
			);

			Storage::put("books/1{$filename}", $uploadedFile);
    		
    	} else {
    		
    		return redirect()->
    		route('books-store-form')->
    		with('status', 'File Not Upload , PLease Try Again');
    	}


    	

		$file_path_in_storage = asset('storage/books/'. $filename);

		$Obj->book_file = $file_path_in_storage;


    	$Obj->save();

    	return redirect()->route('books-list');





    }



    public function edit_form($id) {
    	$book = Book::find($id);
    	if(empty($book) OR !$book) {
    		return redirect()->route('books-list')->with('status', 'This Book Not Exist !');
    	}

    	return view('admin.book_edit' , compact('book'));
    }

    public function edit(Request $req) {
    	$id = $req->id;
    	if(!$id OR empty($id) OR $id == null) {
    		return false;
    	}

    	$Obj = Book::find($id);

    	$Obj->name = trim($req->name);
    	$Obj->short_details = trim($req->short_details);
    	$Obj->details = trim($req->details);
    	$Obj->price = $req->price;
    	$Obj->author = trim($req->author);
    	$Obj->category = $req->category;
    	$Obj->details_1 = trim($req->details_1);
    	$Obj->details_2 = trim($req->details_2);
    	$Obj->details_3 = trim($req->details_3);

    	if($req->hasFile('book_file')) {

    		$uploadedFile = $req->file('book_file');
	    	$filename = $uploadedFile->getClientOriginalName();
	    	$path = $req->file('book_file')->storeAs(
	    		'books', $filename
			);

			Storage::put("books/1{$filename}", $uploadedFile);

			$file_path_in_storage = asset('storage/books/'. $filename);

		$Obj->book_file = $file_path_in_storage;


    	
    		
    	}


    	$Obj->save();

    	return redirect()->route('books-list');


    }


    public function delete(Request $req) {
    	$id =  $req->id;
    	if(!$id OR $id == null) {
    		return " Try Agaian ";
    	}

    	$book = Book::find($id);

    	if($book !== null) {
    		$book->delete();
    		return redirect()->route('books-list');
    	} else {
    		return "this Book Not Exist";
    	}
    }



}
