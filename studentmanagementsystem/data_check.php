<?php

session_start();

$host="localhost";
$user="root";
$password="dnyanu123";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false){
	die("connection Error");
}

if(isset($_POST['apply']))
{
	$data_name=$_POST['name'];
	$data_email=$_POST['email'];
	$data_phone=$_POST['phone'];
	$data_message=$_POST['message'];


	$sql="INSERT INTO admission(name,email,phone,message) VALUES('$data_name','$data_email','$data_phone','$data_message')";


	$result=mysqli_query($data,$sql);

	if($result)
	{
		$_SESSION['message']="Apply successfully";
		header("location:index.php");
	}
	else{
	     
		$_SESSION['message']="Apply Fail";
		header("location:index.php");
	}
}

?>