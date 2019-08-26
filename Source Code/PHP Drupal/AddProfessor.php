<?php
    
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      } 
     $sql = "SELECT ClassName, ClassID FROM ClassInfo";
     $result = $conn->query($sql);
     echo "<html>";
          echo "<head>";
          echo "</head>";
          echo "<body>";
                echo"<form action='/Quiz/insertProfessor.php' method='post'>";
                     echo"<p>";
                          echo" <label for='ProfessorFirst'>First Name:</label>";
                          echo"  <input type='text' name='ProfessorFirst' id='ProfessorFirst'>";
                     echo" </p>";
                     echo"<p>";
                          echo" <label for='ProfessorLast'>Last Name:</label>";
                          echo"  <input type='text' name='ProfessorLast' id='ProfessorLast'>";
                     echo" </p>";
                     echo"<p>";
                          echo" <label for='ProfessorEmail'>Email:</label>";
                          echo"  <input type='text' name='ProfessorEmail' id='ProfessorEmail'>";
                     echo" </p>";
                     echo"<p>";
                          echo" <label for='ProfessorPhone'>Phone:</label>";
                          echo"  <input type='text' name='ProfessorPhone' id='ProfessorPhone'>";
echo" </p>";
echo"<p>";

echo" <label for='ClassRoom'>Classes:</label>";
echo "<select id='mydropbox' name='mydropbox' onchange='copyValue()'>";
echo "<option value='--Select--'>--Select--</option>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value=" . $row['ClassID'] . " >" . $row['ClassName']  . "</option>";
    }
echo"</select>";

echo"<script type = 'text/javascript'>
var comma = \", \";
function copyValue()
    {
      
     var dropboxvalue = document.getElementById('mydropbox').value;
     var classvalue =document.getElementById('Classes').value;
     classvalue = dropboxvalue.concat(comma,classvalue);
     document.getElementById('Classes').value = classvalue;


}
</script>";
echo" </p>";
echo"<p>";
       echo" <label for='Classes'>Classes:</label>";
      echo"  <textarea rows='5' cols='50' name='Classes' id='Classes'></textarea>";
   echo" </p>";
 
    echo"<input type='submit' value='Submit'>";
echo "</body>";
echo "</html>";
} else {
    echo "0 results";
}
$conn->close();
?>
