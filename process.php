<?php
	include 'controller/connect.php';
	
	$action = $_POST['action'];
	
	if($action=="add")
	{
		$name = $_POST['name'];
		$brand = $_POST['brand'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$img = $_POST['img'];
		$comment = $_POST['comment'];
		$capacity = $_POST['capacity'];
		$color = $_POST['color'];
		
		$queryAdd = ("INSERT INTO products (product_name, product_brand, product_quantity, product_price, product_capacity, product_color, product_image, product_comment) VALUES ('$name', '$brand', '$quantity', '$price', '$capacity', '$color', '$img', '$comment')");
		$result = mysqli_query($con, $queryAdd);
	}
?>