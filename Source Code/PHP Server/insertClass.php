<?php
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ClassID = mysqli_real_escape_string($link, $_POST['ClassID']);
$Name = mysqli_real_escape_string($link, $_POST['ClassName']);
$Room = mysqli_real_escape_string($link, $_POST['ClassRoom']);
$Size = mysqli_real_escape_string($link, $_POST['ClassSize']);

// attempt insert query execution
$sql = "INSERT INTO ClassInfo  (ClassID, ClassName, ClassRoom, ClassSize) VALUES ('$ClassID', '$Name', '$Room', '$Size')"; 
if(mysqli_query($link, $sql)){
    $alert = "Class: " . $Name . "\\nAdded Successfully" ;
  echo "<script type='text/javascript'>alert('".$alert."');</script>";
echo "<script>setTimeout(\"location.href = '/?q=node/4';\",0);</script>";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

