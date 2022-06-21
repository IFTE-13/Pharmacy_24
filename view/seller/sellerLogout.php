<?php
session_start();

    if(session_destroy())   
        {
            header("Location: http://localhost/Pharmacy_24/view/home.php");
        }
?>