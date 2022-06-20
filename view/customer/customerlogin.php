<?php
    include('../navbar.php');
    include('../../control/checkcustomerlogin.php');
    if(isset($_SESSION["username"])){
        header("Location: ../home.php");
    }
?>

<html>
<head>
    <title>Customer Login</title>
</head>
<body>
<center>
<form action="" method="POST">
    <table>
    <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
    </tr>
    <tr>
            <td><h3>Password:</h3></td>
            <td><input type="password" name="password" id=""></td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="" id="">
            <label for="">Remember Me</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Login" name="submit">
            <button><a href="../customer/customerregistration.php">Registration</a></button>

        </td>
      
    </tr>
        
    </table>
    </form>
</form>
</center>
</body>
</html>