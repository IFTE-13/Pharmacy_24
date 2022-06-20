<?php
include("../supplier/RegestrationForJson.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Regestration </title>
</head>
<body>
    <h1> Supplier Regestration </h1>
<form method="POST">
    <table>
        <tr>
            <td><h3>    NAME      : </h3></td>
            <td><input type="text" name ="NAME"></td>
        </tr>
        <tr>
            <td><h3>  FARM NAME   : </h3></td>
            <td><input type="text" name ="FARMNAME"></td>
        </tr>
        <tr>
            <td><h3>  COMPANY ID  :</h3></td>
            <td><input type="number" name ="COMPANYID"></td>
        </tr>
        <tr>
            <td><h3> EMAIL ADDRESS : </h3></td>
            <td><input type="text" name ="EMAILADDRESS"></td>
        </tr>
        <tr>
            <td><h3>    PASSWORD   :</h3></td>
            <td><input type="password" name ="PASSWORD"></td>
        </tr>
        <tr>
            <td>REMEMBER ME<input type="checkbox" name ="PASSWORD" value = " rememberme "></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="submit"></td>
        </tr>
        <tr>
            <td><h2>ALRAEDY HAVE AN ACCOUNT !</h2></td>
            <td><h2><a href="http://localhost/Pharmacy24/view/supplier/CommonLogin.php">LOGIN</a></h3></td>
        </tr>
       
        
    </table>
</form>
</body>
</html>