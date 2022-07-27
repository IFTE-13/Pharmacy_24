<?php
    session_start();
    $loginError = "";
    
    $verifyAdmin = file_get_contents("http://localhost/Pharmacy24/data/adminData.json", true);
        $data =  json_decode($verifyAdmin);
        
        if(isset($_POST["submit"])){
            if(empty($_REQUEST["username"])){
            $loginError = 'Username cannot be empty';
        }
        elseif(empty($_REQUEST["password"])){
            $loginError = 'Please input your password';
        }
        else{
            if(strlen($_REQUEST["password"]) < 6){
                $loginError = 'Password must be atleast 6 charecter';
            }
            else{
                foreach($data as $key=>$value){
                    if($value->username == $_REQUEST["username"] && $value->password == $_REQUEST["password"]){
                        $_SESSION["username"] = $_REQUEST["username"];
                        $_SESSION["role"] = "admin";
                        $_SESSION["name"] = $value->name;
                        $_SESSION["email"] = $value->email;
                        $_SESSION["dateofbirth"] = $value->dateofbirth;
                        $_SESSION["gender"] = $value->gender;
                        $_SESSION["nationality"] = $value->nationality;
                        $_SESSION["address"] = $value->address;
                        $_SESSION["phone"] = $value->phone;
    
                        header("Location: http://localhost/Pharmacy24/view/admin/adminProfile.php");
                    }
                    else{
                        $loginError = 'No User found';
                    }
            }
            }
        }
}
?>