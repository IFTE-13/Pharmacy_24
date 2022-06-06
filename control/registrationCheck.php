<?php
    $registraionForm = array(
        'name' => $_REQUEST['name'],
        'email' => $_REQUEST['email'],
        'username' => $_REQUEST['username'],
        'password' => $_REQUEST['password'],
        'dateofbirth' => $_REQUEST['dob'],
        'gender' => $_REQUEST['gender']

    );

    $confirmPassword = $_REQUEST['confirmPassword'];
    if($_REQUEST['password'] < 8){
        echo "Password must be 8 charecter";
    }
    else{
        if($_REQUEST['password'] == $confirmPassword){
            $jsondata = json_encode($registraionForm, JSON_PRETTY_PRINT);
            if(file_put_contents("data.json", $jsondata)){
                header("Location: http://localhost/Pharmacy24/view/login.php");
                exit(); }
            else{ echo "no data save"; }
        }
        else{
            echo "Password didn't matched";
        }
    }

    
?>