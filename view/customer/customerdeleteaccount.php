<?php
    session_start();
    include("customertopbar.php");
    include("../../control/Customer/deleteaccount.php");
    if(empty($_SESSION["customer"])){
        header("Location: ../customer/customerlogin.php");
    }
?>

<html>
    <head>
        <title>Delete account</title>
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
    <center>
                    <table>
                        <tr>
                            <td><h1><u>Delete your account</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id="" placeholder = <?php echo $_SESSION["name"] ?> disabled></td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id="" placeholder = <?php echo $_SESSION["email"] ?> disabled></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="deletecusacc">
            </td>
            <td>
                <?php
                    echo $deleteError;
                ?>
            </td>
        </tr>
    </table>
</center>
</form>
    </body>
</html>