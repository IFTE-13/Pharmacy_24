<?php
    include("adminSideBar.php");
    include("../../control/admin/seller/adminSellerRemove.php");
    
?>

<html>
    <head>
        <title>Remove Supplier</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <a href="../admin/adminSeller.php">| Add Seller |</a>
                    <a href="../admin/adminRemoveSeller.php">Remove Seller</a>
                    <a href="../admin/adminBlockSeller.php">| Block Seller |</a>
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
                            <td><h1><u>Remove Seller</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminRemoveSeller">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $sellerRemoved;
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