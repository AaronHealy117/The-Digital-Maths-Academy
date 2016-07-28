<?php
$servername = "localhost";
$username = "leonmul";
$password = "";
$dbname = "c9";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


else{
$sql="INSERT INTO users(name,email,school,postcode,password) VALUES('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['school']."','".$_REQUEST['postcode']."','".$_REQUEST['password']."')";

	if (mysqli_query($conn, $sql)) {
	    $last_id = mysqli_insert_id($conn);
	    echo "Thank you for registering! New record created successfully. Last inserted ID is: " . $last_id;
	} else {
 		echo "<script>alert('This email is already in use.'); location.href='registration.html';</script>";
	}
}

mysqli_close($conn);
?>

<DOCTYPE html>
<html>
	<head>
		<title>The Digital Maths Academy</title>
			<meta name="viewport" content="width=device-width, initial scale=1">
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="shortcut icon" href="images/icon1.ico"/>
	</head>
	
	<body class="">
		<div class=" container">
			<div class="row text-center">
			    <div class="col-md-3 text-center">
					 <h3>Please return to login page to sign in...</h3>
					<a href ="Index.php" button class="btn submitButton roundBtn greenHoverBtn" href="Index.html">Login Page</a>
                 </p>		
			</div>
		</div>
	</body>
</html>