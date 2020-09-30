<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "asdf";
$db = "onlineassignment";
$regs = $_POST["reg"];
$email=$_POST["reg"];
$pass = $_POST["pwd"];
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($regs=="" || $pass=="")
{
	echo"<script type='text/javascript'> document.location = 'studentlogin.html'; </script>";
}
$sql1 ="select * from student_register where reg_num ='$regs' && password='$pass'";
$sql2 ="select * from student_register where email='$email' && password='$pass'";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$num1=mysqli_num_rows($result1);
$num2=mysqli_num_rows($result2);

if($num1==1 || $num2==1)
{
	$_SESSION["reg_num"]= $regs;
	$_SESSION["reg_num"]= $regs;
	echo"<script type='text/javascript'> document.location = 'student_home.php'; </script>";

}
else
{
echo"<script type='text/javascript'> document.location = 'studentlogin.html'; </script>";

}
?>



