<?php
   
    include("navbar.php");
	include('../../control/seller/checkSellerRegistration.php');
	//include('http://localhost/Pharmacy_24/control/checkSellerRegistration.php');
?>
<html>
<head>
    <title>Seller Registration Page</title>
</head>
<body>
<center><u><h1>Seller Registraion</u></h1> 
    <form action="" method="POST">
    <table>
        <tr>
            <td><h3>Seller Name:</h3></td>
            <td><input type="text" name="name" id=""></td>
            <td>
            <?php
                echo $nameError;
            ?>
            </td>
        </tr>
        <tr>
            <td><h3>Seller Email:</h3></td>
            <td><input type="email" name="email" id=""></td>
            <td>
            <?php
                echo $emailError;
            ?>
            </td>
        </tr>
        <tr>
            <td><h3>Seller Username:</h3></td>
            <td><input type="text" name="username" id=""></td>
            <td>
            <?php
                echo $usernameError;
            ?>
            </td>
        </tr>
        <tr>
            <td><h3>Seller Password:</h3></td>
            <td><input type="password" name="password" id=""></td>
            <td>
                <?php
                 echo $passwordError;
                ?>
           </td>    
        </tr>
        <tr>
            <td><h3>Confirm Password:</h3></td>
            <td><input type="password" name="confirmPassword" id=""></td>
        </tr>
        <tr>
            <td><h3>Seller Gender:</h3></td>
            <td>
                <input type="radio" name="gender" id="" value="male">
                <label for="gender">Male</label>
                <input type="radio" name="gender" id="" value="female">
                <label for="gender">Female</label>
            </td>
        </tr>
        <tr>
            <td><h3>Seller Date of Birth:</h3></td>
            <td><input type="date" name="dob" id=""></td>
        </tr>
        <td><input type="submit" name="submission">
<input type="reset" name="Reset"></td>
        <tr>
            <td><h3>or Have an account?</h3><a href="http://localhost/Pharmacy24/view/seller/sellerLogin.php">Login</a></td>
        </tr>
    </table>
    </form>
    
</body>
</html>