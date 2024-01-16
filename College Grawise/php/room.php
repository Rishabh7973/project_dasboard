<?php
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)

die("connection failed:".mysqli_connect_error());
$n=$_POST['room'];
$c=$_POST['complaint'];
$s=$_POST['suggestion'];
$sql="INSERT INTO `classroom`( 'Room_no,`Complaint`, `Suggestion`) VALUES ('$n','$c','$s')";
if( mysqli_query($conn,$sql))
{
 echo "record sussefully";

}
else{
    echo "fail:";
}
mysqli_close($conn);

?>