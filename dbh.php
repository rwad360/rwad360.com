<?php

$conn = mysqli_connect("localhost", "root", "", "madrstna_main");

if(!$conn){
	die("connection failed: ".mysqli_connect_error());
}else{
    $conn->query("SET NAMES 'utf8'");
    $conn->query("SET CHARACTER SET utf8");

}

