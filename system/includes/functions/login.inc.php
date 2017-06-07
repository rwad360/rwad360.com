<?php
session_start();
include '../../../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM users WHERE uid='$uid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if ($hash == 0) {
	header("Location: ../../../login.php?error=wrong");
	exit();
	
}else{

	$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		echo "<div class='alert alert-danger' role='alert'>
				<button style='float:left;' type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>
				<p><span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span> <strong> ????... </strong>?????? ??????????/ ???? ?????? ??? ???????? ???? ??? ????!!!</p>
				</div>";
	}else{
		$_SESSION['id'] = $row['id'];
	}

	header("Location: ../../../index.php");

}