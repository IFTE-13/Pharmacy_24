<?php
    include("supplierTopBar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border ='1' width = 80% >
        <tr>
                            <th>Product Name </th>
                            <th>Product ID</th>
                            <th>Quantity </th>
                            <th>Manifacturer </th>
                            <th>Date</th>
                            <th>Avability</th>
                            
        </tr>  

        <tbody>
                    <?php
                        $load = file_get_contents("http://localhost/Pharmacy24/data/SupplierCart.json");
                        $user =  json_decode($load);

                        foreach($user as $key=>$userData){
                            
                            echo 
                            " 
                            <center>
                            <tr>
                                <td><p>$userData->pn</p></td>
                                <td><p>$userData->pi</p></td>
                                <td><p>$userData->qn</p></td>
                                
                                <td><p>$userData->m</p></td>
                                <td><p>$userData->date</p></td>
                                <td><p>$userData->avability</p></td>
                            </tr>
                            </center>
                            ";
                    }?>

        </table>
    </center>
    
</body>
</html>