<?php
    include('../admin/adminSideBar.php');
?>
<html>
<head>
    <title>Complains</title>
</head>
<body>
<a href="../admin/adminUser.php">| Add User |</a>
<a href="../admin/adminRemoveUser.php">Remove User</a>
<a href="../admin/adminBlockUser.php">| Un/Block User |</a>
<a href="../admin/complains.php">Complains |</a>
<a href="../admin/transactionHistory.php">Transactions |</a>
                    <?php
                        $load = file_get_contents("http://localhost/Pharmacy24/data/customerComplains.json");
                        $user =  json_decode($load);

                        foreach($user as $key=>$userComplain){
                            
                            echo 
                            " 
                                <hr>
                                <p>Name: $userComplain->name</p>
                                <p>Email: $userComplain->email</p>
                                <p>Complain: $userComplain->complain</p>
                                <a href=''>Reply</a>
                                <hr>
                            ";
                    }?>
</body>
</html>