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
  	  <script type="text/javascript" src="js/javascript.js"></script>
  	  <script src="js/mojaSkripta.js"></script> 

	<!-- Google Font -->

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,300,500,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css">

    <!-- Theme Stylesheet -->

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<form action="controller/processlogin.php" method="POST">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			  <h1 class="text-center">Please, Log in</h1>
			</div>
			 <div class="modal-body">
				 <div class="form-group">
					 <input type="text" class="form-control input-lg" placeholder="Username" name="username"/>
				 </div>

				 <div class="form-group">
					 <input type="password" class="form-control input-lg" placeholder="Password" name="password"/>
				 </div>

				 <div class="form-group">
					 <input type="submit" name="login" class="btn-login" value="Login"/>
					 
				 </div>
				<a href="index.php" style="color:white; float:left;">Home</a>
				<a href="registrationForm.html" style="color:white; float:right">Register</a>
			 </div>
		</div>
	 </div>
</form>

</body>
</html>