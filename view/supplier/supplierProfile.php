<?php
    include("supplierTopBar.php");
    include("../../control/CheckSupplierLogin.php");
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
    <table width="100%">
        <tr>
            <td>
                <center>
                    <table>
                        <tr>
                            <td><h3>Name: </h3></td>
                            <td><h3><?php echo $_SESSION["NAME"]; ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Farmname: </h3></td>
                            <td><h3><?php echo $_SESSION["FARMNAME"] ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Company ID: </h3></td>
                            <td><h3><?php echo $_SESSION["COMPANYID"] ?></h3></td>
                        </tr>
                            <td><h3>Email: </h3></td>
                            <td><h3><?php echo $_SESSION["EMAILADDRESS"] ?></h3></td>
                        </tr>
                    </table> -->
                </center>
                </td>
            </tr>
        </table>
    </body>
</html>