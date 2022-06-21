<?php
    include("sellerTopBar.php");
    //include("../../control/admin/user/adminUserBlock.php");
    
?>

<html>
    <head>
        <title>Block</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                  
                    <h2><a href="">Complains|</a></h2>
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
                <input type="radio" name="status" id="" value="add">
                <label for="status">Add</label>
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