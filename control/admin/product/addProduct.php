<?php
$productAdded = "";
    if(isset($_POST['addproduct'])){
        $productName = $_REQUEST['productName'];
        $price = $_REQUEST['price'];
        $company = $_REQUEST['company'];
        $quantity = $_REQUEST['quantity'];

        $filecontents=file_get_contents("http://localhost/Pharmacy24/data/productData.json",true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "productName" => $productName,
            "company" => $quantity,
            "price" => $price,
            "quantity" => $quantity 
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(empty($productName) || empty($quantity) || empty($price) || empty($quantity)){
                $userAdded = "Please fill up all the fields";
            }
            else{
                if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/productData.json',$jsonarr)){
                    $productAdded = "Product added";
                }
                else{
                    $productAdded = "Couldn't add product";
                }
            }
    }

    
?>