<?php
    $supplierRemoved = "";
    $new_datas = "";
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/view/admin/supplierData.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["adminRemoveSupplier"])){
        if(empty($_REQUEST["name"])||empty($_REQUEST["email"])){
            $userRemoved = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                    if($value->name == $_REQUEST["name"] && $value->email == $_REQUEST["email"]){
                        unset($data[$key]);
                        $new_datas = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents("supplierData.json",$new_datas)){
                            $supplierRemoved = "User removed";
                        }
                }
                else{
                    $supplierRemoved = "Could not remove user";
                }
            }
        }
    }
            

?>