<?php
    include("adminSideBar.php");
    include("../../control/admin/adminupdateProfile.php");
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <form action="" method="POST">
    <table width="100%">
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
                    <table>
                        <tr>
                            <td><h3>Name: </h3></td>
                            <td><h3><input type="text" name="name" placeholder=<?php echo $_SESSION["name"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Username: </h3></td>
                            <td><h3><input type="text" name="username" placeholder=<?php echo $_SESSION["username"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Email: </h3></td>
                            <td><h3><input type="text" name="email" placeholder=<?php echo $_SESSION["email"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Date of Birth: </h3></td>
                            <td><h3><input type="date" name="dateofbirth" value=<?php echo $_SESSION["dateofbirth"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Gender: </h3></td>
                            <td><h3><input type="text" name="gender" placeholder=<?php echo $_SESSION["gender"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Nationality: </h3></td>
                            <td><h3><input type="text" name="nationality" placeholder=<?php echo $_SESSION["nationality"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Address: </h3></td>
                            <td><h3><input type="text" name="address" placeholder=<?php echo $_SESSION["address"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Phone: </h3></td>
                            <td><h3><input type="text" name="phone" placeholder=<?php echo $_SESSION["phone"] ?>></h3></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Update" name="adminUpdateProfile"></td>
                            <td>
                                <?php
                                     echo $adminUpdateProfileError;
                                ?>
                            </td>
                        </tr>
                    </table>
                </center>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>