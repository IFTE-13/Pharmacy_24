<?php
class databaseConnection{

    function openConnection(){
        $dataBaseHost = 'localhost';
        $dataBaseUser = 'root';
        $dataBasePass = '';
        $dataBase = 'pharmacy24';

        $connection = new mysqli($dataBaseHost, $dataBaseUser, $dataBasePass, $dataBase);

        if($connection->connect_error)
        {
            echo "bla bla bla";
        }
        return $connection;
    }   

    function adminLogin($connection,$table,$username,$password){
        $result = $connection->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
        return $result;
    }

    function adminProfile($connection, $table, $username){
        $sqlQuery = "Select * from " . $table ." where username = '". $username."'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function adminUpdateProfile($connection, $username, $name, $email, $dob, $gender, $nationality, $address, $phone){
        $sqlQuery = "UPDATE admin SET name='$name',gender='$gender',email='$email',dob='$dob',nationality='$nationality',address='$address',phone='$phone' WHERE username = '$username'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function adminChangePassword($connection,$table,$username,$password){
        $sqlQuery = "UPDATE admin SET password='$password' WHERE username='$username'";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}



    

        
?>