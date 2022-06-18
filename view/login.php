<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("Location: ../view/home.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        include("navbar.php")
    ?>
    <!-- <form action="../control/checkLogin.php" method="POST">
    <table>
        <tr>
            <td><h1>Login</h1><hr></td>
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
        <td>
            <input type="checkbox" name="" id="">
            <label for="">Remember Me</label>
        </td>
        <td>
        <a href="">Forgot Password</a>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Submit">
        </td>
    </tr>
    </table>
    </form>
    <form action="registration.php">
        <table>
            <tr>
                <td><p>Don't have an account?</p></td>
                <td><input type="submit" value="Registration"></td>
            </tr>
        </table>
        
    </form> -->

    <!-- <input type="submit" value="ADMIN" name="admin"> -->
    <center>
        <u><h2>Login as:</h2></u>
    <a href="../view/admin/adminLogin.php">ADMIN</a><br><br>
    <a href="../view/customer/customerlogin.php">CUSTOMER</a><br><br>
    <a href="../view/admin/sellerLogin.php">SELLER</a><br><br>
    <a href="../view/admin/supplierLogin.php">SUPPLIER</a>
    </center>
</body>
</html>