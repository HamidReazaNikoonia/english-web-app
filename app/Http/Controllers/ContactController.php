<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
     public function index()
    {
      return view('pages/contact_formm');
    }

    public function store(Request $request) {




      $model = new Contact;
      $model->user_name = $request->user_name;
      $model->user_email = $request->user_email;
      $model->user_mobile = $request->user_mobile;
      if($request->send_news_letter == true) {
          $model->send_news_letter = 1;
      }

      $model->user_message = $request->user_message;

      $model->save();

      return $model;

    }
}
