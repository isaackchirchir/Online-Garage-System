<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wazito Garage System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
		
		   

	 ?>


<div class="container-fluid">
		<div class="header_top">
			<span style="font-size:50px;color:#2c2f84;font-weight:bolder;margin-left:15px;">Wazito Garahge</span>
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				
				
				<li><a href="addDoctor2.php">Add Mechanic</a></li>
				<li><a href="viewDoctor.php">View Mechanic</a></li>
				<li><a href="viewCustomer.php">View Clients</a></li>
				<li><a href="viewAppoinment.php">View Requests</a></li>
				<li><a href="viewFeedback.php">View Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	
