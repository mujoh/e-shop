<?php
	$con = mysqli_connect("ec2-50-19-224-165.compute-1.amazonaws.com", "bwidfpfxvlhbas", "76ba1acdae7e3fc2df26d53a8ea60c06c21608b4c86e5228c0cb6a69bf535257", "d8v8fbc08u0sd3");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
