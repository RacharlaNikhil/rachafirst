<?php
session_start();
$servername="localhost";
$username="root";
$password="asdf";
$db="onlineassignment";
$conn=new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * from studentmarks";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<body style="background-color: lightgrey">
	<table align="center" border="2px" style="width:600px;line-height: 45px;">
		<tr>
			<th colspan="4"><h1>Student Marks</h1></th>
		</tr>
		<t>
			<th>Reg:NO</th>
			<th>Section</th>
			<th>Subject</th>
			<th>Marks</th>
		</t>
<?php
while($rows=mysqli_fetch_assoc($result))
{
	?>
	<tr>
		<td><?php echo $rows['reg']; ?></td>
		<td><?php echo $rows['section']; ?></td>
		<td><?php echo $rows['subject']; ?></td>
		<td><?php echo $rows['marks']; ?></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>

