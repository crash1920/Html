
<?php 
require_once('cnx.php');
session_start();

    if(isset($_POST['username']))
    {
       if(empty($_POST['username']) || empty($_POST['pass']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="Select * from accounts where username='".$_POST['username']."' and psw='".$_POST['pass']."'";
            $result=mysqli_query($con,$query);

            if($row=mysqli_fetch_assoc($result))
            {
                $_SESSION['username']=$_POST['username'];
                $_SESSION['pass']=$_POST['pass'];
                $_SESSION['email']=$_POST['email'];
                $_SESSION['role']=$row['role'];
                header("location:index.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>