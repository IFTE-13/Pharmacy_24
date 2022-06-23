<?php
$fileUpload = "";
$fileError = "";

if(isset($_POST["submission"])){
    $file = "";
    if(empty($_FILES["dataFile"]["name"])){
        $fileError = "No file attached";
    }
    else{
        if(move_uploaded_file($_FILES["dataFile"]["tmp_name"], "../../../uploads/".$_FILES["dataFile"]["name"])){
            if($_FILES['dataFile']['type']=="image/jpg")
            {   $file = "../../../uploads/".$_FILES["dataFile"]["name"];
                    $filecontents=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/research.json',true);
                        $arrphp=json_decode($filecontents);
                        $myarray = array(
                            'name' => "admin",
                            'fileName' => $file
                    
                        );
                        
                        $arrphp []=$myarray;
                        $jsonarr= json_encode($arrphp,JSON_PRETTY_PRINT);
                        if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/Pharmacy24/data/research.json',$jsonarr))
                        {
                            $fileUpload = "Submited";
                        }
                        
                    }
            else{
                        
                        $fileError = "file is not jpg";
            }
        }
        else{
            $fileError = "Failed to upload file";
        }
    }
    
    
}
?>