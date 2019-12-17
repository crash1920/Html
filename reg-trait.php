<?php
require_once("cnx.php") ;
$usr = $_POST["username"];
$fname=$_POST["first-name"];
$sname=$_POST["second-name"];
$email=$_POST["email"];
$age=$_POST["age"];
$pass=$_POST["pass"];
$date=date("Y/m/d") ; 
$sql = "INSERT INTO accounts (username,fname,sname,email,psw,age,date)
VALUES ('$usr','$fname','$sname','$email','$pass','$age','$date')";

if ($con->query($sql) === TRUE) {   
    echo "<script type='text/javascript'>alert('succés');
    window.location.href='register.php';
    </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

 ?>
