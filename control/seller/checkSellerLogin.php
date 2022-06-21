<?php
    session_start();
    $sellerloginError = "";
    $email = "";
    
    $checksellerinfo = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/sellerData.json', true);
    $data =  json_decode($checksellerinfo);

    if(isset($_POST["submit"])){
        if(empty($_REQUEST["username"])||empty($_REQUEST["password"])){
            $sellerloginError = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                if($value->username == $_REQUEST["username"] && $value->password == $_REQUEST["password"]){
                    $_SESSION["name"] = $value->name;
                    $_SESSION["seller"] = "seller";
                    $_SESSION["email"] = $value->email;
                    $_SESSION["username"] = $value->username;
                    $_SESSION["dateofbirth"] = $value->dateofbirth;
                    $_SESSION["gender"] = $value->gender;
                    header("Location: http://localhost/Pharmacy24/view/seller/sellerProfile.php");
                }
                else{
                    $sellerloginError = 'Sorry No User found';
                }
            }
        }
}
?>