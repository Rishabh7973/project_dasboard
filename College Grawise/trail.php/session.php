<?php 
    include("connection.php");
    error_reporting(0);

$userprofile = $_SESSION['Email'];
if($userprofile == true)
{

}
else{
    header("location:login.php");
}
?>