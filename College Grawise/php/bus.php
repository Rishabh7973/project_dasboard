<?php
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)

die("connection failed:".mysqli_connect_error());
$n=$_POST['bus_no'];
$c=$_POST['Complaint'];
$s=$_POST['suggestion'];
$sql="INSERT INTO `bus`( `bus no.`, `Complaint`, `Suggestion`) VALUES ($n,'$c','$s')";
if( mysqli_query($conn,$sql))
{
 echo "record sussefully";

}
else{
    echo "fail:";
}
mysqli_close($conn);

?>