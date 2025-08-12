<?php

	session_start();

	if(!isset($_SESSION['username'])){

		header("location:login.php");
	}/*admin home will not open directly by url ,if try it will sent to login page for username and password*/


	elseif($_SESSION['usertype']=='student'){

		header("location:login.php");
	}

	$host="localhost";
	$user="root";
	$password="dnyanu123";
	$db="schoolproject";

	$data=mysqli_connect($host,$user,$password,$db);
	if (isset($_POST['add_student'])){

		
		$username = $_POST['name'];
        $user_email = $_POST['email'];
    	$user_phone = $_POST['phone'];
		$user_password = $_POST['password'];
		$usertype="student";

		$check="SELECT * FROM user WHERE username='$username'  ";

		$check_user=mysqli_query($data,$check);

		$row_count=mysqli_num_rows($check_user);

		if($row_count==1){
			echo "<script type='text/javascript'>

			alert('username already exists, try another ')

			</script";

		}
		else{

	


		$sql="INSERT INTO user(username,email,phone,usertype,password) VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

		$result=mysqli_query($data,$sql);

		if($result)
		{
			echo "<script type='text/javascript'>

			alert('Data upload Successfully')

			</script";

		}

		else{
			echo "upload fail";
		}
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


</head>
<body>

<header class="header">
	<a href="">Admin Dashboard</a>

	<style  type="text/css">
		
		label{
			display:inline-block;
			text-align: right;
			width: 100px;
			padding-top: 10px;
			padding-bottom: 10px;

		}
	</style>

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

	<div class="content">
		<center>
		<h1>Add Student</h1>
		
		<div>
			<form action="#" method="POST">
				
				<div>
					<label>Username</label>
					<input type="text" name="name">
				</div>

				<div>
					<label>Email</label>
					<input type="email" name="email">
				</div>

					<div>
					<label>Phone</label>
					<input type="number" name="phone">
				</div>

				<div>
					<label>Password</label>
					<input type="text" name="password">
				</div>

				<div>
					
				 <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">

				</div>


			</form>
		</div>

</center>
	</div>

</body>
</html>