<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_work;
use App\servicePrice;
use SoapClient;

class IeltsSpeakingController extends Controller
{




  public function send_sms($mobile_no,$type,$code,$name) {
    $this->message_ = "";
    $this->code_ = null;

    if($type) {
      switch($type) {
        case "send_home_work":
          $this->message_ = "کاربر".$name."\n ارسال داکیومنت شما با موفقیت انجام شد \n کد رهگیری شما".$this->code_."میباشد";
          break;
        default:
          $this->message_ = "درخواست شما ثبت شد";
      }
    } else {
      return false;
    }

    // send API
    

    $curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "https://ghasedakapi.com/v1/sms/send/simple",
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => "message=".$this->message_."&sender=".$mobile_no."&receptor=".$mobile_no."&=",
CURLOPT_HTTPHEADER => array(
"apikey: 8dd7021a552cb4019c4f3785e62430d3a5c9af5fab786d72a4f7d8c10624bd1b",
),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
} 
    
    // 
  }


  //  public function send_sms($mobile_no,$type) {

  //     $message_ = "test ";

  //     switch ($type) {
  //       case 'send_result':
  //         $message_ = "your result now ready ";
  //         break;
  //       default:
  //         $message_ = "test message ";
  //         break;
  //     }

  //     $api = 'https://api.sms.ir/users/v1/Token/GetToken';
  //     $apiKey = '497e3a6acc72d087cf317950';
  //     $secretKey = 'm5b@#&)#3$^V@M@';

  //     $send_message_api = 'https://api.sms.ir/users/v1/Message/SendByMobileNumbers';


  //     $postData = array(
  //     'UserApiKey' => 'cf1761abf928420d6e3a617',
  //     'SecretKey' => '6f$1Q#))&S!)%9#'
  //   );

  //   $postString = json_encode($postData);

  //   $ch = curl_init('https://api.sms.ir/users/v1/Token/GetToken');

  //   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  //           'Content-Type: application/json'
            
  //           ));
  //   curl_setopt($ch, CURLOPT_HEADER, false);
  //   curl_setopt($ch, CURLOPT_VERBOSE, true);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  //   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  //   curl_setopt($ch, CURLOPT_POST, count($postString));
  //   curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

  //   $result = curl_exec($ch);
  //   curl_close($ch);

  //   $response = json_decode($result);
  //   if(is_object($response)){
  //     if($response->IsSuccessful == true){
  //       $resp = $response->TokenKey;
        
  //         $ch_send = curl_init($send_message_api);
  //         curl_setopt($ch_send, CURLOPT_HTTPHEADER, array(
  //           'Content-Type: application/json',
  //           'x-sms-ir-secure-token: '.$resp
            
  //           ));

  //    $SendData = array(
  //   'Message' => $message_ ,
  //   'MobileNumbers' => [
  //        $mobile_no
  //   ],
  //   'CanContinueInCaseOfError' => true
  // );

  //         $SendData_ = json_encode($SendData);


  //         curl_setopt($ch_send, CURLOPT_HEADER, false);
  //         curl_setopt($ch_send, CURLOPT_VERBOSE, true);
  //         curl_setopt($ch_send, CURLOPT_RETURNTRANSFER, true);
  //         curl_setopt($ch_send, CURLOPT_SSL_VERIFYPEER, false);
  //         curl_setopt($ch_send, CURLOPT_SSL_VERIFYHOST, false);
  //         curl_setopt($ch_send, CURLOPT_POST, count($SendData_));
  //         curl_setopt($ch_send, CURLOPT_POSTFIELDS, $SendData_);

  //   $result_send = curl_exec($ch_send);
  //   curl_close($ch_send);
  //   return $result_send;

  //     } else {
  //       $resp = $response->Message;
  //       return $resp;
  //     }
  //   }
  // }

    public function index() {
      return view('ielts.speaking_form_ui');
    }

    public function store( Request $request) {

      

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
      $instanse->kind = 'speaking';
      $instanse->type = 'ielts';

       $price_ = servicePrice::where('service_kind','speaking')
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

      
      $mobile_no = $instanse->mobile;
      if($mobile_no !== null || $mobile_no !== "" || count($mobile_no) !== 0 ) {
        $sms_ = $this->send_sms($mobile_no,"send_home_work",$invoice_id,$instanse->user_name); 
      } 

      
      
  

      $instanse->save();
      // return $instanse->id;
      return $sms_;


    }
}
