<?php
    $productRemoved = "";
    $new_datas = "";
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/productData.json", true);
    $data =  json_decode($verifyAdmin);

    if(isset($_POST["adminRemoveProduct"])){
        if(empty($_REQUEST["name"])||empty($_REQUEST["company"])){
            $sellerRemoved = 'None of the fields cannot be empty';
        }
        else{
            foreach($data as $key=>$value){
                    if($value->productName == $_REQUEST["name"] && $value->company == $_REQUEST["company"]){
                        unset($data[$key]);
                        $new_datas = json_encode($data,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/productData.json',$new_datas)){
                            $productRemoved = "Product removed";
                        }
                }
                else{
                    $productRemoved = "Could not remove Product";
                }
            }
        }
    }
            

?>