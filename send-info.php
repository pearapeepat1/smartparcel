<?php

session_start();

if(isset($_POST['uname'])){
	include "db_conn.php";
	$_SESSION['uname'] = $uname;
	
	//$data = "uname=" . $uname;
}
$sToken = "FObwD6ksv1BhepZmTQpZ5pto1LUfwC2H7fDUUFY3NXW";
//$sToken = "yIQFRoihOIl0oADx0t1eE9OBKQZYiV1ECFrTgXNEZeX";
$sMessage = "Smart Parcel Login By\n";
$sMessage .= "Name : Rapeepat Jaiboon"."\n";
$sMessage .= "Date : 23-02-2023";


$chOne = curl_init();
curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($chOne, CURLOPT_POST, 1);
curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=" . $sMessage);
$headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $sToken . '',);
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($chOne);

if ($result) {
	header("location: http://202.29.229.241/invention/index.php");
}
	//Result error 
	//if(curl_error($chOne)) 
	//{ 
		//echo 'error:' . curl_error($chOne); 
	//} 
	//else { 
		//$result_ = json_decode($result, true); 
		//echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	//} 
	//curl_close( $chOne );
