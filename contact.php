<?php
//Ensure connection is established by entering the database credentials
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

if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['comment']=='')
{
Echo "Please return to the form and fill the empty field.";
}

else{
$sql="INSERT INTO queries(name,email,comment) VALUES('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['comment']."')";

//Let the user know that they have submitted their query 
	if (mysqli_query($conn, $sql)) {
 echo "<script>alert('Thank you for submitting your query, your details have been posted to our database and we shall be in contact shortly.'); location.href='contact.html';</script>";


	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);

/* This page uses the same code used to register, although it was altered to enable information to be posted to the queries table

Resources:
http://mrbool.com/how-to-create-a-sign-up-form-registration-with-php-and-mysql/28675
http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
http://www.html-form-guide.com/php-form/php-registration-form.html
http://codingcyber.com/simple-user-registration-script-in-php-and-mysql-84/
http://www.sourcecodester.com/tutorials/php/4340/how-create-registration-page-phpmysql.html
https://www.youtube.com/watch?v=yp_gH3zPfbo
?>

