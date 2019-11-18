?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "innoview_db";

	$conn = mysqli_connect("localhost", "root", "","innoview_db");
	if ($conn->connect_error){
		die("connection Fail". $conn->connect_error);
	}

?>