<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <section class="navbar">
        <table>
            <tr>
                <td><a href="http://localhost/Pharmacy24/view/Home.php">Home</a></td>
                <td><a href="http://localhost/Pharmacy24/view/login.php">Login</a></td>
                <td><a href="http://localhost/Pharmacy24/view/about.php">About</a></td>
                <td><a href="http://localhost/Pharmacy24/view/contact.php">Contact</a></td>
            </tr>
        </table>
    </section>
    <form action="../control/checkLogin.php" method="Post">
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
        
    </form>
</body>
</html>