<?php

	ob_start();
	session_start();
	
	include 'dbh.php'; 							// This is database handler for the website						
	//I added database handler here because I need it to show the wesite's statistics and some other functionalities.
	include 'admin/init.php';					// initializing sources for most directories as refernce for the future changes
	include $tmpl.'head.php';					// Header contaisn all needed heading such as bootstreap, style.css, and other intitilization needed for the website
	include $tmpl.'navbar_top.php';				//the navbar at the top of every page.
	include $func.'functions.php';				//back-end functions that would be needed to perform some devoloping tasks.
	include $tmpl.'banner.php';					//it contains the main logo for the website and newsbar. it is used in the main page only. 
	include $func.'scroll-to-top.php';			// it contains scroll to the top button.

	$do = isset($_GET['do']) ? $_GET['do'] : 'Hosting';
	
	if ($do == 'Hosting') { ?>
		<div class="hosting-index">
			<div class="containter">
				<div class="row">
					<div class="col-xs-12">
						<div class="text-center">
							<h1>خدمات استضافة المواقع</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<?php
	}elseif ($do == 'Web') { ?>
		<div class="containter">
			<div class="row">
				<div class="col-xs-12">
					<div class="text-center">
						<h1>خدمات تصميم المواقع</h1>
					</div>
				</div>
			</div>
		</div>
		<section id="sales" class="sales">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>عروض المنتجات الخاصة</h2>
						<h4> يمكنك التعرف على العروض الخاصة المقدمة من موقع <?php echo $webName; ?>.</h4>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							<h4>تصميم موقع شخصي</h4>
							<ul class="list-group"> 
								<li class="list-group-item list-group-item-info">صفحة شخصية </li>
								<li class="list-group-item">تصميم شعار خاص بالموقع</li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							<h4>تصميم موقع العائلة</h4>
							<ul class="list-group"> 
								<li class="list-group-item list-group-item-info">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							<h4>تصميم متجر إلكتروني</h4>
							<ul class="list-group"> 
								<li class="list-group-item list-group-item-info">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
								<li class="list-group-item">صفحة شخصية </li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="products">
							
							<div class="panel panel-primary"> 
								<div class="panel-heading panel-primary"><h4>تصميم موقع شركة</h4></div>
								<div class="panel-body"></div>
								<div class="panel-footer panel-primary">الصفحة الرئيسية</div>
								<div class="panel-footer panel-primary">تصميم الصفحة الرئيسية</div>
								<div class="panel-footer panel-primary">تصميم شعار خاص</div>
								<div class="panel-footer panel-primary">لوحة تحكم عربية</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php
	}elseif ($do == 'App') { ?>
	<div class="containter">
		<div class="row">
			<div class="col-xs-12">
				<div class="text-center">
					<h1>خدمات تصميم التطبيقات</h1>
				</div>
			</div>
		</div>
	</div>
	
<?php	
	}else { ?>
		
		
	<?php
	}
	
	include $tmpl.'footer.php';

?>

