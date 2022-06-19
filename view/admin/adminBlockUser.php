<?php
    include("adminSideBar.php");
    include("../../control/admin/user/adminUserBlock.php");
    
?>

<html>
    <head>
        <title>Block/Unblock User</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <a href="../admin/adminUser.php">| Add User |</a>
                    <a href="../admin/adminRemoveUser.php">Remove User |</a>
                    <a href="../admin/adminBlockUser.php">Un/Block User |</a>
                    <a href="../admin/complains.php">Complains |</a>
                    <a href="../admin/transactionHistory.php">Transactions |</a>
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
                            <td><h1><u>Block User</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <td><h3>Status:</h3></td>
            <td>
                <input type="radio" name="status" id="" value="block">
                <label for="status">Block</label>
                <input type="radio" name="status" id="" value="unblock">
                <label for="status">Unblock</label>
            </td>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminBlockUser">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $userBlocked;
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