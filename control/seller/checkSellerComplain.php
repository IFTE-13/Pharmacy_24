<?php
    $complain = "";
    if(isset($_POST['sellercomplain'])){
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];

        $filecontents=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy_24/data/sellerComplainData.json',true);
        $arrphp = json_decode($filecontents);

        $myarray = array(
            "name" => $name,
            'email' => $email,
            'complain' => $_REQUEST['complain']
            
        );
            $arrphp []=$myarray;
            $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
            if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/customerComplains.json',$jsonarr)){
                $complain = "Complain Submitted succesfully";
            }
            else{
                $complain = "Sorry Complain Submission Not Successful";
            }
    }

    
?>