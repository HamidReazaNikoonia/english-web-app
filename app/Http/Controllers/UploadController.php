<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
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
