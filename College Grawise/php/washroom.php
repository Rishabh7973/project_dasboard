<?php
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)

die("connection failed:".mysqli_connect_error());
$F=$_POST['floor'];
$b=$_POST['block'];
$c=$_POST['complaint'];
$s=$_POST['suggestion'];
$sql="INSERT INTO `washroom`( `Floor`, `Block`, `Complaint`, `Suggestion`) VALUES ( '$F','$b','$c','$s')";
if( mysqli_query($conn,$sql))
{
 echo "record sussefully";

}
else{
    echo "fail:";
}
mysqli_close($conn);

?>