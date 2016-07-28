<?php
$servername = "localhost";
$username = "leonmul";
$password = "";
$dbname = "leaderboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_REQUEST['name']=='' || $_REQUEST['score']=='')
{
Echo "Please return to the form and fill the empty field.";
}

else{
$sql="INSERT INTO endQuiz(name,score) VALUES('".$_REQUEST['name']."', '".$_REQUEST['score']."')";

	if (mysqli_query($conn, $sql)) {
    echo "Thank you for submitting your query, your details have been posted to our database and we shall be in contact shortly.";


	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>










