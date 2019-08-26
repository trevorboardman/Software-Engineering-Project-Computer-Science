<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
     <form action="/Quiz/insert.php" method="post">

          <h3>Enter as many questions as you'd like for the quiz</h3>
          <h4>
                <p>
                  <label for="Question"><font color="black"><b>Question:</b></font></label>
                  <textarea rows=4 cols=65 name="Question" id="Question"></textarea>
               </p>

               <p>
                  <label for="possible_answers"><font color="black">Insert 4 answers, separated by a comma. (Example: Blue, Red, Green, Yellow) :</font></label>
                  <textarea rows=4 cols=65 name="possible_answers" id="possible_answers"></textarea>
              </p>
              <p>
       
                    <select name="correct_answer">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    </select> <label for="correct_answer"><font color="black">Position of the correct answer in number form.<br> (Example: Blue, Red, Green, Yellow - If "Blue" is the correct answer, select 1 from the dropdown) </font></label>
              </p> 
           </h4>
       <input type="submit" value="Submit Question">

     </form>

</body>
</html>
