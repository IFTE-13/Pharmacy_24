<?php
    include('../admin/adminSideBar.php');
?>
<html>
    <head>
        <title>Transactions</title>
    </head>
    <body>
    <a href="../admin/adminUser.php">| Add User |</a>
    <a href="../admin/adminRemoveUser.php">Remove User |</a>
    <a href="../admin/adminBlockUser.php"> Un/Block User |</a>
    <a href="../admin/complains.php">Complains |</a>
    <a href="../admin/transactionHistory.php">Transactions |</a>
        <center>
            <h2><u>Transactions</u></h2>
        <table border="1" width="50%">
                <thead> 
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Transiction ID</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        $load = file_get_contents("http://localhost/Pharmacy24/Data/customerHistory.json");
                        $product =  json_decode($load);

                        foreach($product as $key=>$productData){
                            
                            echo 
                            " 
                            <center>
                            <tr>
                                <td><p>$productData->name</p></td>
                                <td><p>$productData->email</p></td>
                                <td><p>$productData->trxid</p></td>
                                <td><p>$productData->orderdate</p></td>
                                <td><p>$productData->amount</p></td>
                            </tr>
                            </center>
                            ";
                    }?>
                </tbody>
        </table>
        </center>
</body>
</html>
