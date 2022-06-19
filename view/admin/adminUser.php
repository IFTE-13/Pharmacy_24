<?php
    include("adminSideBar.php");
    include("../../control/admin/user/adminUserAdd.php");
    
?>

<html>
    <head>
        <title>Add user</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <a href="../admin/adminUser.php">| Add User |</a>
                    <a href="../admin/adminRemoveUser.php">Remove User</a>
                    <a href="../admin/adminBlockUser.php">| Un/Block User |</a>
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
                            <td><h1><u>Add User</u></h1></td>
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
            <td><h3>Username:</h3></td>
            <td><input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td><h3>Password:</h3></td>
            <td><input type="password" name="password" id="" placeholder="00000000" disabled></td>
        </tr>
        <tr>
            <td><h3>Gender:</h3></td>
            <td>
                <input type="radio" name="gender" id="" value="male">
                <label for="gender">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="gender">Female</label>
            </td>
        </tr>
        <tr>
            <td><h3>Date of Birth:</h3></td>
            <td><input type="date" name="dob" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminAddUser">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $userAdded;
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