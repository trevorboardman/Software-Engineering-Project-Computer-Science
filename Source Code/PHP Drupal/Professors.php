<?php
    
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     } 
     $sql = "SELECT ProfessorFirst, ProfessorLast, ProfessorEmail, ProfessorPhone, Classes FROM ProfessorInfo";
     $result = $conn->query($sql);
     echo "<html>";
          echo "<head>";
          echo "</head>";
          echo "<body>";
               echo "<table>";
                     echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Classes</th></tr>";
                     if ($result->num_rows > 0) {
                     // output data of each row
                         while($row = $result->fetch_assoc()) {
                              echo "<tr><td>" . $row["ProfessorFirst"]. "  " . $row["ProfessorLast"]. " </td><td>" . $row["ProfessorEmail"]. "</td><td>". $row["ProfessorPhone"]. "</td><td>". $row["Classes"]. "</td></tr>";
                          }
               echo "</table>";
          echo "</body>";
     echo "</html>";
} 
else {
    echo "0 results";
}
$conn->close();
?>
<button onclick="window.location='/?q=node/9'">+ Add Professor</button>