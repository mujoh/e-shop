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
                    <h1 style="text-align:center; color:white; margin-top:30px;">Welcome, Admin</h1>
                </div>
            </div>
        </div>
</div>
    
<div id="mainBody">
	<h1 style="text-align:center;">Update Form</h1>
	
	<?php
		include 'controller/connect.php';
		
		$id = $_GET['id'];
		$query = "SELECT * FROM products WHERE product_id=$id";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result)){
			
			$name = $row['product_name'];
			$price = $row['product_price'];
			$quantity = $row['product_quantity'];
			$comment = $row['product_comment'];
	?>
		<form id="formUpdate" method="POST">
			  <div class="form-group row">
				<label for="itemid" class="col-sm-2 col-form-label">Item ID</label>
				<div class="col-sm-10">
				  <input type="number" name ="id-update" value="<?= $id;?>" class="form-control" id="id-update" required>
				</div>
			  </div>
			  
				
			  <div class="form-group row">
				<label for="itemname" class="col-sm-2 col-form-label">Item Name</label>
				<div class="col-sm-10">
				  <input type="text" name ="name-update" value="<?= $name;?>" class="form-control" id="name-update" required>
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="itemprice" class="col-sm-2 col-form-label">Item Price</label>
				<div class="col-sm-10">
				  <input type="number" name ="price-update" value="<?= $price;?>" class="form-control" id="price-update" required>
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="quantity" class="col-sm-2 col-form-label">Item Quantity</label>
				<div class="col-sm-10">
					<input type="number" name="quantity-update" value="<?= $quantity;?>" id="quantity-update" class="form-control" required>
				</div>
			  </div>
			  
			  <div class="form-group row">
				<label for="comment" class="col-sm-2 col-form-label">Details About Item</label>
				<div class="col-sm-10">
					<textarea rows="5" id="comment-update" class="form-control input rounded input-xlarge"><?= $comment;?></textarea>
				</div>
			  </div>
	<?php
		}
	?>
				<button type="submit" class="btn btn-primary" id="update" style="margin-top:20px;">Update Item ! </button>
		</form>
</div>
</body>
</html>