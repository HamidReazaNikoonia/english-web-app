<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_work;
use App\servicePrice;
use SoapClient;

class IeltsSpeakingController extends Controller
{



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
      $apiKey = '497e3a6acc72d087cf317950';
      $secretKey = 'm5b@#&)#3$^V@M@';

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
  }

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

      $this->send_sms("09387460520","type");



      // payment 
      
      $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required
      $Amount = 1000; //Amount will be based on Toman - Required
      $Description = 'توضیحات تراکنش تستی'; // Required
      $Email = 'UserEmail@Mail.Com'; // Optional
      $Mobile = '09123456789'; // Optional
      $CallbackURL = 'http://127.0.0.1:8000'; // Required



$client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);





$result = $client->PaymentRequest(
[
'MerchantID' => $MerchantID,
'Amount' => $Amount,
'Description' => $Description,
'Email' => $Email,
'Mobile' => $Mobile,
'CallbackURL' => $CallbackURL,
]
);

//Redirect to URL You can do it also by creating a form
if ($result->Status == 100) {

return redirect('https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);
//برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
//Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
} else {
echo'ERR: '.$result->Status;
}


      



      $instanse->save();
      return $instanse;
    }
}
