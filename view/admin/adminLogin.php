<?php
    include('../navbar.php');
    include('../../control/admin/checkAdminLogin.php');
    if(isset($_SESSION["username"])){
        header("Location: adminProfile.php");
    }
?>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<center>
<form action="" method="POST">
    <td><u><h1>Login as Admin</h1></u></td>
    <table>
    <tr>
            <td><h3>Username:</h3></td>
            <td><input type="text" name="username" id=""></td>
    </tr>
    <tr>
            <td><h3>Password:</h3></td>
            <td><input type="password" name="password" id=""></td>
    </tr>    </tr>
    <tr>
        <td>
            <input type="submit" value="LOGIN" name="submit">
        </td>
        <td>
            <?php
                echo $loginError;
            ?>
        </td>
    </tr>
    </table>
    </form>
</form>
</center>
</body>
</html>