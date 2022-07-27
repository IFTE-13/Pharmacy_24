<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_SESSION["role"])){
        header("Location: adminProfile.php");
    }
    if(isset($_SESSION["username"])){
        include('../view/customer/customertopbar.php');
    }
    else{
        include("navbar.php");
        include("../view/admin/adminNavbar.php");
    }
?>
<html>

<head>
    <title>Pharmacy 24</title>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <center>
        <h3><u>Products</u></h3>
        <table>
            <tr>
                <td>
                    <?php
                    include("../control/homeData.php");
                ?>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>