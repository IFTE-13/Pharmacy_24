<?php
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

if($username = "ifte"){
    echo "User found";
}
else{
    echo "No user found";
}

if(strlen($password) < 8){
    echo "Password must be atleast 8 charecter";
}
else{
    if($password = "123456789"){
        echo "Welcome back ". $username;
    }
    else{
        "Incorrect password";
    }
}
?>