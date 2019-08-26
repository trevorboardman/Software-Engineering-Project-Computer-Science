<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */



// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security


$ClassID = mysqli_real_escape_string($link, $_POST['ClassID']);
$Email = mysqli_real_escape_string($link, $_POST['StudentEmail']);

// attempt insert query execution
$sql = "UPDATE StudentInfo SET StudentClass=CONCAT(StudentClass, '$ClassID') WHERE StudentEmail='$Email'";
if(mysqli_query($link, $sql)){
   // echo "Records added successfully.";
$alert = "Class: " . $ClassID . "\\nAdded to Student with Email: " .$Email;
  echo "<script type='text/javascript'>alert('".$alert."');</script>";
echo "<script>setTimeout(\"location.href = '/?q=node/11';\",0);</script>";



} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

