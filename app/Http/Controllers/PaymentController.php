<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home_work;
use SoapClient;

class PaymentController extends Controller
{




	public function pay_result($id) {

		$MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
		$Authority = $_GET['Authority'];
		$Status = $_GET['Status'];
		$price = null;
		$id_ = (int)$id;
		$home_work = Home_work::find($id_);
		
		if($home_work !== null) {
			$price = $home_work->price;
		}

		
			// payment successfully 
		if($Status == "OK") {

			$client = new SoapClient(
				'https://sandbox.zarinpal.com/pg/services/WebGate/wsdl',
				 ['encoding' => 'UTF-8']
				);

			

			$result = $client->PaymentVerification(
					[
						'MerchantID' => $MerchantID,
						'Authority' => $Authority,
						'Amount' => $price,
					]
				);

				
			// check for Soap request status and get Ref id
				if($result->Status == 100) {
					$text = 'Transaction success. RefID:'.$result->RefID;
					return $text;
				} else {
					$text =  'Transaction failed. Status:'.$result->Status;
					return $text;
				}




			

		} else {
			return 'Transaction canceled by user';
		} // end successfully status


		
	}


    public function pay($id) {

    	


    	if(is_numeric($id)) {
    		$home_work = Home_work::find($id);	
    	} else {
    		$id = (int)$id;
    		$home_work = Home_work::find($id);
    	}

    	if($home_work == null) {
    		return redirect()->back();
    	}

      // payment 
      
      $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required
      $id_ = $home_work->id;
      $Amount = $home_work->price; //Amount will be based on Toman - Required
      $Description = 'توضیحات تراکنش تستی'; // Required
      // $Email = 'UserEmail@Mail.Com'; // Optional
      // $Mobile = '09123456789'; // Optional
      $CallbackURL = "http://127.0.0.1:8000/service/payment-result/{$id_}"; // Required

	  $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);





	$result = $client->PaymentRequest(
	[
	'MerchantID' => $MerchantID,
	'Amount' => $Amount,
	'Description' => $Description,
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
    	
    		}








	}
