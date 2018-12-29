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
    		return "true";
    	} else {
    		return "false";
    	}


    	$uploadedFile = $req->file('book_file');
    	return $req->hasFile('book_file');
    	$filename = $uploadedFile->getClientOriginalName();
    	$path = $req->file('book_file')->storeAs(
    		'books/', $filename
		);

		Storage::put($path, $uploadedFile);

		$file_path_in_storage = asset('storage/books/'. $filename);

		$Obj->book_file = $file_path_in_storage;


    	$Obj->save();

    	return redirect()->route('books-list');





    }
}
