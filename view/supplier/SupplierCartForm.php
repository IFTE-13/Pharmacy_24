<?php
include("../supplier/supplierTopBar.php");
include("../../control/CheckSupplierCart.php");
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

<form action="" method = "POST">
    <table>
    <td><h1> PRODUCTS </h1></td>
    <tr>
        <td><h3>PRODUCT NAME:</h3></td>
        <td><input type="text" name ="pn"></td>
    </tr>
    <tr>
        <td><h3>PRODUCT ID :<h3></td>
        <td><input type="number" name="pi"></td>
    </tr>
    <tr>
        <td><h3>QUANTITY :</h3></td>
        <td><input type="27" name ="qn"></td>
    </tr>
    <tr>
        <td><h3> MANIFACTURER :</h3></td>
        <td><input type="text" name ="m"></td>
    </tr>
    <tr>
        <td><h3> DATE :</h3></td>
        <td><input type="number" name ="date"></td>
    </tr>
    <tr>
        <td><h3>AVABILITY :</h3></td>
        <td><input type="text" name ="avability"></td>
    </tr>

    <tr>
            <td><input type="submit" value="submit" name="submission"></td>
    </tr>
    </table>


</form>
    
</body>
</html>