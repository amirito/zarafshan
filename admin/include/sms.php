<?php
$error = '';
$msg="با سلام\nشرکت راه سازان زرافشان، تولید کننده انواع قطعات بتنی (جدول و سنگدال)\nعبدی نیا\nwww.rzarafshan.com";
#################
$groups_list = '';
$groups_query = "SELECT * FROM groups ; ";
$groups_result = $mysqli->query($groups_query);
while($groups_row = $groups_result->fetch_assoc()){
	$groups_list .= "<option value='$groups_row[id]'>".$groups_row['group_name']."</option>";
}
if(isset($_POST['send'])){
	$group_id = $_POST['group_id'];
	$message = $_POST['message'];
	
	$sms_query = "SELECT * FROM contacts WHERE group_id = '$group_id' ; ";
	$sms_result = $mysqli->query($sms_query);
	$s = new sms(SMS_USER_NAME,SMS_PASSWORD,SMS_NUMBER);
	$genderFlag;
	while($sms_row = $sms_result->fetch_assoc()){
		
		if($sms_row['gender'] == 'male'){
			$genderFlag = "آقای";	
			}elseif($sms_row['gender'] == 'female'){
			$genderFlag = "خانم";
			}
		$finalMessage = $genderFlag.' '.$sms_row['last_name']."\n".$message;
		$s->send_sms($sms_row['mobile'],$finalMessage);
	}
}
?>
<div class="container">
	<h1>ارسال اس ام اس</h1>
    <div class="col-md-7 pull-right">
        <form method="post" role="form" class="form-horizontal" enctype="multipart/form-data">
        	<hr>
           
            <div class="form-group">
            	<label for="groupsegory_id" class="col-sm-4 pull-right"> متن</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="5" name="message"><?php echo $msg; ?></textarea>
                </div>
            </div>
            
            <div class="form-group">
            	<label for="groupsegory_id" class="col-sm-4 pull-right"> انتخاب گروه</label>
                <div class="col-sm-8">
                    <select class="form-control" name="group_id">
                            <?php echo $groups_list ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <input type="submit" name="send" class="btn btn-success" value="فرستادن">
                <input type="reset" class="btn btn-info" value="ویرایش">
            </div>
        </form>
        <?php echo $error; ?>
    </div>
</div>