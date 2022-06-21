<?php
   session_start();
   include("sellerTopBar.php"); 
?>

<html>
  <head>  
 
</head>
<body>
    <center> <u><h1>Seller Profile</h1></u>
    <table>
        <tr>
            <td><h3>Name: </h3></td>
            <td><h3><?php
                    echo $_SESSION['name'];
                ?></td></h3>
        </tr>
        <tr>
            <td><h3>Username: </h3></td>
            <td><h3><?php
                    echo $_SESSION['username'];
                ?></td></h3>
        </tr>
        <tr>
            <td><h3>Email: </h3></td>
            <td>
                <h3><?php
                    echo $_SESSION['email'];
                ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Gender: </h3></td>
            <td>
            <h3><?php
                    echo $_SESSION['gender'];
                ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Date of birth: </h3></td>
            <td>
            <h3><?php
                    echo $_SESSION['dateofbirth'];
                ?></h3>
            </td>
        </tr>
</table>
</body>
    </html>