<?php

session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
//header("Location: Quiz.html");
//use for the redirection to some page  
echo "<script>alert('Your name and score have been saved'); location.href='Quiz.html';</script>";
?> 