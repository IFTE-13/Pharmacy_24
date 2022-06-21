<?php
    include("../adminSideBar.php");
    include("../../../control/admin/product/removeProduct.php");
    
?>

<html>
    <head>
        <title>Remove Product</title>
    </head>
    <center>
    <body>
        <table width="70%">
            <tr>
            <td>
            <a href="http://localhost/Pharmacy24/view/admin/product/adminAddProduct.php">| Add Product |</a>
            <a href="http://localhost/Pharmacy24/view/admin/product/adminRemoveProduct.php">Remove Product |</a>        
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        include("../../../control/productTable.php");
                    ?>
                </td>
                <td>
        <form action="" method="POST">
                    <table>
                        <tr>
                            <td><h1><u>Remove Product</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Company:</h3></td>
            <td><input type="text" name="company" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminRemoveProduct">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $productRemoved;
                ?>
        </td>
        </tr>
    </table>
                    </form>
                </td>
            </tr>
        </table>
    </body>
    </center>
</html>