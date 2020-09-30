<?php
$servername="localhost";
$username="root";
$password="asdf";
$db="onlineassignment";
$uname=$_POST["fname"];
$id = $_POST["fid"];
$email = $_POST["email"];
$pass=$_POST["pwd"];
$ph=$_POST["ph"];
$dob=$_POST["dob"];
$dep=$_POST["dep"];
$course=$_POST["course"];
$conn=new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($uname=="" || $id=="" || $email=="" || $pass=="")
{
	echo"<script  type='text/javascript'> document.location = 'facultyregister.html'; </script>";
}
$sql= "INSERT INTO faculty_register(name,fac_id,email,password,phone,dob,department,course_name)
Values('$uname','$id','$email','$pass','$ph','$dob','$dep','$course');";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num == 0)
{
	echo"<script  type='text/javascript'> document.location = 'facultylogin.html'; </script>";

}
else
{
	echo"<script  type='text/javascript'> document.location = 'facultyregister.html'; </script>";
}
?>