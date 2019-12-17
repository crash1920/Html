<?php
require_once("cnx.php") ; 
session_start() ;
if(isset($_SESSION["username"])) 
{
$name=$_SESSION["username"];
$email=$_SESSION["email"];
$message=$_POST["message"];
$date=date("Y/m/d") ; 

$sql = "INSERT INTO comments (name,email,comment,date)
VALUES ('$name','$email','$message','$date')";

if ($con->query($sql) === TRUE) {
header( 'Location:single-post.php' );

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}else
     {     
          echo "<script type='text/javascript'>alert('vous devez vous connectez dabord');
          window.location.href='single-post.php';
          </script>"; 
     
        }
          $con->close();

 ?>
