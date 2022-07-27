<?php
    include('../others/nav.php');
    include('../../control/admin/checkAdminLogin.php');
    if(isset($_SESSION["username"])){
        header("Location: admin/adminProfile.php");
    }
?>
<html> -->

<head>
    <link rel="stylesheet" href="../../css/adminLogin.css">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../../css/loginPage.css">
</head>

<body>
    <!-- <section class="content">
        <div class="login-left"></div>
        <div class="login-right">
            <div class="registration">
                <p>Don't have an account?</p>
                <button class="btn">Registration</button>
            </div>
            <h1>Login to your account</h1>
            <div class="input">
                <h5>Username</h5>
                <input type="text" name="username" id="" placeholder="username" class="input-field">
                <h5>Password</h5>
                <input type="text" name="username" id="" placeholder="password" class="input-field">
            </div>
            <button class="btn login-btn">Login</button>
        </div>
    </section> -->
    <!-- <div class="content">
    </div> -->
    <center>
        <form action="" method="POST">
            <td><u>
                    <h1>Login as Admin</h1>
                </u></td>
            <table>
                <tr>
                    <td>
                        <h3>Username:</h3>
                    </td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>
                        <h3>Password:</h3>
                    </td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="LOGIN" name="submit" class="btn">
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