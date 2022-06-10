<!DOCTYPE html>
<html>
    <body>
        <center>
            <table border='1'>
                <thead> 
                        <tr>
                            <th>Medicine Name</th>
                            <th>Company</th>
                            <th>Price ($)</th>
                            <th>Quantity</th>
                            <th>Details</th>
                            <th>Add to cart</th>
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
                                <td><p>$productData->productName</p></td>
                                <td><p>$productData->company</p></td>
                                <td><p>$productData->price</p></td>
                                <td><p>$productData->quantity</p></td>
                                <td><p>View</p></td>
                                <td>
                                    <center>
                                        <form action='../control/cart.php' method='POST'>
                                            <input type='submit' value='Add'></input>
                                        </form>
                                    </center>
                                </td>
                            </tr>
                            ";
                    }?>
                </tbody>
            </table>
        </center>
    </body>
</html>