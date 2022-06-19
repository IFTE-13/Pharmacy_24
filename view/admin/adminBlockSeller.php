<?php
    include("adminSideBar.php");
    include("../../control/admin/seller/adminSellerBlock.php");
    
?>

<html>
    <head>
        <title>Block/Unblock Supplier</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <a href="../admin/adminSeller.php">| Add Seller |</a>
                    <a href="../admin/adminRemoveSeller.php">Remove Seller</a>
                    <a href="../admin/adminBlockSeller.php">| Un/Block Seller |</a>
                    <a href="">Complains |</a>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        include("../../control/sellerTable.php");
                    ?>
                </td>
                <td>
        <form action="" method="POST">
                    <table>
                        <tr>
                            <td><h1><u>Block Seller</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <td><h3>Status:</h3></td>
            <td>
                <input type="radio" name="status" id="" value="block">
                <label for="status">Block</label>
                <input type="radio" name="status" id="" value="unblock">
                <label for="status">Unblock</label>
            </td>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminBlockSeller">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $userBlocked;
                ?>
        </td>
        </tr>
    </table>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>