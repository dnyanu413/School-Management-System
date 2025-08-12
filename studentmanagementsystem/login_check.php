<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="dnyanu123";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
	die("connection error");
}


	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['username'];
		$pass= $_POST['password'];

		$sql="select * from user where username='".$name."' AND password='".$pass."'  ";
		/* this "user" is actually tablename which we create in phpmyadmin */


		$result=mysqli_query($data,$sql);

		$row=mysqli_fetch_array($result);



		if($row["usertype"]=="student")
		{
			$_SESSION['username']=$name; /*student home will not open directly by url ,if try it will sent to login page for username and password*/

			$_SESSION['usertype']="student"; 


			header("location:studenthome.php");
		}

		elseif($row["usertype"]=="admin")
		{
			$_SESSION['username']=$name; /*admin home will not open directly by url ,if try it will sent to login page for username and password*/

			$_SESSION['usertype']="admin";


			header("location:adminhome.php");
		}
		else{


			$message="username or password do not match";

			$_SESSION['loginMessage']=$message;
			header("location:login.php");
		}

	}

?>