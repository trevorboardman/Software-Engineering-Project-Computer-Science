<?php
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$StudentID = mysqli_real_escape_string($link, $_POST['Students']);
$result = mysqli_query($link, "SELECT StudentEmail FROM StudentInfo WHERE StudentID = '$StudentID'"); 
$row = mysqli_fetch_row($result);
$Email = $row[0];
$Username = substr($Email, 0, strpos($Email, '@'));
$String = "MVNU#";
$Password = $String . $StudentID;

// attempt insert query execution
$sql = "INSERT INTO users  (username, password) VALUES ('$Username', '$Password')";
if(mysqli_query($link, $sql)){
   // echo "<h3>Student added to app users with username: $Username and password: $Password </h3>" ;
   $alert = "Student authenticated successfully\\nUsername: " . $Username . "\\nPassword: " . $Password;
  echo "<script type='text/javascript'>alert('".$alert."');</script>";

echo "<script>setTimeout(\"location.href = '/?q=node/14';\",0);</script>";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

