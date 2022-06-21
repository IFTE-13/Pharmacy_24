<?php
    $userBlocked = "";
    $new_data = "";
    $verifySeller = file_get_contents("http://localhost/Pharmacy_24/data/userData.json", true);
    $data =  json_decode($verifySeller);

    if(isset($_POST["sellerBlockUser"])){
        if(empty($_REQUEST["name"])||empty($_REQUEST["email"])){
            $userBlocked = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                    if($value->name == $_REQUEST["name"] && $value->email == $_REQUEST["email"]){
                        $value->status = $_REQUEST["status"];
                        $new_data = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy_24/data/userData.json',$new_data)){
                            $userBlocked = "Successful";
                        }
                }
                else{
                    $userBlocked = "Sorry unsuccessful";
                }
            }
        }
    }
            

?>