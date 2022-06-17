<?php
    include("adminSideBar.php");
    include("../../control/checkAdminLogin.php");
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <h3><?php echo "Welcome back, " . $_SESSION["username"]; ?></h3>
    <table width="100%">
        <tr>
            <td>
                <center>
                    <table>
                        <tr>
                            <td><h3>Name: </h3></td>
                            <td><h3><?php echo $_SESSION["name"]; ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Username: </h3></td>
                            <td><h3><?php echo $_SESSION["username"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Email: </h3></td>
                            <td><h3><?php echo $_SESSION["email"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Date of Birth: </h3></td>
                            <td><h3><?php echo $_SESSION["dateofbirth"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Gender: </h3></td>
                            <td><h3><?php echo $_SESSION["gender"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Nationality: </h3></td>
                            <td><h3><?php echo $_SESSION["nationality"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Address: </h3></td>
                            <td><h3><?php echo $_SESSION["address"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Phone: </h3></td>
                            <td><h3><?php echo $_SESSION["phone"] ?></h3></td>
                        </tr>
                    </table>
                </center>
                </td>
            </tr>
        </table>
    </body>
</html>