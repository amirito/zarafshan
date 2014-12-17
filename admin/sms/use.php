<?php
include('SendSMS-parsgreen.php');
include('GetCredit.php');
rayweb_send_sms('09361946269','سلام');
echo '<br>';
echo rayweb_get_credit();
?>