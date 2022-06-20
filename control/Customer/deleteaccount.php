<?php
    $deleteError = "";
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/userData.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["deletecusacc"])){
            foreach($data as $key=>$value){
                    if($value->name == $_SESSION["name"] && $value->email == $_SESSION["email"]){
                        unset($data[$key]);
                        $new_datas = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/userData.json',$new_datas)){
                            header("Location: http://localhost/Pharmacy24/control/logout.php");
                        }
                }
                else{
                    $deleteError = "Could not delete account";
                }
            }
    }
            

?>