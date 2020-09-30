<?php
$servername="localhost";
$username="root";
$password="asdf";
$db="onlineassignment";
$uname=$_POST["fname"];
$regnum=$_POST["reg"];
$email=$_POST["email"];
$pass=$_POST["pwd"];
$pho=$_POST["ph"];
$dob=$_POST["dob"];
$course=$_POST["course"];
$branch=$_POST["branch"];

$conn=new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($uname=="" || $regnum=="" || $email=="" || $pass=="")
{
	echo"<script  type='text/javascript'> document.location = 'studentregister.html'; </script>";
}
$sql= "INSERT INTO student_register(name,reg_num,email,password,phone,dob,course,branch)
Values('$uname','$regnum','$email','$pass','$pho','$dob','$course','$branch');";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num == 0)
{
	echo"<script  type='text/javascript'> document.location = 'studentlogin.html'; </script>";

}
else
{
	echo"<script  type='text/javascript'> document.location = 'studentregister.html'; </script>";

}
?>



