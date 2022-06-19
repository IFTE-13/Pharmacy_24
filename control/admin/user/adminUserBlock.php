<?php
    $userBlocked = "";
    $new_data = "";
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/userData.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["adminBlockUser"])){
        if(empty($_REQUEST["name"])||empty($_REQUEST["email"])){
            $userBlocked = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                    if($value->name == $_REQUEST["name"] && $value->email == $_REQUEST["email"]){
                        $value->status = $_REQUEST["status"];
                        $new_data = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/userData.json',$new_data)){
                            $userBlocked = "Successful";
                        }
                }
                else{
                    $userBlocked = "Operation unsuccessful";
                }
            }
        }
    }
            

?>