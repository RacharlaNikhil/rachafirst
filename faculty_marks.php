<?php
session_start();
$servername="localhost";
$username="root";
$password="asdf";
$db="onlineassignment";
$roll=$_POST["reg"];
$section=$_POST["sec"];
$subject=$_POST["sub"];
$mark=$_POST["marks"];
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($roll==""||$section==""||$subject==""||$mark=="")
{
	echo"PLEASE ENTER ALL THE DETAILS";

}
else
{
$sql="INSERT INTO studentmarks(reg,section,subject,marks)
Values('$roll','$section','$subject','$mark');";
if($conn->query($sql))
{
	echo "Marks are successfully entered";
}
else
{
	echo "Re-enter the marks";
}
}
?>