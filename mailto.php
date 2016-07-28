<?php
if($_POST["message"]) {
    mail("$email", "Form to email message", $_POST["message"], "From: 464healy@gmail.com");
}
?>