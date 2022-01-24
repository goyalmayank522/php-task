<?php
	define("hostname", "localhost");
	define("username", "root");
	define("password", "");
	define("dbname", "contact_us_db");
	$conn = mysqli_connect(hostname, username, password, dbname) or die(mysqli_error());
	if ( isset($_POST['submit']) ) {
		$name = mysqli_real_escape_string( $conn, $_POST['name'] );
		$email = mysqli_real_escape_string( $conn, $_POST['email'] );
		$phone = mysqli_real_escape_string( $conn, $_POST['contact'] );
		$comment = mysqli_real_escape_string( $conn, $_POST['text'] );
		$insert_query = "INSERT INTO contactus (name, email, contact, comments) VALUES ('$name', '$email', '$phone', '$comment')";
		if ( mysqli_query($conn, $insert_query) ) {
			echo "Thank you for your comments!";
		} else {
			die('Some Error occured: '.mysqli_error($conn));
		}
	}
	mysqli_close($conn);

?>
