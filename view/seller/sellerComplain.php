<?php
   
   include("sellerTopBar.php"); 
?>

<html>
  <head>  
 
</head>
<body>
    <center> <u><h1> Complain Submission Form </h1></u>
    <table>
        <tr>
            <td><h3>Name: </h3></td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td><h3>Email: </h3><M>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td><h3>Submitted by:</h3></td>
            <td>
                <input type="radio" name="type" id=""value="Customer">
                <label for="Customer">Customer</label>
                <input type="radio" name="type" id=""value="Seller">
                <label for="Customer">Seller</label>              
        </tr>
        </tr>
        <tr>
            <td><h3>Subject: </h3></td>
            <td><input type="text" name="subject" id=""></td>
        </tr>
        <tr>
            <td><h3>Description:</h3></td> 
            <td><textarea id="w3review" name="name" rows="9" cols="30"></textarea>
			
             <br><br>
			 <input type="submit" value="Submit" name="">
            
        </tr> 

</table>
</body>
    </html>