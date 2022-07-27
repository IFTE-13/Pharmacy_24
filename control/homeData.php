<?php
    include('../control/Customer/addToCart.php');
    $count = 1;
?>
<!DOCTYPE html>
<html>

<body>
    <form action='' method='POST'>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Medicine Name</th>
                    <th>Company</th>
                    <th>Price ($)</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $load = file_get_contents("../Data/productData.json");
                        $product =  json_decode($load);

                        foreach($product as $key=>$productData){
                            
                            echo 
                            " 
                            <tr>
                                <td><p>$count</p></td>
                                <td><p name='productName'>$productData->productName</p></td>
                                <td><p>$productData->company</p></td>
                                <td><p>$productData->price</p></td>
                                <td><p>$productData->quantity</p></td>
                                ";
                                $count++; 
                            }?>
            </tbody>
    </form>
    </table>
</body>

</html>