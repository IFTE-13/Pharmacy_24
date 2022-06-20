<?php
    include("../../control/CheckSupplierLogin.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <table>
    <td><h1>LOGIN</h1></td>
    <tr>
        <td><h3>NAME :</h3></td>
        <td><input type="text" name ="NAME"></td>
    </tr>
    <tr>
        <td><h3>PASSWORD :<h3></td>
        <td><input type="password" name="PASSWORD"></td>
    </tr>
    <tr>
            <td><input type="submit" value="submit" name="submission"></td>
    </tr>
    <tr>
        <td><h2>DONT HAVE ANY ACCOUT ! </h2></td>
        <td><h3><a href ="http://localhost/Pharmacy24/view/supplier/RegestrationSupplier.php">CREATE ACCOUNT</a></h3></td>
    </tr>
    </table>
    </form>
</body>
</html>