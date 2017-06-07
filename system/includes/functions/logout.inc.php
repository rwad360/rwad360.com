<?php
	session_start();
	session_destroy();
	unset($_session['uid']);
	$_SESSION['message'] = "you are now looged out";
	header("location: ../../../index.php");
	?>