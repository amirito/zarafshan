<?php
if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$mobile=$_POST['mobile'];
		$mail = $_POST['mail'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		
		$to = 'info@rzarafshan.com';
		$subject = "ارتباط با ما";
		
		$message = 'نام و نام خانوادگی : '.$name."\n";
		$message .= 'موبایل : '.$mobile."\n";
		$message .= 'ایمیل : '.$mail."\n";
		$message .= 'موضوع : '.$title."\n";
		$message .= 'متن پیام : '.$content."\n";
		
		
		
		$headers = "From: $mail<$mail>\n";
		$headers .= "Reply-To: $mail<$mail>\n";
		$headers .= "X-Sender: $mail<$mail>\n";
		$headers .= "X-Mailer: PHP4\n"; //mailer
		//$headers .= "X-Priority: 3\n"; //1 UrgentMessage, 3 Normal
		$headers .= "MIME-Version: 1.0\n";
		//$headers .= "X-MSMail-Priority: High\n";
		//$headers .= "Importance: 3\n";
		//$headers .= "Date: $date\n";
		//$headers .= "Delivered-to: $to\n";
		//$headers .= "Return-Path: $mail<$mail>\n";
		$headers .= "Envelope-from: $mail<$mail>\n";
		$headers .= "Content-Transfer-Encoding: 8bit\n";
		$headers .= "Content-Type: text/plain; charset=UTF-8\n";
		
		mail($to, $subject, $message, $headers);
	}
?>
<section class="main">

				<!-- page intro start -->
				<div class="page-intro">

					<!-- google maps start -->
					<!--<div id="map-canvas"></div>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6476.914461177462!2d51.305079000000035!3d35.739565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQ0JzIyLjQiTiA1McKwMTgnMTguMyJF!5e0!3m2!1sen!2sir!4v1417246242891" width="100%" height="450" frameborder="0" style="border:0"></iframe>
					<!-- google maps end -->

				</div>
				<!--  page intro end -->

				<!-- main content wrapper start -->
				<div class="main-content-wrapper">
					<div class="container">
						<div class="row">

							<!-- main content start -->
							
							<!-- main content end -->

							<!-- sidebar start -->
							<aside class="sidebar col-md-6">
								<div class="side vertical-divider-left">
									<h3 class="title">اطلاعات تماس</h3>
									<ul class="list" style="line-height:40px">
										<li><strong>راه سازان زرافشان</strong></li>
										<li>آدرس دفتر مرکزی : خیابان آیت الله کاشانی، بین شاهین و جنت آباد، خیابان نیرو<br>پلاک 1، طبقه 4، واحد 20</li>
										<li>تلفن : 44005308 - 021</li>
                                        <li>تلفکس : 44005332 - 021</li>
                                        <li>همراه (عبدی نیا) : 8171871 - 0912</li>
                                        <li>ایمیل :  info@zarafshan.com</li>
                                        <li>آدرس کارخانه :  جاده شهریار اندیشه - روبروی فاز 2 اندیشه - بلوار شهید راغب (ایران زمین) - خیابان اطلس شرقی - پلاک  پلاک 557</li>
									</ul>
									
									
								</div>
							</aside>
							<!-- sidebar end -->
                            <section class="main-content col-md-6">
								<h1 class="title">تماس با ما</h1>
								<p>با ما در ارتباط باشید</p>
								<div class="alert alert-success hidden" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
								<div class="alert alert-error hidden" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
								</div>
								<div class="contact-form">
									<form id="contact-form" role="form" method="post">
										<div class="form-group name">
											<label for="name">نام و نام خانوادگی</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="">
										</div>
                                        <div class="form-group name">
											<label for="name">موبایل</label>
											<input type="text" class="form-control" id="mobile" name="mobile" placeholder="">
										</div>
										<div class="form-group email">
											<label for="email">ایمیل</label>
											<input type="email" class="form-control" id="mail" name="mail" placeholder="">
										</div>
										<div class="form-group subject">
											<label for="subject">موضوع</label>
											<input type="text" class="form-control" id="title" name="title" placeholder="">
										</div>
										<div class="form-group message">
											<label for="message">متن پیام</label>
											<textarea class="form-control" rows="6" id="content" name="content" placeholder=""></textarea>
										</div>
										<input name="submit" type="submit" value="ارسال" class="btn btn-default">
									</form>
                                    <br>
								</div>
							</section>

						</div>
					</div>
				</div>
				<!-- main content wrapper end -->

			</section>