<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="/Quiz/insertStudent.php" method="post">
    <p>
        <label for="StudentID">Student ID:</label>
        <input type="text" name="StudentID" id="StudentID">
    </p>
    <p>
        <label for="StudentFirst">First Name:</label>
        <input type="text" name="StudentFirst" id="StudentFirst">
    </p>
    <p>
        <label for="StudentLast">Last Name:</label>
        <input type="text" name="StudentLast" id="StudentLast">
    </p>

<p>
        <label for="StudentPhone">Phone:</label>
        <input type="text" name="StudentPhone" id="StudentPhone">
    </p>
<p>
        <label for="StudentEmail">Email:</label>
        <input type="text" name="StudentEmail" id="StudentEmail">
    </p>

    <input type="submit" value="Submit">
</form>

</body>
</html>
