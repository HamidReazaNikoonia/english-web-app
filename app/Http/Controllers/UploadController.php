<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{


	public function uploadPostImage(Request $req) {

		if($req->hasFile('file')) {
			$uploadImage = $req->file('file');
			$filename = time().$uploadImage->getClientOriginalName();

			$path_file = Storage::putFileAs('public_html/blog_images', $uploadImage, $filename);

			$file_path_in_storage = $path_file;

			return $file_path_in_storage;
		} else {
			return "false";
		}
	}



    public function store(Request $rq) {


	
	if ($rq->hasFile('file')) {


		$uploadedFile = $rq->file('file');
		$filename = time().$uploadedFile->getClientOriginalName();
		$path = $rq->file('file')->storeAs(
    		'avatarsooo', $filename
		);

		Storage::put('user_result/1', $uploadedFile);

		
    	
    	// $path = $rq->file('file')->store('uplaod');
    

       return asset('storage/avatarsooo/'. $filename) ;
    // return $path;
} else {
	return "no";
}

    	
    }
}
