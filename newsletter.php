<?php
//Listing of the server, user credentials etc
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

//This is our PHP form validation, we have also included form validation within the html page by using the 'REQUIRED' parameter from bootstrap 
if($_REQUEST['name']=='' || $_REQUEST['email']=='')
{
Echo "Please return to the form and fill the empty field.";
}

//If the form is not blank, the user name and email are grabbed and posted to the database table called 'newsletter'
else{
$sql="INSERT INTO newsletter(name,email) VALUES('".$_REQUEST['name']."', '".$_REQUEST['email']."')";

//The user will then be posted with a confirmation alert, this is to provide confirmation of the post and also increase usability for our user base
	if (mysqli_query($conn, $sql)) {
 		echo "<script>alert('Thank you for signing up to our newsletter, your details have been posted to our database and you shall recieve emails in the coming weeks'); location.href='home.php';</script>";

	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
//Close connection with database
mysqli_close($conn);

/*
Resource - I used multiple sources in order to enable the user to sign up to the website, basically the same code from the same sources was altered to post to a different database and grab different variables

http://codular.com/php-mysqli - Description of Sqli (SQL Improved) -

https://c9.io/blog/phpmyadmin/ - Setting up PHP my admin on cloud 9 

http://mrbool.com/how-to-create-a-sign-up-form-registration-with-php-and-mysql/28675
http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
http://www.html-form-guide.com/php-form/php-registration-form.html
http://codingcyber.com/simple-user-registration-script-in-php-and-mysql-84/
http://www.sourcecodester.com/tutorials/php/4340/how-create-registration-page-phpmysql.html
https://www.youtube.com/watch?v=yp_gH3zPfbo

*/
?>

