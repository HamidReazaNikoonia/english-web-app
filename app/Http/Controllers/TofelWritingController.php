<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_work;

class TofelWritingController extends Controller
{
    public function index() {
      return view('tofel.writing_form');
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
      $instanse->type = 'tofel';


      $instanse->save();
      return $instanse;
    }
}
