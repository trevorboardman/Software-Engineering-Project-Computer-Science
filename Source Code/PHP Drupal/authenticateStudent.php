<?php
     
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     } 
     $sql = "SELECT StudentID, StudentFirst, StudentLast, StudentEmail FROM StudentInfo";
     $result = $conn->query($sql);
     echo "<html>";
     echo "<head>";
     echo "</head>";
     echo "<body>";
          echo"<form action='/Quiz/authStudent.php' method='post'>";
               echo "<select name='Students'>";
                    echo"<option value='--Select--'>--Select--</option>";
                    if ($result->num_rows > 0) {
                    // output data of each row
                         while($row = $result->fetch_assoc()) {
                              echo "<option value=" . $row['StudentID'] . ">" . $row['StudentFirst'] . " " . $row['StudentLast'] . " - " . $row['StudentID'] .  "</option>";
                          }
                          echo" </select>";
                          echo"   ";
          echo"<input type='submit' value='Authenticate'>";
     echo "</body>";
     echo "</html>";
} 
else {
    echo "0 results";
}
$conn->close();
?>