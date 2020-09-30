<?php
  
session_start(); 
   
if (!isset($_SESSION['fac_id'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: facultylogin.html'); 
} 
   
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['fac_id']); 
    header("location: facultylogin.html"); 
} 
?> 

<!DOCTYPE html> 
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
        <?php  if (isset($_SESSION['fac_id'])) : ?>
            <header>
                <ul>
            <li style="color:black;"> 
                Hello,
                <strong> 
                    <?php echo $_SESSION['fac_id']; ?> 
                </strong> 
            </li>
             <button><a href="facultylogin.html">Logout</a></button>
 </ul>
</header>
<div class="main">
<aside>
        <button><a href="faculty_download.php">View Assignment</a></button>
        <button><a href="faculty_upload.php">Upload Assignment</a></button>
        <button><a href="facultymarks.html">Marks</a></button>
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
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Break</td>
                <td>B1(CNS LAB)</td>
                <td>B1(CNS LAB)</td>
                <td>B1(CNS LAB)</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Tuesday</th>
                <td>B17</td>
                <td>B16</td>
                <td>B15</td>
                <td>-</td>
                <td>Break</td>
                <td>-</td>
                <td>-</td>
                <td>B14</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Wednesday</th>
                <td>B1</td>
                <td>B2</td>
                <td>B3</td>
                <td>-</td>
                <td>Break</td>
                <td>B5</td>
                <td>-</td>
                <td>-</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Thursday</th>
                <td>B17(CNS LAB)</td>
                <td>B17(CNS LAB)</td>
                <td>B17(CNS LAB)</td>
                <td>-</td>
                <td>Break</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Friday</th>
                <td>B14</td>
                <td>B16</td>
                <td>-</td>
                <td>B17</td>
                <td>Break</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>Day Ends</td>
            </tr>
            <tr>
                <th>Saturday</th>
                <td>B15(CNS LAB)</td>
                <td>B15(CNS LAB)</td>
                <td>B15(CNS LAB)</td>
                <td>-</td>
                <td>Break</td>
                <td>-</td>
                <td>B15</td>
                <td>B16</td>
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