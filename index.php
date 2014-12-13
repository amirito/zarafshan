<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<!-- jssor -->
<link rel="stylesheet" type="text/css" href="css/slider.css">
<title>زر افشان</title>
</head>

<body>
<section>
	<div class="navbar-top">
    	<div class="container">
            <div class="col-sm-6 text-left">
                <i class="fa fa-envelope"></i> info@zarafshan.com
            </div>
            <div class="col-sm-6" dir="rtl">
                <a href="callto:+982144005308"><i class="fa fa-phone"></i> 44005308 - 021</a>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center">
    	<img src="images/logo_blue.png">
        <h3>شرکت راه سازان زرافشان</h3>
        <h4>مورد تایید شهرداری مرکز</h4>
    </div>
    <!-- navbar start -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="pull-right active"><a href="#">صفحه اصلی</a></li>
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">محصولات <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?page=table">جدول</a></li>
                <li><a href="?page=sangdal">سنگدال</a></li>
              </ul>
            </li>
            <li class="pull-right"><a href="#">درباره ما</a></li>
            <li class="pull-right"><a href="#">تماس با ما</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- navbar end -->
</section>

<?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/home.php';
					}


?>

<footer dir="rtl">
	<div class="col-md-4">
    	<h3>درباره ما</h3>
        <hr>
        <ul class="list-unstyled">
        	<li>شرکت راه سازان زرافشان</li>
            <li>مورد تایید شهرداری مرکز</li>
        </ul>
    </div>
    <div class="col-md-4">
    	<h3>ارتباط با ما</h3>
        <hr>
        <ul class="list-unstyled">
        	<li><i class="fa fa-phone"></i> تلفن : 44005308 - 021</li>
            <li><i class="fa fa-mobile"></i> همراه : 1302895 - 0912</li>
            <li><i class="fa fa-fax"></i> فکس : 44005332 - 021</li>
            <li><i class="fa fa-envelope"></i> ایمیل : info@zarafshan.com</li>
            <li><i class="fa fa-taxi"></i> آدرس : خیابان آیت الله کاشانی، بین شاهین و جنت آباد، خیابان نیرو، پلاک1، طبقه4، واحد 20</li>
        </ul>
    </div>
    <div class="col-md-4">
    	<h3>لینک های مرتبط</h3>
        <hr>
        <ul class="list-unstyled">
        	<li><a href="#">صفحه اصلی</a></li>
            <li><a href="#">محصولات</a></li>
            <li><a href="#">ارتباط با ما</a></li>
            <li><a href="#">درباره ما</a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
	<div class="footer-bottom">
    	<p>کلیه حقوق این سایت متعلق به شرکت راه سازان زرافشان می باشد</p>
        <p style="margin-bottom:0 !important">Design by <a href="http://rayweb.ir">rayweb</a></p>
    </div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- jssor -->
<script src="js/jssor.js"></script>
<script src="js/jssor.slider.min.js"></script>
<script src="js/slider.js"></script>
</body>
</html>