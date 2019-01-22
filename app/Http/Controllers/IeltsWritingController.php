<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_work;

class IeltsWritingController extends Controller
{
    public function index() {
      return view('ielts.writing_form');
    }

    public function store(Request $request) {

      $request->validate([
        'user_name' => 'required',
        'user_family' => 'required',
        'email' => 'email',
        'mobile' => 'required',
      ]);

      $instanse = new Home_work();

        // user id
      $instanse->user_name = $request->user_name;
      $instanse->user_family = $request->user_family;
      $instanse->email = $request->email;
      $instanse->mobile = $request->mobile;
      $instanse->telegram = $request->telegram;


      $instanse->send_via = $request->send_via;
      $instanse->details = $request->details;
      $instanse->input = $request->input;
      $instanse->visited = 0;

      $instanse->payment_status = 0;
      $instanse->checked_result = 0;
      $instanse->call_to_user = 0;

      $instanse->status = 0; // ثبت موفق
      $instanse->kind = 'writing';
      $instanse->type = 'ielts';


       $price_ = servicePrice::where('service_kind','writing')
           ->where('service_type','ielts')->first();


      $instanse->price = $price_->price;


       $random_id = (rand(1, 1000));


      $characters = 'ABCDE';

      // generate a pin based on 2 * 7 digits + a random character
      $pin = mt_rand(1000000, 9999999)
        . mt_rand(1000000, 9999999)
        . $characters[rand(0, strlen($characters) - 1)];

      // shuffle the result
      $string = str_shuffle($pin);

      $invoice_id ="{$random_id} - {$string}";

      $instanse->invoice_id = $invoice_id;




      $instanse->save();
      return $instanse;
    }
}
