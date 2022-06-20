<?php
session_start();
$paymentError="";
if(isset($_POST["payment"]))
{
    $paymentError="hello";
    $cusreg=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/customerHistory.json',true);
    $arrcus=json_decode($cusreg);
    $cusarray = array(
        "name"=>$_SESSION['name'],
        "email"=>$_SESSION['email'],
        "orderdate" => date("Y-m-d"),
        "amount" => "200",
        "trxid" => rand(0, 200)
    );
    
    $arrcus []=$cusarray;
    $jsonarr= json_encode($arrcus,JSON_PRETTY_PRINT);
    
    if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/customerHistory.json',$jsonarr))
        {
            header("location: ../Customer/orderHistory.php");
        }
        else
        {
            $paymentError = "Registration Error";
        }
    }
?>    