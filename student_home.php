<?php
  
session_start(); 
   
if (!isset($_SESSION['reg_num'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: facultylogin.html'); 
} 
   
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['reg_num']); 
    header("location: studentlogin.html"); 
} 
?> 

<!DOCTYPE html>
<html lang="en"> 
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="fac_home.css">
</head> 
<body> 
    <div> 
   
                <?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                        echo $_SESSION['success'];  
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
        <?php  if (isset($_SESSION['reg_num'])) : ?>
            <header>
                <ul>
            <li style="color:black;"> 
                Hello,
                <strong> 
                    <?php echo $_SESSION['reg_num']; ?> 
                </strong> 
            </li>
             <button><a href="studentlogin.html">Logout</a></button>
 </ul>
</header>
<div class="main">
<aside>
        <button><a href="student_download.php">View Assignment</a></button>
        <button><a href="student_upload.php">Upload Assignment</a></button>
        <button><a href="student_marks.php">Marks</a></button>
        <button><a href="contact-us.html">Contact Us</a></button>
    </aside>
    
    <table style="width:1000px ;">
            <caption>TimeTable</caption>
            <tr>
              <th>Day</th>
              <th>9:00 - 10:00</th> 
              <th>10:00 - 11:00</th>
              <th>11:00 - 12:00</th>
              <th>12:00 - 1:00</th>
              <th>Break</th>
              <th>2:00 - 3:00</th>
              <th>3:00 - 4:00</th>
              <th>4:00 - 5:00</th>
              <th> Day Ends </th>
            </tr>
            <tr>
                <th>Monday</th>
                <td>CNS</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Break</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Tuesday</th>
                <td>CNS</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Break</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Wednesday</th>
                <td>CNS</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Break</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Thursday</th>
                <td>CNS</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Break</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Friday</th>
                <td>CNS</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Break</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Saturday</th>
                <td>CNS</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Break</td>
                <td>PE</td>
                <td>PM</td>
                <td>CC</td>
                <td>Day Ends</td>
            </tr>
          </table>
      </div>
       </div>
   </div>
        <?php endif ?> 
    </div> 
</body> 
</html> 