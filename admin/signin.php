<?php
	session_start();
	$error = '';
	if(isset($_POST['signin'])){
		$user = $_POST['user'];
		$password = $_POST['password'];
		if($user == 'admin' && $password == 'rzarafshan1393'){
			$_SESSION['admin']='admin';
			header('location: index.php');
			}
			else{
				$error = '<div class="alert alert-danger alert-dismissible" role="alert" dir="rtl">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> نام کاربری یا کلمه عبور اشتباه است.
</div>';
				}
		}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ورود به صفحه ادمین</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" dir="rtl">

      <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading">ورود به صفحه ادمین</h2>
        <input type="text" class="form-control" placeholder="نام کاربری" name="user" required autofocus>
        <input type="password" class="form-control" placeholder="کلمه عبور" name="password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">ورود</button>
      </form>

    </div> <!-- /container -->

	<?php echo $error; ?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
