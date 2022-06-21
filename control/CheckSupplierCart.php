<?php

$verify = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/Data/SupplierCart.json',true);
$data = json_decode($verify);

if(isset($_POST["submission"]))
{
    $ProductName=$_REQUEST["pn"];
    $ProductId = $_REQUEST["pi"];
    $Quantity=$_REQUEST["qn"];
    $Manifacturer=$_REQUEST["m"];
    $Date=$_REQUEST["date"];
    $Avability=$_REQUEST["avability"];

    $Suparray = array(
        "pn"=>$ProductName,
        "pi"=>$ProductId,
        "qn"=>$Quantity,
        "m"=>$Manifacturer,
        "date"=>$Date,
        "avability"=>$Avability,);

    $data []=$Suparray;
    $jsonarr= json_encode($data,JSON_PRETTY_PRINT);

    
    if(empty($ProductName) || empty($ProductId) || empty($Quantity) || empty($Manifacturer) || empty($Date)||empty($Avability))
     
 {
    echo "Empty Field. Please fill up properly";
 }
  else
  {
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/SupplierCart.json',$jsonarr);
    header("Location: http://localhost/Pharmacy24/view/supplier/SupplierCart.php");
  }


    //file_get_contents("http://localhost/Pharmacy24/control/data/SupplierCart.json");

    //file_put_contents("");
}


?>