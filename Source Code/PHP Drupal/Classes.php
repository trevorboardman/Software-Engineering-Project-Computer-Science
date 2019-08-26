<?php
     
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     } 

     $sql = "SELECT ClassID, ClassName, ClassRoom, ClassSize FROM ClassInfo";
     $result = $conn->query($sql);
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
     echo "<table>";
          echo "<tr><th>Class ID</th><th>Class</th><th>Room</th><th>Class Size</th></tr>";
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
              echo "<tr><td> " . $row["ClassID"]. "</td><td> " . $row["ClassName"]. "</td><td>" . $row["ClassRoom"]. "</td><td> " . $row["ClassSize"]. "</td></tr>";
           }
      echo "</table>";
      echo"<button onclick=\"window.location='/?q=node/13'\">+ Add Class</button>";
echo "</body>";
echo "</html>";
} else {
    echo "0 results";
}
$conn->close();
?>