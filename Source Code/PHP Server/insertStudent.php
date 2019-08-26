<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security

$StudentID = mysqli_real_escape_string($link, $_POST['StudentID']);
$StudentFirst = mysqli_real_escape_string($link, $_POST['StudentFirst']);
$StudentLast = mysqli_real_escape_string($link, $_POST['StudentLast']);
$StudentPhone = mysqli_real_escape_string($link, $_POST['StudentPhone']);
$StudentEmail = mysqli_real_escape_string($link, $_POST['StudentEmail']);
// attempt insert query execution
$sql = "INSERT INTO StudentInfo (StudentID, StudentFirst, StudentLast, StudentPhone, StudentEmail) VALUES ('$StudentID', '$StudentFirst', '$StudentLast', '$StudentPhone', '$StudentEmail')";
if(mysqli_query($link, $sql)){
    $alert = "Student: " . $StudentFirst . " " . $StudentLast . "\\nAdded Successfully";
echo "<script type='text/javascript'>alert('".$alert."');</script>";
echo "<script>setTimeout(\"location.href = '/?q=node/7';\",0);</script>";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
