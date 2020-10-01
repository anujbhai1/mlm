<?php

$sponcerid = $_POST['sponcerid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

//Database connection
$conn= new mysqli('localhost','root','','your');
if($conn->connect_error)
{
	die('connection failed ....'.$connect_error);
	
}
else
{
	$stmt = $conn->prepare("insert into register(sponcerid,name,email,phone,password,userid)values(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$sponcerid,$name,$email,$phone,$password,$userid);
	$lastid=mt_rand(10000,99999);
	$userid="ATM".$lastid;
	$stmt->execute();
	echo ("successfully done.........");
	$stmt->close();
	$conn->close();
}




?>