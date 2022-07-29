<?php
include('../navbar.php');
    
    include("../../control/checkcustomerlogin.php");
?>
<html>
<head>
    <title>Registrtion</title>
</head>
<body>
    <h1>Registraion<hr></h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td><h3>Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
            <td>
            <?php
                       // echo $nameError;
            ?>
            </td>
        </tr>
        <tr>
            <td><h3>Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
            <td>
            <?php
                       // echo $emailError;
            ?>
            </td>
        </tr>
        <tr>
            <td><h3>Username:</h3></td>
            <td><input type="text" name="username" id=""></td>
            <td>
            <?php
                        //echo $usernameError;
            ?>
            </td>
        </tr>
        <tr>
            <td><h3>Password:</h3></td>
            <td><input type="password" name="password" id=""></td>
            <td>
                <?php
                // echo $passwordError;
                ?>
</td>    
        </tr>
        <tr>
            <td><h3>Confirm Password:</h3></td>
            <td><input type="password" name="confirmPassword" id=""></td>
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
            <td>
            <?php
                 //echo $dateerror;
                ?>
            </td>
        </tr>
        <td><input type="submit" name="submission"></td>
        <td><input type="reset" name="Reset"></td>
        <td>
    <?php
    echo $registrationError;
    ?>
</td>

        <tr>
            <td><h3><small>Have an account?</small></h3></td>
            <td><a href="http://localhost/Pharmacy24/view/login.php">Login</a></td>
        </tr>
    </table>
    </form>

    <table border='1'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if(!empty($result) && $result->num_rows > 0){
                while($row = $results->fetch_assoc()) 
                echo "
                <tr>
                <td>{$row["name"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["username"]}</td>
                <td>{$row["password"]}</td>
                <td>{$row["confirmpassword"]}</td>
                <td>{$row["gender"]}</td>
                <td>{$row["dob"]}</td>
                </tr>
                ";
                    
                }
            

?>

            </tbody>
            </table>
       
</body>
</html>