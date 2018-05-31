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

	else if($action=="update")
	{
		$idUpdate = $_POST['id'];
		$nameUpdate = $_POST['name'];
		$priceUpdate = $_POST['price'];
		$quantityUpdate = $_POST['quantity'];
		$detailsUpdate = $_POST['comment'];
		
		$queryUpdate = "UPDATE products SET product_name='$nameUpdate', product_price='$priceUpdate', product_quantity='$quantityUpdate', product_comment='$detailsUpdate' WHERE product_id=".$idUpdate;
		mysqli_query($con, $queryUpdate);
	}

	else if($action == "delete")
	{
		$id = $_POST['id'];
		
		$queryDelete = "DELETE FROM products WHERE product_id=".$id;
		mysqli_query($con, $queryDelete);
	}

	else if($action=="placeorder")
	{
		$total = $_POST['total'];
		$name = $_POST['name'];
		$uid = $_POST['uid'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$quantity = $_POST['quantity'];
		
		echo $name;
		
		$date = date("Y-m-d");
		$queryPlace = "INSERT INTO orders(user_id, name, surname, address, city, country, item, quantity, date, total) VALUES('$uid', '$firstname', '$lastname', '$street', '$city', '$country', '$name', '$quantity', '$date', '$total')";
		mysqli_query($con, $queryPlace);
	}
?>