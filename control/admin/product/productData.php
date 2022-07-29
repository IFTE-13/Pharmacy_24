<?php
    include("../../../model/databaseConnection.php");
    $data = "";
    $deleteProduct = "";
    $updateProduct = "";

    $connection = new databaseConnection();
    $connectionObject = $connection->openConnection();
    $data = $connection->showProduct($connectionObject);
    
    if($data->num_rows > 0){
        $datas = $data;         
    }

    if(isset($_REQUEST['delete'])){
        $deletePRoduct = $connection->deleteProduct($connectionObject, $_REQUEST['delete']);
        if($deletePRoduct == TRUE){
            $deleteProduct = "Product deleted";
            header("Refresh:0");
        }
    }

    if(isset($_REQUEST['update'])){
        echo $_REQUEST['update'];
        $updateProduct = $connection->updateProduct($connectionObject, $_REQUEST['update'], $_REQUEST['company'], $_REQUEST['update'], $_REQUEST['update']);
        if($updateProduct == TRUE){
            $updateProduct = "Product updated";
        }
    }

    $connection->closeConnection($connectionObject);
?>