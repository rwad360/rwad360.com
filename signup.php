<?php
	// this page needs Arabic dynamic data validation
	ob_start();
	session_start();
	
	if(isset($_SESSION['id'])) {
		header('Location: index.php'); 
	}else{
	
		include 'dbh.php';
		include 'admin/init.php';
		include $tmpl.'head.php';
		include $tmpl.'navbar_top.php';
		include $tmpl.'banner.php';
		include $func.'functions.php';
	
	
		$do = isset($_GET['do']) ? $_GET['do'] : 'add';
		// To add new membership
		if($do == 'add') { 
			
			// To check conditions agreement
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				$agree; $captcha;
				if(isset($_POST['agree'])){
				  $agree=$_POST['agree'];
				}if(isset($_POST['g-recaptcha-response'])){
				  $captcha=$_POST['g-recaptcha-response'];
				}
				if($captcha){
					$secretKey = "6Le-UCQUAAAAAKIfeYmc5G25oFm-WlmJe2Nv-UGi";
					$ip = $_SERVER['REMOTE_ADDR'];
					$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
					$responseKeys = json_decode($response,true);
					if(intval($responseKeys["success"]) !== 1) {
					  echo '
						<div class="container">
							<div class="alert alert-danger alert-dismissable">
								<a href="#" class="close" data-dismiss="alert" area-label="">&times</a>
								<h3><strong>تحذير! </strong>أنت تحاول الدخول بطريقة غير شرعية</h4>
							</div>
						</div>';
					} else {
						?>
						<section class="index-signup">
							<div class="container">
								<div class="row">
								<div class="col-xs-3"></div>
									<div class="col-xs-6 text-center">
										<div class="signup-section">
											<section class='signup form-inline has-success'>
												<div class='data'>
													<h2>تسجيل مشترك جديد:</h2>
													<article>
														<form class="form-horizontal" action='signup.php?do=insert' method='POST'>								
															
																	
															<input class='form-control' type='text' name='uid' placeholder='اسم المستخدم' required>
															<br>
															<input class='form-control' type='email' name='email' placeholder='البريد الإلكروني' required>
															<br>
															<input class='form-control' type='password' name='pwd' placeholder='كلمة المرور' required>
															<br>
															<input class='form-control' type='password' name='pwd2' placeholder='تأكيد كلمة المرور'required>
															<br>
															<button class='button button1' type='submit'>تسجيل عضوية</button>
														</form>
													</article>
												</div>
											</section>
										</div>
									</div>
									<div class="col-xs-3"></div>
								</div>
							</div>
						</section>
					<?php
					include $tmpl.'footer.php';
					exit;
					}
				}
			}
			
			
		?>
		
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div class="conditions">
							<form class="data form-horizontal" action='signup.php?do=add' method='POST'>
								<div class="conditions-list">
									<legend><h2 class="text-center">الشروط والأحكام</h2></legend>
									
								</div>
								
								<div class="box-recaptcha">
									<input type="checkbox" name="agree" value="agree"style="margin-bottom: 20px;" required> أقبل جميع الشروط والأحكام المذكورة أعلاه<br>
									<?php
										if($_SERVER['REQUEST_METHOD'] == 'POST') {
											if(!$captcha){
												echo '<h4>عليك اجتياز الإختبار التالي:</h4>';
											}
										}
									?>
									<div id="recaptcha" class="g-recaptcha" data-sitekey="6Le-UCQUAAAAAGXsqseFSsKXtd6_MOuCfEmemL9D"></div>
								</div>
								
								<button class='btn btn-warning' type='submit'>تسجيل</button>
							</form>
						</div>
					</div>
					<div class="col-xs-4">
						اعلانات + تسجيل دخول + مجلد صور
					</div>
				</div>
			</div>
		<?php
		}elseif($do == 'insert') {
			
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$uid			= $_POST['uid'];
				$email			= $_POST['email'];
				$pwd			= $_POST['pwd'];
				$pwd2			= $_POST['pwd2'];				

				if ($pwd !== $pwd2) {
					header("Location: signup.php?do=step-one?error=match");
					exit();
				}
				if (empty($uid)){
					header("Location: signup.php?error=uid");
					exit();
				}
				if (empty($email)){
					header("Location: signup.php?error=email");
					exit();
				}
				if (empty($pwd)){
					header("Location: signup.php?error=pwd");
					exit();
				}else{
					$sql = "SELECT uid FROM users WHERE uid= '$uid'";
					$result = mysqli_query($conn,$sql);
					$uidcheck = mysqli_num_rows($result);
					if($uidcheck != 0) {
						header("Location: signup.php?error=username");
						exit();
					}else {
						$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO users (uid, email, pwd, reg_date) 
								VALUES ('$uid', '$email', '$encrypted_password', now())";
						$result = mysqli_query($conn,$sql);
						
						//start retriving entered session 
						$sql = "SELECT * FROM users WHERE uid='$uid'";
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_assoc($result);
						$_SESSION['id'] = $row['id'];
						
						
						header("Location: index.php");
						exit();
					}
				}
						
			}else{
			header("Location: signup.php?do=conditions");
			exit();
			}
			
			?>
			<?php	
		}elseif($do == 'index-inc') {
			?>	
		
			<a class="btn btn-primary"href="test-signup.php?do=step-four">step four</a>
			
			<?php
		}elseif($do == 'step-four') {
			?>
		
			<a class="btn btn-primary"href="test-signup.php?do=conditions">conditions</a>
			
			<?php
		}else{
			echo "not authorized";
		}
	}
	
	include $tmpl.'footer.php';
?>