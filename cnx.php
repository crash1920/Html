<?php
    $con=mysqli_connect("localhost","root","","ihm");

    if(!$con)
    {
        die(' Please Check Your cnx'.mysqli_error($con));
    }
?>
