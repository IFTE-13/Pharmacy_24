<?php
    include("adminSideBar.php");
    include("../../control/admin/checkAdminLogin.php");
    if(empty($_SESSION["role"])){
        header("Location: http://localhost/Pharmacy24/view/admin/adminLogin.php");
    }
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
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
                            <td><h3><?php echo $name ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Username: </h3></td>
                            <td><h3><?php echo $username ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Email: </h3></td>
                            <td><h3><?php echo $email ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Date of Birth: </h3></td>
                            <td><h3><?php echo $dob ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Gender: </h3></td>
                            <td><h3><?php echo $gender ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Nationality: </h3></td>
                            <td><h3><?php echo $nationality ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Address: </h3></td>
                            <td><h3><?php echo $address ?></h3></td>
                        </tr>
                        <tr>
                            <td><h3>Phone: </h3></td>
                            <td><h3><?php echo $phone ?></h3></td>
                        </tr>
                    </table>
                </center>
                </td>
            </tr>
        </table>
    </body>
</html>