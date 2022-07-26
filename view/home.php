<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_SESSION["role"])){
        header("Location: adminProfile.php");
    }
    if(isset($_SESSION["username"])){
        include('../view/customer/customertopbar.php');
    }
    else{
        include("nav.php");
    }
?>

<html>
<head>
    <link rel="stylesheet" href="../css/home.css">
    <title>Pharmachy'24</title>
</head>
<body>
    <div class="top">
    <?php
    
?>
        <div class="top-text">
            <div>
                <h1>get your <br>
                    <span class="top-span">necessity</span> <br>
                    here with few clicks</h1>
                <button class="btn co">Check out</button>
            </div>
        </div>
    </div>
</body>
</html>