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
            <a href="../admin/adminUpdateProfile.php">Update Profile |</a>
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
                <td><h3><input type="password" name="current" id=""></h3> </td>
            </tr>
            <tr>
                <td><h3>New Password</h3></td>
                <td><h3><input type="password" name="new" id=""></h3></td>
            </tr>
        
        <tr>
            <td>
            <h3>Confirm Password</h3></td>
            <td><h3><input type="password" name="confirm" id=""></h3>
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