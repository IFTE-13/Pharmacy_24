<?php
    include("customertopbar.php");
?>

<html>
    <head>
        
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <a href="../customer/customerchangepassword.php">Change Password</a>
                    <a href="../customer/customercomplain.php">Complain</a>
                   
                </td>
</tr>    
<form action="" method="POST">
                    <table>
                        <tr>
                            <td><h1><u>Let us know about your complain</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td><h3>Complain:</h3></td>
            <td><input type="text" name="complain" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="customercomplain">
            </td>
        </tr>
        </table>
    </body>
</html>