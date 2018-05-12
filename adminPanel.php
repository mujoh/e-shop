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
                    <h1 style="text-align:center; color:white; margin-top:30px;">Welcome, Admin <span style="color:#ffd400;"><?= $_SESSION['username'];?></span></h1>
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

	<!--ADD ITEM -->
	<div class="col-sm-9">
		<div id="jedan" style="display:none;">
			<hr style="border-color:#ddd;">
			<h2 style="font-weight:bold;margin-top:20px;">Add Items</h2>
			<hr style="border-color:#ddd;">
		<div class="well" style="margin-right:100px;">
		<h3>Adding Item</h3>
		<hr>
		<form id="formAdd" method="POST">
		
		  <div class="form-group row">
			<label for="itemname" class="col-sm-2 col-form-label">Item Name</label>
			<div class="col-sm-10">
			  <input type="text" name ="name" class="form-control" id="name" placeholder="Item Name" required>
			</div>
		  </div>
		  
		  <div class="form-group row">
			<label for="itemcategory" class="col-sm-2 col-form-label">Item Brand</label>
			<div class="col-sm-10">
				<select class="form-control" name = "brand" id="brand" required>
					<option value="">Select Brand</option>
					<option value="1">Samsung</option>
					<option value="2">Apple</option>
					<option value="3">Nokia</option>
					<option value="4">Sony</option>
					<option value="5">LG</option>
					<option value="6">HP</option>
					<option value="7">IBM</option>
					<option value="8">Lenovo</option>
					<option value="9">Microsoft</option>
					<option value="10">Unknown</option>
				  </select>
			</div>
		  </div>
		  
		  <div class="form-group row">
			<label for="itemprice" class="col-sm-2 col-form-label">Item Price</label>
			<div class="col-sm-10">
			  <input type="number" name ="price" class="form-control" id="price" placeholder="Item Price" required>
			</div>
		  </div>
		  
		  <div class="form-group row">
			<label for="quantity" class="col-sm-2 col-form-label">Item Quantity</label>
			<div class="col-sm-10">
				<input type="number" name="quantity" id="quantity" class="form-control" placeholder="Item Quantity" required>
			</div>
		  </div>
		  
		  <div class="form-group row">
			<label for="capacity" class="col-sm-2 col-form-label">Item Capacity</label>
			<div class="col-sm-10">
				<input type="number" name="capacity" id="capacity" class="form-control" placeholder="Item Capacity" required>
			</div>
		  </div>

		  <div class="form-group row">
			<label for="color" class="col-sm-2 col-form-label">Item Color</label>
			<div class="col-sm-10">
				<input type="text" name="color" id="color" class="form-control" placeholder="Item Color" required>
			</div>
		  </div>		  
		  
		  <div class="form-group row">
			<label for="itempicture" class="col-sm-2 col-form-label">Item Picture</label>
			<div class="col-sm-10">
			    <input id="img" name="img" type="file" class="file" required>
			</div>
		  </div>
		  
		  <div class="form-group row">
			<label for="comment" class="col-sm-2 col-form-label">Details About Item</label>
			<div class="col-sm-10">
				<textarea rows="5" id="comment" placeholder="separate each line with enter" class="form-control input rounded input-xlarge"></textarea>
			</div>
		  </div>
		  
			<button type="submit"class="btn btn-primary" id="add" style="margin-top:20px;">Add Item ! </button>
		</form>
		
		</div> <!--close well-->
		</div> <!--Add item end -->
</body>
	