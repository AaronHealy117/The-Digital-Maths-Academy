<?php

session_start();//start session - in order to save variables and information associated with the current session.  
session_destroy();  
//header("Location: Index.php");//use for the redirection to some page  

//Echo a JS alert to confim the logout 
 echo "<script>alert('Thanks for dropping by, we hope to see you soon!'); location.href='Index.php';</script>";
?> 