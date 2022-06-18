<?php
    if(isset($_SESSION["username"]) && isset($_SESSION["role"])){
        header("Location: adminProfile.php");
    }
?>
<html>
<head>
    <title>Pharmacy 24</title>
</head>
<body>
    <?php
        include("navbar.php");
    ?>
    <center>
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