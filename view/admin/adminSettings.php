<?php
    include("../navbar.php");
    include("../../control/adminChangePassword.php");
?>
<html>
    <body>
       <center>
       <u><h2>Change Password</h2></u>
        <form action="" method="POST">
            <table>
                <tr>
                <td>
                   <h3>Current Password</h3>
                   
        
                </td>
                <td><input type="text" name="current" id=""> </td>
            </tr>
            <tr>
                <td><h3>New Password</h3></td>
                <td><input type="text" name="new" id=""></td>
            </tr>
        
        <tr>
            <td>
            <h3>Confirm Password</h3></td>
            <td><input type="text" name="confirm" id="">
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Change" name="changepassword"></td>
        </tr>
    <tr>
        <td>
            <?php
                echo $passwordChangeError;
            ?>
        </td>
    </tr>
    </table>
        </form>
       </center>
    </body>
</html>