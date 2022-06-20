<?php
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
            if($value->NAME ==$_REQUEST["NAME"] && $value->PASSWORD ==$_REQUEST["PASSWORD"])
            {
                // "NAME" = $value-> NAME;
                // "FARMNAME" = $value->FARMNAME;
                // "COMPANY ID"= $value->COMPANYID;
                // "EMAIL ADDRESS"= $value->EMAILADDRESS;
                // "PASSWORD"= $value->PASSWORD;

                echo "Hello";
            }
            else{
                $loginCheck = 'No User found';
                echo "No User Found";
            }
        
        }
    }
    
}
?>