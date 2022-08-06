<?php
function sendsms_reminder($name, $phone, $rdate){
	$mobile='91'.$phone;
	$message="Your next routine visit date : ".$rdate;
	
	$apiKey = urlencode('API KEY');    ///api key here
	$numbers = array($mobile);
	$sender = urlencode($name);
	$message = rawurlencode($message);
	$numbers = implode(',', $numbers);
 	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}	
?>