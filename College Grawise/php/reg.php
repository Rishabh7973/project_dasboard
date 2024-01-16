<?php
$server="localhost";
$user="root";
$pass="";
$dbname="grievances";
$conn= mysqli_connect($server ,$user,$pass,$dbname);
if(!$conn)

die("connection failed:".mysqli_connect_error());
$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['password'];
$u=$_POST['university-roll'];
$c=$_POST['class-roll'];
$ph=$_POST['phone'];
$a=$_POST['course'];
$b=$_POST['branch'];
$y=$_POST['year'];
$s=$_POST['semester'];
$sec=$_POST['section'];
$g=$_POST['gender'];
$sql="INSERT INTO `student_details`( `Name`, `Email`, `Password`, `university_roll_no.`, `class_roll_no.`, `phone_no`, `course`, `Branch`, `year`, `semester`, `section`, `gender`)
 VALUES ( '$n','$e','$p',$u,'$c',$ph,'$a','$b',$y,$s,'$sec','$g')";
if( mysqli_query($conn,$sql))
{
 echo "record sussefully";

}
else{
    echo "Your Regestration is faild:";
}
mysqli_close($conn);

?>