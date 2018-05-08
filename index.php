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
  	  <script type="text/javascript" src="js/skriptaIndex.js"></script>

	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link type="text/css" rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
	<style>
		
		.pagination a{
			color:black;
			padding:8px 16px;
			text-decoration:none;
			transition:background-color .3s;
			float:left;
		}
		.pagination a.active{
			background-color:#ffd400;
		}
		.pagination a:hover:not(.active){
			background-color:#ddd;
		}
	</style>
	
	<?php
		include_once('view/topbar.html');

		include_once('view/header.html');

		include_once('view/carousel.html');
	?>

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<?php
					include_once('view/sidebar.html');
					include_once('view/items.html');
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