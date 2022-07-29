<?php
    session_start();
    include("customertopbar.php"); 
    include("../../control/checkcustomerlogin.php");
    if(empty($_SESSION["customer"])){
        header("Location: ../customer/customerlogin.php");
    }
?>

<html>
  <head>  
 
</head>
<body>
   <center>
   <u><h1>Profile</h1></u>
    <table>
        <tr>
            <td><h3>Name: </h3></td>
            <td><h3><?php
                    echo $_SESSION['name'];
                ?></h3></td>
        </tr>
        <tr>
            <td><h3>Username: </h3></td>
            <td><h3><?php
                    echo $_SESSION['username'];
                ?></h3></td>
        </tr>
        <tr>
            <td><h3>Email: </h3></td>
            <td>
                <h3><?php
                    echo $_SESSION['email'];
                ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Gender: </h3></td>
            <td>
            <h3><?php
                    echo $_SESSION['gender'];
                ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Date of birth: </h3></td>
            <td>
<h3>            <?php
                    echo $_SESSION['dateofbirth'];
                ?></h3>
            </td>
        </tr>
</table>
   </center>

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