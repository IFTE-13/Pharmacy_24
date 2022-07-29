<?php
    include("../../../control/admin/adminChangePassword.php");
?>
<html>

<head>
    <title>
        Settings
    </title>
    <link rel="stylesheet" href="../../../css/admin/adminProfile.css">
</head>

<body>
    <?php
            include("adminSideBar.php");
    ?>
    <div class="profile">
        <form action="" method="POST">
            <h1>Change Password</h1>
            <hr>
            <div class="content-section">
                <div class="sec">
                    <div>
                        <h3>Current Password</h3>
                        <input type="password" name="current" id="">
                    </div>
                </div>
                <div class="sec">
                    <div>
                        <h3>New Password</h3>
                        <input type="password" name="new" id="">
                    </div>
                    <div>
                        <h3>Confirm Password</h3>
                        <input type="password" name="confirm" id="">
                    </div>
                </div>

            </div>
            <button type="submit" name="changepassword" class="update">Change Passowrd</button>
            <h3 class="notify">
                <?php
                    echo $passwordChangeError;
                ?>
    </div>
    </form>

    </div>

</body>

</html>