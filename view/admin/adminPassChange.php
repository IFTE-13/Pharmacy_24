<?php
    include("adminSideBar.php");
    include("../../control/adminChangePassword.php");
?>
<html>
    <head>
        <title>
            Change Password
        </title>
    </head>
    <body>
       
       <table width="50%">
       <tr>
            <td>
            <a href="../admin/adminProfile.php">| Profile |</a>
            <a href="../admin/adminPassChange.php">Change Password |</a>
            </td>
        </tr>
        <tr>
            <td>
                <center>
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
</center>
        </tr>
       </table>
    </body>
</html>