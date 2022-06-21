<!DOCTYPE html>
<html>
    <body>
        <form action='' method='POST'>
            <table border='1' width="100%">
                <thead> 
                        <tr>
                            <th>Medicine Name</th>
                            <th>Company</th>
                            <th>Price ($)</th>
                            <th>Quantity</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        $load = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/productData.json');
                        $product =  json_decode($load);

                        foreach($product as $key=>$productData){
                            
                            echo 
                            " 
                            <tr>
                                <td><p name='productName'>$productData->productName</p></td>
                                <td><p>$productData->company</p></td>
                                <td><p>$productData->price</p></td>
                                <td><p>$productData->quantity</p></td>
                                ";
                            }?>
                </tbody>
            </form>
            </table>
    </body>
</html>