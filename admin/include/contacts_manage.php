<?php
$error = '';
#################
$groups_list = '';
$groups_query = "SELECT * FROM groups ; ";
$groups_result = $mysqli->query($groups_query);
while($groups_row = $groups_result->fetch_assoc()){
	$groups_list .= "<option value='$groups_row[id]'>".$groups_row['group_name']."</option>";
}

#insert users 

if(isset($_POST['add'])){
	$user = new Contacts();
	$inputArray['last_name']= $_POST['last_name'];
	$inputArray['mobile']= $_POST['mobile'];
	$inputArray['gender']= $_POST['gender'];
	$inputArray['group_id']= $_POST['group_id'];
	$inputArray['activate']= 1;
	
	if($user->addRow('contacts',$inputArray)){
		$error = 'اطلاعات شما ثبت شد';
		}else{
			$error = 'خطا در ثبت';
			}
	
	}
?>
<div class="container">
	<h1>اضافه کردن شخص به دفترچه تلفن</h1>
    <div class="col-md-7 pull-right">
        <form method="post" role="form" class="form-horizontal" enctype="multipart/form-data">
        	<hr>

            <div class="form-group">
                
                <label for="last_name" class="col-sm-4 pull-right">نام خانوادگی</label>
                <div class="col-sm-8">
                	<input name="last_name" class="form-control" type="text">
                </div>
            </div>
            
            <div class="form-group">
                
                <label for="mobile" class="col-sm-4 pull-right">موبایل</label>
                <div class="col-sm-8">
                	<input name="mobile" class="form-control" type="text">
                </div>
            </div>
             <div class="form-group">
            <label for="mobile" class="col-sm-4 pull-right">جنسیت</label>
            <div class="col-sm-8">
            <input type="radio" name="gender"  value="male" checked>مرد
			<input type="radio" name="gender" value="female">زن
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
                <input type="submit" name="add" class="btn btn-success" value="ثبت">
                <input type="reset" class="btn btn-info" value="ویرایش">
            </div>
        </form>
        <?php echo $error; ?>
    </div>
</div>