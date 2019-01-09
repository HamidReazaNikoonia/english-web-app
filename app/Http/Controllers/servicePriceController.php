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
    			return redirect()->route('set_price_for_service')
    			->with("status", "Error this row not exist");
    		}


    		$price = $req->prrice;
    		if(!is_numeric($price)) {
    			return "Fuck";
    		}
    		return $req->price;
    		// $service_price->price = $req->price;

    		// $service_price->save();

    	} else {
    		return redirect()->route('set_price_for_service')
    			->with("status", "Error id not correct");
    	}

    	
    	return $req;
    }
}
