<!DOCTYPE html>
<html>
    <head>
        <title>Add Users</title>
    </head>
    <body>
        <form action="adduser.php" method="post">
            Surname: <input type="text" name="surname"><br>
            Forename: <input type="text" name="forename"><br>
            Password: <input type="password" name="password"><br>
            Year: <input type="number" name="year"><br>
            Balance: <input type="number" name="balance"><br>
            Role: <br>
            <input type="radio" name="role" value="pupil" checked>Pupil<br>
            <input type="radio" name="role" value="admin">Admin<br>
            Submit <input type="submit" value="Add user"><br>
        </form>
    </body>
</html>