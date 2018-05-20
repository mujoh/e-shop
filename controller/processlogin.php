<?php
	include 'connect.php';
	
	session_start();
	
	$un = $_POST['username'];
	$pw = $_POST['password'];
	
	//prevent mysql injection
	$un = stripcslashes($un);
	$pw = stripcslashes($pw);
	$un = mysqli_real_escape_string($con, $un);
	$pw = mysqli_real_escape_string($con, $pw);

	
	$query = "SELECT * FROM userinfo where username = '$un' AND password = '$pw'";
	$result = mysqli_query($con, $query, MYSQLI_STORE_RESULT);
	
	$row = mysqli_fetch_array($result);
	if($row['username'] == $un && $row['password'] == $pw)
	{
		$_SESSION['username'] = $row['username'];
		$_SESSION['id'] = $row['userid'];
		if($row['type'] == 1){
			$_SESSION['admin'] = $row['username'];
			echo '<script type="text/javascript"> window.open("../adminPanel.php","_self");</script>'; 
		}
		echo '<script type="text/javascript"> window.open("../index.php","_self");</script>'; 
	}
	else
	{
		header( "refresh:2;url=../index.php" ); 
		echo "Login Failed";
	}
?>