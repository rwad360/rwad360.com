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

?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
			<?php
				include $tmpl.'login.php';

			?>
			</div>
			<div class="col-xs-4"></div>
		</div>
	</div>
<?php include $tmpl.'footer.php';?>