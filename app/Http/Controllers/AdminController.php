<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Home_work;
use App\Contact;

class AdminController extends Controller
{


    public function index($k) {


      switch ($k) {
        case 'i':
          $home_work = Home_work::all()->where('type', '=' , 'ielts');
          break;
        case 't':
          $home_work = Home_work::all()->where('type', '=' , 'tofel');
          break;
        case 'iw':
          $home_work = Home_work::all()->where('type', '=' , 'ielts')->where('kind', '=', 'writing');
          break;
        case 'is':
            $home_work = Home_work::all()->where('type', '=' , 'ielts')->where('kind', '=', 'speaking');
            break;
        case 'tw':
            $home_work = Home_work::all()->where('type', '=' , 'tofel')->where('kind', '=', 'writing');
            break;
        case 'ts':
            $home_work = Home_work::all()->where('type', '=' , 'tofel')->where('kind', '=', 'speaking');
            break;
        default:
          $home_work = Home_work::all();
          break;
      }

      return view('admin.show_home_work' , compact('home_work'));

    }



    public function home() {
      $home_work = Home_work::all();
      $contact = Contact::all()->count();
      return view('admin.index' , compact(['home_work','contact']));
    }


    public function show_product($id) {

      $n = Home_work::find($id);

      // seen
      $n->visited = 1;

      

      $n->save();

      return view('admin.show_product' , compact('n'));
    }
}





