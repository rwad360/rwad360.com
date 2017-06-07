<?php
	session_start();
	
	include 'admin/init.php';
	include $tmpl.'head.php';
	include $tmpl.'navbar_top.php';

	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
		$msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		
		$formErrors = array();
		
		if (strlen($user) <= 3){
			$formErrors[] = 'Username Must be larger than 3 charachters';
		}
		if (strlen($mail) <= 1){
			$formErrors[] = 'mail can not be empty';
		}
		if (strlen($cell) <= 9){
			$formErrors[] = 'cellphone Must be 10 charachters long';
		}
		if (strlen($msg) <= 25){
			
			$formErrors[] = 'msg Must be greater than 25 charachters long';
		}
		// sending email..
		$headers = 'From:'.$mail.'' ;
		$myEmail = 'info@rwad360.com';
		$subject = 'اتصل بنا';
		$message = '
			
			<h1>بريد من موقع رواد ٣٦٠</h1>
			
			اسم المرسل: '.$user.'. 
			رقم جوال المرسل: '.' '.$cell.'. 
			الرسالة:
			'.$msg.'.';
		
		if(empty($formErrors)) {
		
			mail($myEmail, $subject, $message, $headers);
			$user = '';
			$mail = '';
			$cell = '';
			$msg = '';
			
			$success = '<div class="alert alert-success"><strong> لقد اسلمنا استفسارك وسنقوم بالرد عليك في اقرب وقت ممكن.</div>';
			
		}
	}
		
?>


	<body>


		<!-- START FORM -->
		
		<div class="container">
			<h1 class="text-center" style="margin-top: 25px;">اتصل بنا</h1>
			<form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<?php if (! empty($formErrors)) { ?>
				<div class="alert alert-success alert-dismissible" role="start">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<?php 
						foreach($formErrors as $error) {
							echo $error.'<br/>';
						}
					?>
				</div>
				<?php }	?>
				<?php if (isset($success)) { echo $success; } ?>
				<div class="form-group">
					<input class="username form-control" type="text" name="username" placeholder="الاسم الكامل"value="<?php if (isset($user)) {echo $user;} ?>" />
					<i class="fa fa-user fa-fw"></i>
					<span class="asterisx">*</span>
					<div class="alert alert-success custom-alert">
					<strong>اسم المرسل</strong> يجب ان يحتوي على <strong>الاسم الاول والعائلة</strong> 
					</div>
				</div>
				<div class="form-group">
					<input 
							class="email form-control" 
							type="email" 
							name="email" 
							placeholder="الرجاء كتابة البريد الالكتروني كاملا بشكل صحيح"
							value="<?php if (isset($mail)) {echo $mail;} ?>"/>
					<i class="fa fa-envelope fa-fw"></i>
					<span class="asterisx">*</span>
					<div class="alert alert-success custom-alert">
					<strong>خانة البريدالإلكتروني</strong> لا يمكن ان تكون فارغة.
					</div>
				</div>
				<div class="form-group">
					<input 
							class="cellphone form-control" 
							type="text" 
							name="cellphone" 
							placeholder="أدخل رقم الجوال بالصيفة التالية (********٠٥)"
							value="<?php if (isset($cell)) {echo $cell;} ?>"/>
					<i class="fa fa-mobile fa-fw"></i>
					<span class="asterisx">*</span>
					<div class="alert alert-success custom-alert">
						<strong>رقم الجوال</strong> يجب أن يكون بطول <strong>١٠</strong> خانات على الأقل.
					</div>
				</div>
				<div class="form-group">
					<textarea 
							class="message form-control" 
							name="message"
							placeholder="ضع استفسارك بشكل واضح هنا!"><?php if (isset($msg)) {echo $msg;} ?></textarea>
					<div class="alert alert-success custom-alert">
						<strong>الرجاء...</strong> كتابة استفسارك بشكل واضح "٢٥ حرف على الاقل".
					</div>
				</div>
				<input 
						class="btn btn-primary" 
						type="submit" 
						value="ارسل الرسالة"/>
				<i class="fa fa-send fa-fw send-icon"></i>
			</form>
		</div>
		<!-- END FORM -->
		
		<?php 	include $tmpl.'footer.php'; ?>

	</body>
</html>