<?php  session_start();

?>

<?php
//Session start is used to register the session when the user has entered the correct credentials


//These are the details used in order to access the database
$host="localhost"; // Host name 
$username="leonmul"; // Mysql username 
$password=""; // Mysql password 
$db_name="c9"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form - Places into php variables and then traversed
$myemail=$_POST['email']; 
$mypassword=$_POST['password'];



// To protect MySQL injection 
$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysql_real_escape_string($myemail);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myemail, $mypassword and redirect to file "home.php"
$_SESSION['myemail']= "email"; 
$_SESSION['mypassword']= "password"; 
header("location:home.php");
}

else {
//header("Refresh:0; url=Index.php");
 echo "<script>alert('Please enter a valid email and password.'); location.href='Index.php';</script>";
}

//The email used to login is stored as a session variable in php to post a welcome message to the user which includes their email/username used to login
$_SESSION['$myemail'] = $myemail=$_POST['email']; 
$_SESSION['$mypassword'] = $mypassword=$_POST['password']; 



/*
Resource - Whilst creating the Login and registration page, multiple resources were used, there were many errors in the tutorials as they recommended using sql, yet I realised that sql was fased out and sqli was what I was to be using with cloud 9 

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
