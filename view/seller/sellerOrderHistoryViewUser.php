

<html>
    <head>
        <title>Order Histories</title>
    </head>
    <body>
        <table>
            <tr>
            <td><h3>Name: </h3></td>
            <td><h3><?php
                    echo $_SESSION['name'];
                ?></h3></td>
                
            </tr>
            <tr>
                <td><h3>Email: </h3></td>
                <td><h3><?php
                    echo $_SESSION['email'];
                    ?></td></h3>
            </tr>
            <tr><td>
            <h3>Date(today) :</h3>
            </td>
            <td>
                    <h3><?php
                        echo date("Y-m-d");
                        ?></h3>
                </td>
        </tr>
        </table>
        <center>
            <hr>
            <h3><u>Orders</u></h3>
        <table border="1" width="50%">
                <thead> 
                        <tr>
                            <th>Transiction ID</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        $load = file_get_contents("http://localhost/Pharmacy_24/Data/customerHistory.json");
                        $product =  json_decode($load);
                        foreach($product as $key=>$productData){
                            echo 
                            " 
                            <center>
                            <tr>
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
