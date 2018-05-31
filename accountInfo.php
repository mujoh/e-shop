<?php 
	session_start();
	include 'controller/connect.php';
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
  	  <script src="js/skriptaIndex.js"></script> 

	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">

</head>
<body action="connection.php">
	
	<?php
		include_once('view/topbar.html');
		include_once('view/header.html');
	?>
    
<div id="mainBody">
	<div class="container">
		<div class="row">
		
		<?php
			include_once('view/sidebar.html');
			
			$id = $_SESSION['id'];
			
			$query = "SELECT * FROM userinfo WHERE userid=$id";
			$result = mysqli_query($con, $query);
			while($row = mysqli_fetch_array($result)){
				
				$title = $row["title"];
				$name = $row["firstname"];
				$surname = $row["lastname"];
				$gender = $row["gender"];
				$birthday = $row["dateofbirth"];
				$username = $row["username"];
				$street = $row["street"];
				$city = $row["city"];
				$email = $row["email"];
				$postcode = $row["postcode"];
				$country = $row["country"];
		
			include_once('view/personalinfo.html');
			
			}
		?>
		</div>
	</div>
</div>

<div class="footer">
	<?php
		include_once('view/footer.html');
	?>
</div>
		 
</body>
</html>