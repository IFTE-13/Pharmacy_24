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
        <div>  
           <section class="login-section">
                 <!-- <h1 class="type">Choose Account Type</h1> -->
            <div class="columns">
                <div class="column">
                
                <h3><a href="../admin/adminLogin.php" class="loginBtn admin">ADMIN</h3> 
                <img src="../../utilities/admin.jpg" width="150px" height="150px" class = "userImg">
                </a>
                </div>
                <div class="column">
                
                <h3><a href="../customer/customerlogin.php"  class="loginBtn customer">CUSTOMER</h3>
                <img src="../../utilities/download.png" width="150px" height="150px" class = "userImg">
                </a>
                </div>
                <div class="column">
                
                   <h3><a href="../view/seller/sellerLogin.php"  class="loginBtn">SELLER</h3>
                   <img src="../../utilities/seller.jpg" width="150px" height="150px" class = "userImg">
                   </a>
                </div>
                <div class="column"> 
                
                    <h3><a href="../view/supplier/CommonLoginSupplier.php"  class="loginBtn">SUPPLIER</h3>
                    <img src="../../utilities/supplier.jpg" width="150px" height="150px" class = "userImg">
                    </a>
                </div>
            </div>
            </section>
        </div>
  
</body>
</html>