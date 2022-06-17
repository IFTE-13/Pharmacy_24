<?php
    include("adminSideBar.php");
    include("../../control/adminSupplierAdd.php");
    
?>

<html>
    <body>
        <table width="100%">
            <tr>
                
                <td>
                    <?php
                        include("../../control/supplierTable.php");
                    ?>
                </td>
                <td>
        <form action="" method="POST">
                    <table>
            <tr>
                            <td><h1><u>Add Supplier</u></h1></td>
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
            <td><input type="password" name="password" placeholder="00000000" disabled></td>
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
            <td><h3>Company</h3></td>
            <td><input type="text" name="company" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit" name="adminAddSupplier">
                <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td></td>
        <td>
        <?php
                    echo $supplierAdded;
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