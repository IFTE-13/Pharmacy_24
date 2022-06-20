<?php
    session_start();
    $customerloginError = "";
    $email = "";
    
    $checkcustomerinfo = file_get_contents("http://localhost/Pharmacy24/data/userData.json", true);
    $data =  json_decode($checkcustomerinfo);

    if(isset($_POST["submit"])){
        if(empty($_REQUEST["email"])||empty($_REQUEST["password"])){
            $customerloginError = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                if($value->email == $_REQUEST["email"] && $value->password == $_REQUEST["password"]){
                    $_SESSION["name"] = $value->name;
                    $_SESSION["customer"] = "customer";
                    $_SESSION["email"] = $value->email;
                    $_SESSION["username"] = $value->username;
                    $_SESSION["dateofbirth"] = $value->dateofbirth;
                    $_SESSION["gender"] = $value->gender;
                    header("Location: http://localhost/Pharmacy24/view/home.php");
                }
                else{
                    $customerloginError = 'No User found';
                }
            }
        }
}
?>