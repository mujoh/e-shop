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
		  
		<!--  <div class="form-group row">
			<label for="itemcategory" class="col-sm-2 col-form-label">Item Category</label>
			<div class="col-sm-10">
				<select class="form-control" required>
					<option value="">Select Category</option>
					<option value="1">Smartphone</option>
					<option value="2">Personal Computer</option>
					<option value="3">Notebook</option>
					<option value="4">Printer</option>
					<option value="5">Equipment</option>
				  </select>
			</div>
		  </div>-->
		  
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
		
		<!-- List items start -->
		<div id="dva" style="display:none;">
			<hr style="border-color:#ddd;">
			<h2 style="font-weight:bold;margin-top:20px;">List All Items</h2>
			<hr style="border-color:#ddd;">

			<table id = "items-table" style="margin-top:50px;" align="center" width="1000" border="2">
				<tr bgcolor="#ffd400">
					<td colspan="7" align="center"><h2>ITEMS</h2></td>
				</tr>
				<tr align="center">
					<th style="text-align:center; padding:5px;">Item ID</th>
					<th style="text-align:center;">Item Name</th>
					<th style="text-align:center;">Item Brand</th>
					<th style="text-align:center">Item Quantity</th>
					<th style="text-align:center;">Item Price</th>
					<th style="text-align:center;">Delete Item</th>
					<th style="text-align:center;">Update Item</th>
				</tr>
				
				<tr align="center">
				<?php
					$queryFetchAll = "SELECT * FROM products";
					$result2 = mysqli_query($con, $queryFetchAll);
					while($row = mysqli_fetch_array($result2)){
					$id = $row['product_id'];
					$name = $row['product_name'];
					$brand = $row['product_brand'];
					$price = $row['product_price'];
					$quantity = $row['product_quantity'];
				?>
				<td style="padding:2px;" align="center"><?php echo $id;?></td>
				<td align="center"><?php echo $name;?></td>
				<td align="center"><?php echo $brand;?></td>
				<td align="center"><?php echo $quantity;?></td>
				<td align="center"><?php echo $price;?> KM</td>
				<td align="center" class="delete" id="del_<?php echo $id;?>">Delete</td>
				<td id="<?= $id;?>" class="update-admin" align="center">Update</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>  <!--List items end -->
		
		 <!--Update item start-->
		<div id="tri" style="display:none;">
			<hr style="border-color:#ddd;">
			<h2 style="font-weight:bold;margin-top:20px;">List All Orders</h2>
			<hr style="border-color:#ddd;">

			<table id = "items-table" style="margin-top:50px;" align="center" width="1000" border="2">
				<tr bgcolor="#ffd400">
					<td colspan="11" align="center"><h2>ORDERS</h2></td>
				</tr>
				<tr align="center">
					<th style="text-align:center; padding:5px;">Order ID</th>
					<th style="text-align:center;">User ID</th>
					<th style="text-align:center;">User Name</th>
					<th style="text-align:center">User Surname</th>
					<th style="text-align:center;">User Address</th>
					<th style="text-align:center;">User City</th>
					<th style="text-align:center;">User Country</th>
					<th style="text-align:center;">Item</th>
					<th style="text-align:center;">Quantity</th>
					<th style="text-align:center;">Date</th>
					<th style="text-align:center;">Total</th>
				</tr>
				
				<tr align="center">
				<?php
					$queryFetchOrders = "SELECT * FROM orders";
					$result3 = mysqli_query($con, $queryFetchOrders);
					while($row = mysqli_fetch_array($result3)){
					$order_id = $row['id'];
					$user_id = $row['user_id'];
					$user_name = $row['name'];
					$user_surname = $row['surname'];
					$user_address = $row['address'];
					$user_city = $row['city'];
					$user_country = $row['country'];
					$item = $row['item'];
					$quantity = $row['quantity'];
					$date = $row['date'];
					$total = $row['total'];
				?>
				<td style="padding:2px;" align="center"><?php echo $order_id;?></td>
				<td align="center"><?php echo $user_id;?></td>
				<td align="center"><?php echo $user_name;?></td>
				<td align="center"><?php echo $user_surname;?></td>
				<td align="center"><?php echo $user_address;?></td>
				<td align="center"><?php echo $user_city;?></td>
				<td align="center"><?php echo $user_country;?></td>
				<td align="center"><?php echo $item;?></td>
				<td align="center"><?php echo $quantity;?></td>
				<td align="center"><?php echo $date;?></td>
				<td align="center"><?php echo $total;?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div> <!--Update item end -->
	</div> <!-- col-sm-9 end -->
</div>
</div>
</div>
</body>
</html>
<?php
	}
	else{
		echo "cannot access page!";
	}
?>