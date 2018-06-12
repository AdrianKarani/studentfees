<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee Payment</title>
</head>
<body>

<form method="post" action="/student/save">
    {{csrf_field()}}
    //student number,Fee Balance, Due Date
    <div align="center" class="form-group">
        <input type="hidden" name="id" value="">
        <input type="number" name="studentnumber" placeholder="Student Number" value=""><br>
        <input type="number" name="feebalance" placeholder="Fee Balance" value=""><br>
        <input type="text" name="duedate" placeholder="Deadline" value=""><br>
        <button type="submit">Save</button> <br>
    </div>
</form>
</body>
</html>