<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)
die("connection failed:".mysqli_connect_error());
$e=$_POST['email'];
$p=$_POST['password'];
$sql="select * from student_details where email='$e' and password='$p'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
    $SESSION['Email']=$Email;
     header("location:/COLLEGE GRAWISE/g.php ");

}
else{
    
    header("location:/COLLEGE GRAWISE/forms/login.html");
   
}
mysqli_close($conn);
?>