<?php
    include("../../control/checkAdminLogin.php");
?>

<html>
    <body>
    <h3><?php echo "Welcome back, " . $_SESSION["username"]; ?></h3>
        <table width="80%">
            <tr>
                <td>
                    <center>
                    <?php
                        include("adminSideBar.php");
                    ?>
                    </center>
                </td>
                <td>
                    <table>
                        <tr>
                            <td><h3>Name: </h3></td>
                            <td><h3><?php echo $name ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Username: </h3></td>
                            <td><h3><?php echo $_SESSION["username"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Email: </h3></td>
                            <td><h3></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Date of Birth: </h3></td>
                            <td><h3></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Gender: </h3></td>
                            <td><h3></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Nationality: </h3></td>
                            <td><h3></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Address: </h3></td>
                            <td><h3></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Phone: </h3></td>
                            <td><h3></h3></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>