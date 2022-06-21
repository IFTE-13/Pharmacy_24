<?php
    include("../adminSideBar.php");
    include("../../../control/admin/product/addProduct.php");
    
?>

<html>
    <body>
        <center>
        <table width="100%">
        <tr>
                    <a href="http://localhost/Pharmacy24/view/admin/product/adminAddProduct.php">| Add Product |</a>
                    <a href="http://localhost/Pharmacy24/view/admin/product/adminRemoveProduct.php">Remove Product |</a>
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
                            <td><h1><u>Add Product</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Product Name:</h3></td>
            <td><input type="text" name="productName" id=""></td>
        </tr>
        <tr>
            <td><h3>Price:</h3></td>
            <td><input type="number" name="price" id=""></td>
        </tr>
        <tr>
            <td><h3>Quantity:</h3></td>
            <td><input type="number" name="quantity" id=""></td>
        </tr>
        <tr>
            <td><h3>Company:</h3></td>
            <td><input type="text" name="company"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="addproduct">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $productAdded;
                ?>
        </td>
        </tr>
    </table>
                    </form>
                </td>
            </tr>
        </table>
        </center>
    </body>
</html>