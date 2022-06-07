<?php
    $load = file_get_contents("../control/productData.json");
    $product =  json_decode($load);

    foreach($product as $key=>$productData){
        echo 
        "
        <table>
            <tr>
            <td><p>$productData->productName</p></td>
            <td><p>$productData->company</p></td>
            <td><p>$productData->price</p></td>
            <td><p>$productData->quantity</p></td>
            </tr>
        </table>
        ";
    }
?>