<?php
    //include('./navbar.php');
    //include('http://localhost/Pharmacy_24/control/seller/checkSellerLogin.php');
//?>

<?php
    include('../navbar.php');
    include('../../control/seller/checkSellerLogin.php');
    
?>

<html>
<head>
    <title>Seller Login Page</title>
</head>
<body>

<center><u><h1>Seller Login</u></h1>
<form action="" method="POST">
    <table>
    <tr>
        <td><h3>User name:</h3></td>
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
    </tr>
    <tr>
        <td>
            <input type="submit" value="Login" name="submit">
            <input type="button" value="Registration" />
        </td>
        <td>
        <?php
                echo $sellerloginError;
            ?>
        </td>
    </tr>
        
    </table>
    </form>
</form>
</center>
</body>
</html>