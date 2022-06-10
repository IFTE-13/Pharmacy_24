<?php
    include("");
?>
<html lang="en">
<head>
    <title>Registrtion</title>
</head>
<body>
    <h1>Registraion<hr></h1>
    <form action="../control/registrationCheck.php" method="POST">
    <table>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td><h3>Username:</h3></td>
            <td><input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td><h3>Password:</h3></td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td><h3>Confirm Password:</h3></td>
            <td><input type="password" name="confirmPassword" id=""></td>
        </tr>
        <tr>
            <td><h3>Gender:</h3></td>
            <td>
                <input type="radio" name="gender" id="" value="male">
                <label for="gender">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="gender">Female</label>
            </td>
        </tr>
        <tr>
            <td><h3>Date of Birth:</h3></td>
            <td><input type="date" name="dob" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit">
                <input type="button" value="Reset">
            </td>
        </tr>
        <tr>
            <td><h3><small>Have an account?</small></h3></td>
            <td><a href="http://localhost/Pharmacy24/view/login.php">Login</a></td>
        </tr>
    </table>
    </form>
</body>
</html>