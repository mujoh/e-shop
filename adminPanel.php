<?php
	session_start();
	include 'controller/connect.php';
	if(isset($_SESSION["admin"])){
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Moby Electronic d.o.o.</title>

	<!-- Latest compiled and minified CSS -->

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	  <script type="text/javascript" src="js/adminScript.js"></script>
	  
	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">
	
</head>
<body>

    <div class="top-bar">
        <div class="container">

        </div>
    </div>



<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logic.png" alt="Moby Electronic">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-5">
                    <h1 style="text-align:center; color:white; margin-top:30px;">Welcome, Admin <span style="color:#ffd400;"></span></h1>
                </div>
            </div>
        </div>
</div>
    
<div id="mainBody">
	<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Admin Panel</h4>
      <ul class="nav nav-pills nav-stacked">
        <li id="home"><a href="#section1">Add Items</a></li>
        <li id="additem"><a href="#section2">List All Items</a></li>
		<li id="trece"><a href="#section3">List Orders</a></li>
        <li id="logout"><a href="controller/logout.php">Log Out</a></li>
      </ul><br>
    </div>
	