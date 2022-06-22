<?php
    session_start();
    include("../adminSideBar.php");
    require("../../../control/admin/research/fileupload.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Upload Research Files</h1><hr>
        <table>
            <tr>
                <td><h3>Name:</h3></td>
                <td><h3><input type="text" name="name" id="" placeholder=<?php echo $_SESSION['username']?>></h3>
                    </td>
            </tr>
            <tr>
                <td><h3>Please choose a file</h3></td>
                <td><h3><input type="file" value="Choose file" name="dataFile" id="dataFile"></h3>
                <?php
                    echo $fileError;
                ?>
            </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="submit" name="submission">
                    <input type="reset" value="Reset">
                    <?php
                        echo $fileUpload;
                    ?>
                </td>
            </tr>
        </table>
    </form>
        <center>
            <table border='1' width="70%">
                <thead> 
                        <tr>
                            <th>Uploaded By</th>
                            <th>Papers</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        $research = file_get_contents("http://localhost/Pharmacy24/data/research.json");
                        $paper =  json_decode($research);

                        foreach($paper as $key=>$paperData){
                            
                            echo 
                            " 
                            <center>
                            <tr>
                                <td><p>$paperData->name</p></td>
                                <td><a href=''>$paperData->fileName</a></td>
                            </tr>
                            </center>
                            ";
                    }?>
                </tbody>
            </table>
        </center>
</body>
</html>