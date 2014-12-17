<?php

####### SMS FUNCTION #########
class sms{
	
	private $username;
	private $password;
	private $number;
	
 public function sms($username,$password,$number){
	 $this->username = $username;
	 $this->password = $password;
	 $this->number = $number;
	 }
	
 public	function send_sms($to,$message){
		ini_set("soap.wsdl_cache_enabled", "0");
		$sms_client = new SoapClient('http://87.107.121.54/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
		
		$parameters['username'] = $this->username;
		$parameters['password'] = $this->password;
		$parameters['to'] = $to;
		$parameters['from'] = $this->number;
		$parameters['text'] = $message;
		$parameters['isflash'] =false;
		
		$recId = $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;
		//$send_sms_query="INSERT INTO sms(`id`, `mobile`, `text`, `recId`, `date`) VALUES ('','$pooya_to','$pooya_message','$recId','$date')";
		//$send_sms_result=$mysqli->query($send_sms_query);
		//$send_sms_query = "INSERT INTO sms(`id`, `mobile`, `text`, `recId`, `date`) VALUES ('','$pooya_to','$pooya_message','$recId','$date')";
		//$send_sms_result = mysqli_query($connection,$send_sms_query);
		return $recId;
		}
	
	function get_delivery($recId){
		ini_set("soap.wsdl_cache_enabled", "0");
		//$delivery_client = new SoapClient('http://87.107.121.54/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
		$delivery_client = new SoapClient('http://melipayamak.ir/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));			
		$parameters['recId'] = $recId;
		$delivery_status = $delivery_client->GetDelivery($parameters)->GetDeliveryResult;
		
		switch ($delivery_status) {
		  case '0':
			$delivery_status = 'ارسال شده به مخابرات';
			break;
		  case '1':
			$delivery_status = 'رسیده به گوشی :D';
			break;
		  case '2':
			$delivery_status = 'نرسیده به گوشی';
			break;
		  case '3':
			$delivery_status = 'خطای مخابراتی';
			break;
		  case '5':
			$delivery_status = 'خطای نامشخص';
			break;
		  case '8':
			$delivery_status = 'رسیده به مخابرات';
			break;
		  case '16':
			$delivery_status = 'نرسیده به مخابرات';
			break;
		  case '100':
			$delivery_status = 'نامشخص';
			break;
		} 
		return $delivery_status;
	}
}
#####################