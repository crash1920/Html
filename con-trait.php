<?php
require_once("cnx.php") ;
$name = $_POST["name"];
$sub=$_POST["subject"];
$email=$_POST["email"];
$mess=$_POST["message"];
$date=date("Y/m/d") ; 
$sql = "INSERT INTO contact (name,subject,email,message,date)
VALUES ('$name','$sub','$email','$mess','$date')";

if ($con->query($sql) === TRUE) {
header( 'Location:contact.php' );

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

 ?>
