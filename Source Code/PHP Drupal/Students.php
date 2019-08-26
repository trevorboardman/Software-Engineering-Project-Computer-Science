<?php
     
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     } 
     $sql = "SELECT StudentID, StudentFirst, StudentLast, StudentEmail, StudentClass FROM StudentInfo";
     $result = $conn->query($sql);
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
      echo"<form name='form1' method='post' action=' '>";
           echo "<table>";
                 echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Classes</th></tr>";
                 if ($result->num_rows > 0) {
                 // output data of each row
                      while($row = $result->fetch_assoc()) {
                           echo "<tr><td>" . $row["StudentID"]. "</td><td>" . $row["StudentFirst"]. "  " . $row["StudentLast"]. " </td><td>" . $row["StudentEmail"]. "</td><td>". $row["StudentClass"]. "</td></tr>";
                   }
          echo "</table>";
     echo "</form>";
} else {
    echo "0 results";
}
?>
     <button onclick="window.location='/?q=node/8'">Add Student</button>
     <button onclick="window.location='/?q=node/11'">Add Student to Class</button>
     <button onclick="window.location='/?q=node/14'">Authenticate Student for App</button>
<?php
echo "</body>";
echo "</html>";
$conn->close();
?>