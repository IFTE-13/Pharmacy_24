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
    <center>
        <u><h2>Login as:</h2></u>
    <a href="../view/admin/adminLogin.php">ADMIN</a><br><br>
    <a href="../view/customer/customerlogin.php">CUSTOMER</a><br><br>
    <a href="../view/seller/sellerLogin.php">SELLER</a><br><br>
    <a href="../view/admin/supplierLogin.php">SUPPLIER</a>
    </center>
</body>
</html>