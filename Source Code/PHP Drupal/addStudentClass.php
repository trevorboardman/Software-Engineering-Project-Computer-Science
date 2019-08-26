<!DOCTYPE html>
<html lang="en">
<head>
<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ClassID FROM ClassInfo";
$result = $conn->query($sql);
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo"<form action='/Quiz/insertStudentClass.php' method='post'>";

echo "<select name='ClassID'>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='  " . $row['ClassID'] . "' >" . $row['ClassID'] . "</option>";
    }
echo"</select>";
echo"<p>";
       echo" <label for='StudentEmail'>Student's Email:</label>";
      echo"  <input type='text' name='StudentEmail' id='StudentEmail'>";
   echo" </p>";
 
    echo"<input type='submit' value='Submit'>";
echo "</body>";
echo "</html>";
} else {
    echo "0 results";
}
$conn->close();
?>
 
     

