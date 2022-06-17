<?php
    include("adminSideBar.php");
    include("../../control/admin/supplier/adminSupplierBlock.php");
    
?>

<html>
    <head>
        <title>Block/Unblock Supplier</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <a href="../admin/adminSupplier.php">| Add Supplier |</a>
                    <a href="../admin/adminRemoveSupplier.php">Remove Supplier</a>
                    <a href="../admin/adminBlockSupplier.php">| Block Supplier |</a>
                    <a href="">Complains |</a>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        include("../../control/supplierTable.php");
                    ?>
                </td>
                <td>
        <form action="" method="POST">
                    <table>
                        <tr>
                            <td><h1><u>Block Supplier</u></h1></td>
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
                <input type="submit" value="Submit" name="adminBlockSupplier">
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