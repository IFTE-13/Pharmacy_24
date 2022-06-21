<?php
session_start();
$loginCheck = "";
$verifySupplier = file_get_contents("http://localhost/Pharmacy24/data/supplierRegestrationData.json",true);
$data = json_decode($verifySupplier);

if(isset($_POST["submission"])){
    if(empty($_REQUEST["NAME"])||empty($_REQUEST["PASSWORD"])){
        $loginCheck = "Field can not be empty ! ";
    }
    else
    {
        foreach($data as $key=>$value)
        {
            if($value->NAME ==$_REQUEST["NAME"] && $value->PASSWORD == $_REQUEST["PASSWORD"])
            {
                $_SESSION["NAME"] = $value-> NAME;
                $_SESSION["FARMNAME"] = $value->FARMNAME;
                $_SESSION["COMPANYID"]= $value->COMPANYID;
                $_SESSION["EMAILADDRESS"]= $value->EMAILADDRESS;

                header("Location: ../supplier/supplierProfile.php");
            }
            else{
                $loginCheck = 'No User found';
            }
        
        }
    }
    
}
?>