<?php
    include('../customer/customertopbar.php');
    include("../../control/Customer/payment.php");
    $count = 1;
    $name = "Sanjida";
?>
<html>

<body>
    <center>
    <u><h1> Your Selected Products </h1></u>
   <form action="" method="POST">
   <table border="1" width = "50%">
        <thead>
        <tr>
            <th><h3>Serial</h3></th>
            <th><h3>Name</h3></th>
            <th><h3>Amount </h3></th>
        </tr>
        </thead>
        <tbody>
        <?php
                        $load = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/Data/cart.json');
                        $cart =  json_decode($load);

                        foreach($cart as $key=>$productData){
                            
                            echo 
                            " 
                            <tr>
                                <td><p>$count</p></td>
                                <td><p>$name</p></td>
                                <td><p name='productName'>$productData->amount</p></td>
                                ";
                                $count++; 
                            }?>
                </tbody>
            </tbody>
        </table>
        <br>
        <tr>
            <td><input type="submit" name="payment" value="Make Payment"></td>
            <td><?php   echo $paymentError  ?></td>
        </tr>
    </form>
    
    
</center>
</body>
    </html>