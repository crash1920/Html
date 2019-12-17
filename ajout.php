<?php
require_once("cnx.php") ; 
session_start() ;
if(isset($_SESSION["username"])) 
{
$usr=$_SESSION["username"];
$cat=$_POST["categ"];
$title=$_POST["title"];
$art=$_POST["article"];
$date=date("Y/m/d") ; 

$sql = "INSERT INTO articles (title,username,categorie,article,date)
VALUES ('$title','$usr','$cat','$art','$date')";

if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('ajout avec succés');
    window.location.href='all.php';
    </script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}else
     {     
          echo "erreur";
     
        }
          $con->close();

 ?>
