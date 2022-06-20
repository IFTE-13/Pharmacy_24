<?php
$nameError = "";
$companyIDerror = "";
$emailError = "";
$passwordError = " ";

if(isset($_POST["submit"]))
{
    $name = $_REQUEST["NAME"];
    $FarmName = $_REQUEST["FARMNAME"];
    $companyID = $_REQUEST["COMPANYID"];
    $email = $_REQUEST["EMAILADDRESS"];
    $password = $_REQUEST["PASSWORD"];

    if(empty($name))
    {
        $nameError = " NAME IS EMPTY ";
    }
    if(empty($FarmName))
    {
        $FarmNameError = " Your Farm Name Is Empty ";
    }
    if(empty($companyID))
    {
        $companyIDerror =" Your id is not filled up correctly or wrong  ";
    }
    if(empty($email))
    {
        $emailError = " Email can not be empty ";
    }
    if(empty($password))
    {
        $passwordError = "Password field is empty ";
    }

    $SupplierGetContent = file_get_contents("../../Data/supplierRegestrationData.json",true);
    $arrsup = json_decode($SupplierGetContent);
    $regsup = array (
        "NAME" => $name,
        "FARMNAME" =>$FarmName,
        "COMPANYID" =>$companyID,
        "EMAILADDRESS" =>$email,
        "PASSWORD" =>$password
    );

    $arrsup []= $regsup;
    $jsonarr= json_encode($arrsup,JSON_PRETTY_PRINT); // Not done
    
    if(empty($name) || empty($FarmName) || empty($companyID) || empty($email) || empty($password))

 {
    echo "Registrion error. Please fill up properly";
 }
 else {
    if(file_put_contents("../../Data/supplierRegestrationData.json",$jsonarr))
    {
        header("location: http://localhost/Pharmacy24/view/supplier/CommonLoginSupplier.php");
    }
    else 
    {
        echo "Regestration is not completed or wrong information ";
    }
 }
}


?>