<?php

	session_start();

	if(!isset($_SESSION['username'])){

		header("location:login.php");
	}/*admin home will not open directly by url ,if try it will sent to login page for username and password*/


	elseif($_SESSION['usertype']=='student'){

		header("location:login.php");
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
		<h1>Admin Dashboard</h1>
		
	</div>

</body>
</html>