<?php
    session_start();
    if(isset($_SESSION["username"])){
        header("Location: ../view/home.php");
    }
        include("nav.php");
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/login.css">
    <title>Login</title>
</head>
<body>
    <section class="login-section">
        <div>
        <a href="../admin/adminLogin.php" class="loginBtn">ADMIN</a><br><br>
        <a href="../view/customer/customerlogin.php" class="loginBtn">CUSTOMER</a><br><br>
        <a href="../view/seller/sellerLogin.php" class="loginBtn">SELLER</a><br><br>
        <a href="../view/supplier/CommonLoginSupplier.php" class="loginBtn">SUPPLIER</a>
        </div>
    </section>
</body>
</html>