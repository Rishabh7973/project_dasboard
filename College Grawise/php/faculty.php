<?php
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)

die("connection failed:".mysqli_connect_error());
$f=$_POST['faculty'];
$c=$_POST['Complaint'];
$s=$_POST['suggestion'];
$sql="INSERT INTO `faculty`( `Faculty_name`, `Complaint`, `Suggestion`) VALUES ('$f','$c','$s')";
if( mysqli_query($conn,$sql))
{
 echo "record sussefully";

}
else{
    echo "fail:";
}
mysqli_close($conn);

?>