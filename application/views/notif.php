<?php

  
    

function sendPush($to='', $data = array())
{
	$apiKey = 'AIzaSyD77lrUiJlQnDZNWct5lAM6Cc-CErPHvPY';
	
	$fields = array('to' =>$to ,'notification' => $data );

	$headers = array('Authorization : key='.$apiKey, 'Content-Type: application/json' );

	$url = 'https://fcm.googleapis.com/fcm/send';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
	$result = curl_exec($ch);

	curl_close($ch);
	return json_decode($result, true);
}
        $to = "dRg7XgxsnL0:APA91bESLwX9PtLVXQgoZwoD2UAnyL91O7ZXm4F-Nyqz6QoD7eVpZrLw0KRARv-K2nXbJ7lkE9zZJbSAzWx_HV7ySvoToFOUuIMWjfZUu98putPrJr_3iC5A-oKl2P24_IN5tslnA1fM";

$data =  array(
	'body' => 'Une alerte de sang à été lancé ' 
);

print_r(sendPush($to, $data));
redirect("blood/alertconfirm");

?>