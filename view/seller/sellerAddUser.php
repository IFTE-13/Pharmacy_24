<?php
    include("sellerTopBar.php");
    include("../../control/checkSellerAddCustomer.php");   
?>

<html>
    <head>
        <title>Add Customer</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    
                    <a href="../seller/sellerBlockUser.php">| Block Customer |</a>
                    <a href="../seller/sellerComplain.php">Complains |</a>
          
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
                            <td><h1><u>Add Customer</u></h1></td>
                        </tr>
        <tr>
            <td><h3>Customer Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Customer Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td><h3>Customer Username:</h3></td>
            <td><input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td><h3>Customer Password:</h3></td>
            <td><input type="password" name="password" id="" placeholder="12345678" disabled></td>
        </tr>
        <tr>
            <td><h3>Customer Gender:</h3></td>
            <td>
                <input type="radio" name="gender" id="" value="male">
                <label for="gender">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="gender">Female</label>
            </td>
        </tr>
        <tr>
            <td><h3>Customer Date of Birth:</h3></td>
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
                    echo $CustomerAdded;
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