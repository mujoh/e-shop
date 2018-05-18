<?php
	session_start();

	session_destroy();   // function that Destroys Session 
	header( "refresh:3;url=../index.php" ); 
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body id="msg-body">
	<div id="logout-msg">
		<h4>You have been logged out successfully!</h4>
	</div>
</body>
</html>