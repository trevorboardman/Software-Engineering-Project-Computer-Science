<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */



// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security


$ProfessorFirst = mysqli_real_escape_string($link, $_POST['ProfessorFirst']);
$ProfessorLast = mysqli_real_escape_string($link, $_POST['ProfessorLast']);
$Email = mysqli_real_escape_string($link, $_POST['ProfessorEmail']);
$Phone = mysqli_real_escape_string($link, $_POST['ProfessorPhone']);
$Classes = mysqli_real_escape_string($link, $_POST['Classes']);
// attempt insert query execution
$sql = "INSERT INTO ProfessorInfo  (ProfessorFirst, ProfessorLast, ProfessorEmail, ProfessorPhone, Classes) VALUES ('$ProfessorFirst', '$ProfessorLast', '$Email', '$Phone', '$Classes')";
if(mysqli_query($link, $sql)){
    $alert = "Professor: " . $ProfessorFirst . " " . $ProfessorLast . "\\nAdded Successfully";
  echo "<script type='text/javascript'>alert('".$alert."');</script>";
echo "<script>setTimeout(\"location.href = '/?q=node/6';\",0);</script>";
} else{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

