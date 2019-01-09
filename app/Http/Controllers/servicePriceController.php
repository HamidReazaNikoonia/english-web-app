<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servicePrice;

class servicePriceController extends Controller
{
    public function set_price_form() {

    	$data = servicePrice::all();
    	return view('admin.service_price', compact('data'));

    }


    public function edit_price(Request $req) {

    	$id = $req->id;
    	if(is_numeric($id)) {
    		$service_price = servicePrice::find($id);

    		if($service_price == null) {
    			return "Error this row not exist";
    			
    		}


    		$price = (int)$req->price;

    		if(!is_numeric($price)) {
    			return "Fuck";
    		}
    		
    		$service_price->price = intval($req->price);

    		$service_price->save();

				return "succsessfully";

    	} else {
    			return "Error id not correct";
    	}

    	
    	return $req;
    }
}
