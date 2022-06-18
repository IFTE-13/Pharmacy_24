<?php
    include("customertopbar.php");  
?>

<html>
  <head>  
 
</head>
<body>
    <u><h1>Profile</h1></u>
    <table>
        <tr>
            <td><h3>Name: </h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email: </h3></td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td><h3>Gender: </h3></td>
            <td><input type="radio" name="male" id="">Male</td>
            <td><input type="radio" name="female" id="">Female</td>
        </tr>
        <tr>
            <td><h3>Date of birth: </h3></td>
            <td><input type="date" name="dateofbirth" id=""></td>
        </tr>
        <tr>
            <td><h3>Age: </h3></td>
            <td><input type="number" name="age" id=""></td>
        </tr>
        
        <tr>
            <td><h3>Nationality</h3></td>
            <td><input type="text" name="nationality" id=""></td>
        </tr>
</table>
</body>
    </html>