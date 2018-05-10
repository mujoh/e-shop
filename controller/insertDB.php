<?php
	
	include 'connect.php';

	//mysql_set_charset("utf8", $con);
	
	$title = $_POST["title"];
    $name = $_POST["fName"];
    $surname = $_POST["lName"];
    $gender = $_POST["gender"];
	$birthday = $_POST["dateOfBirth"];
	$username = $_POST["uName"];
	$pass = $_POST["pw"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$email = $_POST["email"];
	$postcode = $_POST["postcode"];
	$country = $_POST["country"];

	
	$query = "INSERT INTO userinfo (title, firstname, lastname, gender, dateofbirth, username, password, street, city, email, postcode, country)
	VALUES ('$title', '$name', '$surname', '$gender', '$birthday', '$username', '$pass', '$street', '$city', '$email', '$postcode', '$country')";
	$result = mysqli_query($con, $query);
	
	if(!$result)
	{
		echo "Not inserted";
	}

	if(count($_POST) > 0) {
		
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: Moby Electronic d.o.o. <m.hadzimehanovic@gmail.com>";
		
		$body = 
		@"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:i",time())."<br />
		<hr />
		Thank you for your registration, you can see your registration info below. <br />
		Title: $title <br />
		Name: $name <br />
		Surname: $surname <br />
		Gender: $gender <br />
		Birthday: $birthday <br />
		Username: $username <br />
		Street: $street <br />
		City: $city <br />
		Email: $email <br />
		Postcode: $postcode <br />
		Country: $country <br />
		<hr />
		Email end";
		
		if(mail($email, 'Registration Completed', $body, $header)) {
			die("true");	
		} else {
			die("There was an error sending the email.");	
		}

	} else {
		echo "0 results";
	}
?>