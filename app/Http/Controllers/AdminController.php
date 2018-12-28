<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Home_work;
use App\Contact;
use GuzzleHttp\Client;

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

    public function upload_result(Request $rq) {
        $id = $rq->id;
        $url = $rq->url;
        if(strlen($url) == 0) {
          return 'INTERNAL-ERROR (request undefined)';
        }
        if(empty($id) || strlen($id) == 0) {
          return 'INTERNAL-ERROR (request undefined)';
        }
        $Object = Home_work::find($id);

        if(count($Object) == 0 || !$Object || empty($Object)) {
          return 'INTERNAL-ERROR (user unknow)';
        }

        $Object->result_input = $url;
        $Object->upload_user_result = 1;
        $Object->save();

        return $Object;
    }


    public function send_result(Request $rq) {
         $id = $rq->id;
         
        
        if(strlen($id) == 0) {
          return 'INTERNAL-ERROR (request undefined)';
        }

        $Object = Home_work::find($id);

         if(count($Object) == 0 || !$Object || empty($Object)) {
          return 'INTERNAL-ERROR (user unknow)';
        }

        $uploaded_result = $Object->upload_user_result;

        if($uploaded_result == 0) {
          // please upload result first
          return "01";
        }

        // sned notification By SMS
        
        // send notification By User Defined way (email-telegram-both)
        $send_result_method = $Object->send_via;
        $send_success = false;

        switch ($send_result_method) {
          case 'telegram':
            // sned by telegram
            break;
          case 'email':
            // send by email
            break;
          case 'both':
            // send by email and telegram
            break;
        }


        if(true) {
          $Object->call_to_user = 1;
          $mobile = $Object->mobile;
          $type = 'send_result';
          $Object->save();
          $n = $this->send_sms($mobile,$type);
        }

        $m = json_decode($n);
        if($m->IsSuccessful) {
          return "message successfully sent";
        } else {
          return "please try again";
        }






    }


    public function send_sms($mobile_no,$type) {

      $message_ = "test ";

      switch ($type) {
        case 'send_result':
          $message_ = "your result now ready ";
          break;
        default:
          $message_ = "test message ";
          break;
      }

      $api = 'https://api.sms.ir/users/v1/Token/GetToken';
      $apiKey = 'cf1761abf928420d6e3a617';
      $secretKey = '6f$1Q#))&S!)%9#';

      $send_message_api = 'https://api.sms.ir/users/v1/Message/SendByMobileNumbers';


      $postData = array(
      'UserApiKey' => 'cf1761abf928420d6e3a617',
      'SecretKey' => '6f$1Q#))&S!)%9#'
    );

    $postString = json_encode($postData);

    $ch = curl_init('https://api.sms.ir/users/v1/Token/GetToken');

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
            
            ));
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_POST, count($postString));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

    $result = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($result);
    if(is_object($response)){
      if($response->IsSuccessful == true){
        $resp = $response->TokenKey;
        
          $ch_send = curl_init($send_message_api);
          curl_setopt($ch_send, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'x-sms-ir-secure-token: '.$resp
            
            ));

     $SendData = array(
    'Message' => $message_ ,
    'MobileNumbers' => [
         $mobile_no
    ],
    'CanContinueInCaseOfError' => true
  );

          $SendData_ = json_encode($SendData);


          curl_setopt($ch_send, CURLOPT_HEADER, false);
          curl_setopt($ch_send, CURLOPT_VERBOSE, true);
          curl_setopt($ch_send, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch_send, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch_send, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($ch_send, CURLOPT_POST, count($SendData_));
          curl_setopt($ch_send, CURLOPT_POSTFIELDS, $SendData_);

    $result_send = curl_exec($ch_send);
    curl_close($ch_send);


    return $result_send;





      } else {
        $resp = $response->Message;
        return $resp;
      }
    }



    //   $client = new Client();

    //    $res = $client->request('POST', 'https://api.sms.ir/users/v1/Token/GetToken', [
    //         'form_params' => [
    //             'UserApiKey' => 'cf1761abf928420d6e3a617',
    //             'SecretKey' => '6f$1Q#))&S!)%9#'
    //         ],
    //         'headers' => [
    //         'Content-Type'     => 'application/json',
    //         'Accept'     => 'application/json'
            
    // ]
    //     ]);


        // echo $res->getStatusCode();
        // echo "<br>";
        // // 200
        // // echo $res->getHeader('content-type');
        // echo "<br>";
        // // 'application/json; charset=utf8'
        // echo $res->getBody();

    }
}





