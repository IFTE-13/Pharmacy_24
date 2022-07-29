<?php
include($_SERVER['DOCUMENT_ROOT'] ."/Pharmacy24/model/customerdb.php");
session_start();
$result="";
$registrationError= "";
  if(isset($_POST["submit"])){
            if(empty($_REQUEST["email"])){
            $loginError = 'Fill up email';
        }
        elseif(empty($_REQUEST["password"])){
            $loginError = 'Please input your password';
        }
        else{
            $conn= new db();
            $connectionObject=$conn->openConn();
            $result=$conn->showAll($connectionObject);
            if($result->num_rows > 0){
                    $results=$result;
             }
    if(isset($_POST['submission'])){
    $conn = new db();
    $connectionObject = $conn->openConn();

    $registerUser = $conn->checkCustomer($connectionObject, "customertable", $_REQUEST["name"] , $_REQUEST["email"] ,$_REQUEST["username"] ,
    $_REQUEST["password"] ,$_REQUEST["confirmpassword"] ,$_REQUEST["gender"] , $_REQUEST["dob"]);

    
    header("Location: http://localhost/Pharmacy24/view/customer/customerprofile.php");
    } 
    else{
        $registrationError = "No user found";
    }
   

}
        

$conn->closeConnection($connectionObject);



  }


?>