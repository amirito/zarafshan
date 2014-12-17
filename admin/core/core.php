<?php
//error_reporting(E_ALL);
//ini_set('display_errors','1');

include 'config.php';
include 'class.Sms.php';
include 'class.DatabaseHandler.php';
include 'class.Contacts.php';

session_start();
$mysqli = new mysqli('localhost', 'rzarafshan', 'rzarafshan1393', 'rzarafshan') or die('Connection Failed...!');
$mysqli->set_charset('utf8');
/*include('jdf.php');
include('SendSMS-parsgreen.php');
include('GetCredit.php');*/

function image_upload($image){
if($image['error']==0 && ($image['type']=='image/jpeg' || $image['type']=='image/JPG' || $image['type']=='image/gif' || $image['type']=='image/png') ){
		$address = "../images/upload/$image[name]";
		if(move_uploaded_file($image['tmp_name'],$address)){
			return true;
			}else{
			return false;
			}
		}else{
			return false;
			}
}
?>