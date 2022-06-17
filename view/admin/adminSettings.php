<?php
    include("adminSideBar.php");
    include("../../control/adminChangePassword.php");
?>
<html>
    <body>
       <center>
       <table width="50%">
        <tr>
            <td>
            <u><h2>Change Password</h2></u>
        <form action="" method="POST">
            <table>
                <tr>
                <td>
                   <h3>Current Password</h3>
                   
        
                </td>
                <td><input type="password" name="current" id=""> </td>
            </tr>
            <tr>
                <td><h3>New Password</h3></td>
                <td><input type="password" name="new" id=""></td>
            </tr>
        
        <tr>
            <td>
            <h3>Confirm Password</h3></td>
            <td><input type="password" name="confirm" id="">
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
            </td>
        </tr>
       </table>
       </center>
    </body>
</html>