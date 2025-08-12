<?php

	session_start();

	if(!isset($_SESSION['username'])){   

		header("location:login.php");
	}/*student home will not open directly by url ,if try it will sent to login page for username and password*/

	elseif($_SESSION['usertype']=='student'){

		header("location:login.php");
	}


	$host="localhost";
	$user="root";
	$password="dnyanu123";
	$db="schoolproject";

	$data=mysqli_connect($host,$user,$password,$db);

	$id=$_GET['student_id'];

	$sql="SELECT * FROM user WHERE id='$id'  ";
	$result=mysqli_query($data,$sql);
	$info=$result->fetch_assoc();


	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];

		$query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id' ";

		$result2=mysqli_query($data,$query);

		if($result2){
			header("location:view_student.php");
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="adminn.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
	<style type="text/css">
		label{

			display: inline-block;
			width: 100px;
			text-align: right;
			padding-top: 10px;
			padding-bottom: 10px;

		}
		.div_design{

		}

	</style>



</head>
<body>

<header class="header">
	<a href="">Admin Dashboard</a>

	<div class="logout">
		<a href="" class="btn btn-primary">Logout</a>
	</div>

</header>

	<aside>
	
		<ul>
			
			<li>
				<a href="admission.php">Admission</a>
			</li>
			<li>
				<a href="add_student.php">Add Student</a>
			</li>
			<li>
				<a href="view_student.php">View Student</a>
			</li>
			<li>
				<a href=" ">Add Teacher</a>
			</li>
			<li>
				<a href=" ">View Teacher</a>
			</li>
			<li>
				<a href=" ">Add Course</a>
			</li>
			<li>
				<a href=" ">View Course</a>
			</li>

		</ul>

	</aside>

<center>
	<div class="content">
		<h1>Update Student</h1>
			<div class="div_design">
		
		<form action="#" method="POST">
			
			<div>
				<label>Username</label>
				<input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
			</div>
			<div>
				<label>Phone</label>
				<input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
			</div>
			<div>
				<label>Password</label>
				<input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
			</div>
			<div>
				<input class="btn btn-success" type="submit" name="update" value="update">
			</div>
		</form>

	</div>

	</div>
</center>
</body>
</html>