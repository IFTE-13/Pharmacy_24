<?php
    include("customertopbar.php");
    include("../../control/Customer/customerchangepass.php");
    if(empty($_SESSION["customer"])){
        header("Location: ../customer/customerlogin.php");
    }
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
                    <a href="../customer/customerdeleteaccount.php">Delete Account</a>
                   
                </td>
</tr>    
<form action="" method="POST">
                    <table>
                        <tr>
                            <td><h1><u>Change Your Password Here</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Old Password:</h3></td>
            <td><input type="password" name="oldpass" id=""></td>
        </tr>
        <tr>
            <td><h3>New Password:</h3></td>
            <td><input type="password" name="newpass" id=""></td>
        </tr>
        <tr>
            <td><h3>Confirm new password:</h3></td>
            <td><input type="password" name="confirmnewpass" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="customerpasscng">
                <?php
                    echo $passwordChangeError;
                ?>
            </td>
        </tr>
        </table>
    </body>
</html>