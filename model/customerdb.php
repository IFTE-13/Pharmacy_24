<?php
 class db{
    
    function openConn(){
        $dbservername="localhost";
        $dbemail="root";
        $password="";
        $dbname="pharmacy24";
        $conn=new mysqli($dbservername, $dbemail, $password, $dbname);
        if($conn->connect_error)
        {
            echo "can't creat con obj";
        }
        return $conn;
    }

    function customerLogin($conn,$table,$email,$password){
        $result = $conn->query("SELECT * FROM ". $table." WHERE email='". $email."' AND password='". $password."'");
        return $result;
    }
    function registrationCustomer($conn, $table, $name,$email,$username,$password,$confirmPassword,$gender,$dob){
        $sqlQuery = "INSERT INTO $table (Name, Email, Username, Password, ConfirmPassword, Gender, DOB) VALUES('$name', '$email', '$username', '$password', '$confirmPassword', '$gender', '$dob')";
        $result = $conn->query($sqlQuery);
        return $result;

    }
    function showAll($conn){
        $sqlQuery="SELECT * FROM customertable";
        $result = $conn->query($sqlQuery);
        return $result;
    }
    
    function closeConnection($conn)
            {
                $conn -> close();
            }





 }
?>