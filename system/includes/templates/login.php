 <?php
	
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=wrong') !== false){
	echo "<div class='alert alert-danger' role='alert'>
				<button style='float:left;' type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>
				<p><span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span> <strong> نأسف... </strong>البريد الإلكتروني/ كلمة المرور غير متوافقان حاول مرة اخرى!!!</p>
				</div>";
	}
	
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=notAdmin') !== false){
		echo "<div class='alert alert-danger' role='alert'>
				<button style='float:left;' type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>
				<p><span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span> <strong> نأسف... </strong>لكن لم يتم تعيينك مشرفاً للموقع بعد!!</p>
				</div>";
		}

		if (isset($_SESSION['id'])) {
			include 'dbh.php';
			
			
			?>	
				<div class="side-box">
					<div class='profile-box text-left'>
						<form action= "<?php echo $func; ?>logout.inc.php" method='POST'>						
							<legend style='font-size:24px'><p>مرحباً...</p></legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-8">
										<ul class="list-unstyled">
											<li><h4><?php  echo $row['uid']; ?></h4></li>
										</ul>
										<div class="" style="margin: 15px auto;">
											<a class="button button1" href="<?php echo $func; ?>logout.inc.php" role="button">تسجيل الخروج</a>
										</div>
									</div>
								
									<div class="col-xs-4"></div>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			
			<?php
			
		}else { 
			?>
					
			<aside class='side-box form-inline has-success'>
				<div class='profile-box text-left'>
					<form action='<?php echo $func; ?>login.inc.php' method='POST'>
						<legend style='font-size:24px; color: rgba(0, 0, 0, .5)'><span class='glyphicon glyphicon-log-in' style='top:4px; right:5px;'></span> تسجيل الدخول:</a></legend>
						<input class='form-control' style='margin-bottom: 10px;' type='text' name='uid' placeholder='البريد الإلكتروني'>
						<input type='password' class='form-control'style='margin-bottom: 10px' name='pwd' placeholder='كلمة المرور'><br>
						<button class='button button1' type='submit'>تسجيل دخول</button> <br>
						<a href='password.html'>هل نسيت كلمةالمرور؟</a>
						<a href='signup.php'>التسجيل</a>
					</form>
				</div>
			</aside>
			<?php
		}
?>
