<?php
session_start();
    echo "hello";
    if(session_destroy())   
        {
            header("Location: http://localhost/Pharmacy24/view/others/home.php");
        }
?>