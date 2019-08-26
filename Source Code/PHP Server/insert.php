<?php
 /* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */

 
 
// Check connection
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security 
$Question = mysqli_real_escape_string($link, $_POST['Question']); 
$Answers = mysqli_real_escape_string($link, $_POST['possible_answers']);
 $Answer = mysqli_real_escape_string($link, $_POST['correct_answer']);
 
// attempt insert query execution
 $sql = "INSERT INTO quiz_questions (question, possible_answers, correct_answer) VALUES ('$Question', '$Answers', '$Answer')";
 if(mysqli_query($link, $sql)){
   // echo "Records added successfully.";
$alert = "Question added successfully";
  echo "<script type='text/javascript'>alert('".$alert."');</script>";
echo "<script>setTimeout(\"location.href = '/?q=node/5';\",0);</script>";
}   
else{
 echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
}
 
// close connection mysqli_close($link);
 ?>
