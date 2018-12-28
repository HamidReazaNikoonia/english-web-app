<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
    	return view('book.index');
    }

    public function list() {
    	return view('admin.book_list');
    }
}
