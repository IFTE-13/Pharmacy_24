<?php
   session_start();
   include("sellerTopBar.php"); 
?>

<html>
  <head>  
 
</head>
<body>
    <center> <u><h1>Seller Profile Update</h1></u>
    <table>
        <tr>
            <td><h3>Name: </h3></td>
            <td><?php
                    echo $_SESSION['name'];
                ?></td>
        </tr>
        <tr>
            <td><h3>Username: </h3></td>
            <td><?php
                    echo $_SESSION['username'];
                ?></td>
        </tr>
        <tr>
            <td><h3>Email: </h3></td>
            <td>
                <?php
                    echo $_SESSION['email'];
                ?>
            </td>
        </tr>
        <tr>
            <td><h3>Gender: </h3></td>
            <td>
            <?php
                    echo $_SESSION['gender'];
                ?>
            </td>
        </tr>
        <tr>
            <td><h3>Date of birth: </h3></td>
            <td>
            <?php
                    echo $_SESSION['dateofbirth'];
                ?>
            </td>
        </tr>
</table>
</body>
    </html>