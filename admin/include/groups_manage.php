<?php
$error = '';
#################
#insert users 

if(isset($_POST['add'])){
	$user = new Contacts();
	$inputArray['group_name']= $_POST['group_name'];
	
	if($user->addRow('groups',$inputArray)){
		$error = 'ok';
		}else{
			$error = 'no';
			}
	
	}
#################
$groups_list = '';
$groups_query = "SELECT * FROM groups ; ";
$groups_result = $mysqli->query($groups_query);
while($groups_row = $groups_result->fetch_assoc()){
	$groups_list .= "<option value='$groups_row[id]'>".$groups_row['group_name']."</option>";
}



?>
<div class="container">
	<h1>مدیریت گروه ها</h1>
    <div class="col-md-7 pull-right">
        <form method="post" role="form" class="form-horizontal" enctype="multipart/form-data">
        	<hr>
           <div class="form-group">
                
                <label for="group_name" class="col-sm-4 pull-right">نام گروه</label>
                <div class="col-sm-8">
                	<input name="group_name" class="form-control" type="text">
                </div>
            </div>
            
            <div class="form-group">
                <input type="submit" name="add" class="btn btn-success" value="ثبت">
       
            </div>
        </form>
        <?php echo $error; ?>
        <hr>
        <form method="post" role="form" class="form-horizontal" enctype="multipart/form-data">
           <div class="form-group">
            	<label for="groupsegory_id" class="col-sm-4 pull-right"> انتخاب گروه</label>
                <div class="col-sm-8">
                    <select class="form-control" name="group_id">
                            <?php echo $groups_list ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <input type="submit" name="select" class="btn btn-success" value="انتخاب">
            </div>
        </form>
        <hr>
<?php
#insert group
if(isset($_POST['remove'])){
	$user = new Contacts();
	$id= $_POST['id'];

	
	if($user->deleteRow('contacts',$id)){
		$error = 'ok';
		}else{
			$error = 'no';
			}
	
	}
	
if(isset($_POST['select'])){
	$group_id = $_POST['group_id'];
	$contacts_query = "SELECT * FROM contacts WHERE group_id = '$group_id' ; ";
	$contacts_result = $mysqli->query($contacts_query);
	echo '
	<table class="table table-striped table-hover table-bordered tablesorter">
            	<thead>
                <tr>
					<th>ردیف</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
					<th>موبایل</th>
                    <th>گروه</th>
                    <th>عملیات</th>
				</tr>
                </thead>
                <tbody>';
       		$i=1;
		while($contacts_row = $contacts_result->fetch_assoc()){
			echo '<tr>
			<form method="post">
					<td>1</td>
					<td>'.$contacts_row['first_name'].'</td>
					<td>'.$contacts_row['last_name'].'</td>
					<td>'.$contacts_row['mobile'].'</td>
					<td>'.$contacts_row['group_id'].'</td>	
					<input type="hidden" name="id" value="'.$contacts_row['id'].'">
					<td><input type="submit" name="remove" value="حذف" class="btn btn-danger"></td>
			</form>	
		  </tr>';
		  $i++;
			}
		echo '
        </tbody>
        </table>';
}
?>
    </div>
</div>