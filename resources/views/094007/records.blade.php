<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
</head>
<body>

Student Name:{{}}<br>
Student Number:{}<br>
Fee Balance:{}<br>

<h>SEARCH RECORDS</h>
<form action="/searchrecord" method="post">
    {{ csrf_field() }}
    <div class="idno">
        <p>Enter ID Number:
            <input type="Number" name="searchid"><br><br>
    </div>
    <button class="search" type="submit">Search Record</button>
</form>


</body>
</html>