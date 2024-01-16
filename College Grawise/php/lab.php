<?php
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)

die("connection failed:".mysqli_connect_error());
$l=$_POST['lab'];
$cd=$_POST['code'];
$c=$_POST['complaint'];
$s=$_POST['suggestion'];
$sql="INSERT INTO `lab`(`lab_name`, `lab_code`, `Complaint`, `Suggestion`) VALUES ('$l','$cd','$c','$s')";
if( mysqli_query($conn,$sql))
{
 echo "record sussefully";

}
else{
    echo "fail:";
}
mysqli_close($conn);

?>