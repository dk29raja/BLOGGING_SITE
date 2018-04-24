<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head><?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="blog";

	$conn = new mysqli($servername, $username, $password);
	mysqli_select_db($dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
?>
<body>
</body>
</html>