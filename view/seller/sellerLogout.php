<?php
session_start();

    if(session_destroy())   
        {
            header("Location: http://localhost/Pharmacy24/view/home.php");
        }
?>