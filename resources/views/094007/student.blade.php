<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
</head>
<body>
<form method="post" action="/student/store">
    {{csrf_field()}}
    <div align="center" class="form-group">
        <input type="hidden" name="id" value="">
        <input type="number" name="studentnumber" placeholder="Student Number" ><br>
        <input type="text" name="firstname" placeholder="First Name" ><br>
        <input type="text" name="lastname" placeholder="Last Name" ><br>
        <input type="date" name="birthdate" placeholder="Birthdate" ><br>
        <input type="text" name="course" placeholder="course"><br>
        <button type="submit">Save</button> <br>
    </div>
</form>

</body>
</html>