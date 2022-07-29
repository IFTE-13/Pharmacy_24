<?php
    include("../../../control/admin/product/productData.php");
?>
<html>

<head>
    <title>
        Product
    </title>
    <link rel="stylesheet" href="../../../css/admin/adminProduct.css">
</head>

<body>
    <?php
            include("adminSideBar.php");
    ?>
    <div class="heading">
        <h1>Product Details</h1>
        <?php 
            echo $deleteProduct;
            echo $updateProduct;
        ?>
        <hr>
        <form action="" method="POST">
            <button class='update'>Delete all</button>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Price</th>
                            <th>quantity</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                 while($myrow = $datas->fetch_assoc()){
                    echo "
                       <tr>
                       <td name='name'>{$myrow['name']}</td>
                       <td name='company'>{$myrow['company']}</td>
                       <td name='price'>{$myrow['price']}</td>
                       <td name='quantity'>{$myrow['quantity']}</td>
                       <td>
                        <button class='picon update' type='submit' name='update'><i class='fas fa-pen'></i></button>
                        <button class='picon delete' type='submit' name='delete' value='{$myrow['name']}'><i class='fas fa-trash'></i></button>
                       </td>
                       </tr>
                       "; 
                } 
               ?>
                    </tbody>
            </div>
            </table>
        </form>
    </div>

</body>

</html>