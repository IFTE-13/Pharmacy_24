<?php
    $sellerRemoved = "";
    $new_datas = "";
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/sellerData.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["adminRemoveSeller"])){
        if(empty($_REQUEST["name"])||empty($_REQUEST["email"])){
            $sellerRemoved = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                    if($value->name == $_REQUEST["name"] && $value->email == $_REQUEST["email"]){
                        unset($data[$key]);
                        $new_datas = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/sellerData.json',$new_datas)){
                            $sellerRemoved = "User removed";
                        }
                }
                else{
                    $sellerRemoved = "Could not remove user";
                }
            }
        }
    }
            

?>