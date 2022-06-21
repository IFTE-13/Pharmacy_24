<?php
$usernameError="";
$passwordError="";
$nameError="";
$emailError="";
if(isset($_POST["submission"]))
{
    $username=$_REQUEST["username"];

    $name=$_REQUEST["name"];
    $email = $_REQUEST["email"];
    $password=$_REQUEST["password"];
    $dob=$_REQUEST["dob"];  
    if(empty($name))
    {
        $nameError= "Name is empty";
    }
    if(empty($email))
    {
        $emailError= "Email should not be empty";
    }
    if(empty($username))
    {
        $usernameError= "the username is empty"."<br>";
    }   
    if(strlen($password) <6)
    {
        $passwordError= "Password should be more than 6 characters" ."<br>";
    }   
    $gender="";
    if(empty($gender))
    {
        $gender= "Must select gender"."<br>";
    }

    $cusreg=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy_24/data/sellerData.json',true);
    $arrcus=json_decode($cusreg);
    $cusarray = array(
        "name"=>$name,
        "email"=>$email,
        "username"=>$username,
        "password"=>$password,
        "dateofbirth"=>$dob,
        "gender"=>$gender,
        "status"=>"unblock"
    );
	
    $arrcus []=$cusarray;
    $jsonarr= json_encode($arrcus,JSON_PRETTY_PRINT);
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($dob))

 {
    echo "Registrion error. Please fill up properly";
 }
       
 else 
 {
    if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy_24/data/sellerData.json',$jsonarr))
        {
            header("location: ../seller/sellerLogin.php");
        }
        else
        {
            echo "Sorry Registration Error";
        }
    }
   
}
?>    