<?php
    include("adminSideBar.php");
    include("../../control/admin/user/adminUserRemove.php");
    
?>

<html>
    <head>
        <title>Remove User</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <a href="../admin/adminUser.php">| Add User |</a>
                    <a href="../admin/adminRemoveUser.php">Remove User |</a>
                    <a href="../admin/adminBlockUser.php">Block User |</a>
                    <a href="">Complains |</a>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        include("../../control/customerTable.php");
                    ?>
                </td>
                <td>
        <form action="" method="POST">
                    <table>
                        <tr>
                            <td><h1><u>Remove User</u></h1></td>
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
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminRemoveUser">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $userRemoved;
                ?>
        </td>
        </tr>
    </table>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>