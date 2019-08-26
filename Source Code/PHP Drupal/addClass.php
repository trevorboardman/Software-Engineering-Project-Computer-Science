<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT LocationID, Name FROM Locations";
$result = $conn->query($sql);
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo"<form action='/Quiz/insertClass.php' method='post'>";
echo"<p>";
echo" <label for='ClassID'>Class ID:</label>";
echo"  <input type='text' name='ClassID' id='ClassID'>";
echo" </p>";
echo"<p>";
echo" <label for='ClassName'>Class Name:</label>";
echo"  <input type='text' name='ClassName' id='ClassName'>";
   echo" </p>";
echo"<p>";
echo" <label for='ClassRoom'>Class Room:</label>";
echo "<select name='ClassRoom'>";
echo "<option value='--Select--'>--Select--</option>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=" . $row['LocationID'] . " >" . $row['Name'] . " (" .$row['LocationID'] . ")</option>";
    }
echo"</select>";
echo" </p>";
echo"<p>";
       echo" <label for='ClassSize'>Class Size:</label>";
      echo"  <input type='number' name='ClassSize' id='ClassSize'>";
   echo" </p>";
 
    echo"<input type='submit' value='Submit'>";
echo "</body>";
echo "</html>";
} else {
    echo "0 results";
}
$conn->close();
?>
 