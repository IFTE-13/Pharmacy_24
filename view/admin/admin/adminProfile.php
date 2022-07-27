<?php
    include("../../../control/admin/checkAdminLogin.php");
    if(empty($_SESSION["role"])){
        header("Location: http://localhost/Pharmacy24/view/admin/adminLogin.php");
    }
?>

<html>

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../../../css/admin/adminProfile.css">
</head>

<body>
    <?php
            include("adminSideBar.php");
    ?>
    <div class="profile">
        <form action="" method="POST">
            <h1>User profile</h1>
            <hr>
            <div class="content-section">
                <div class="sec">
                    <div>
                        <h3>Username</h3>
                        <input type="text" name="username" id="" readonly value=<?php echo $_SESSION["username"] ?>>
                    </div>
                    <div>
                        <h3>Name</h3>
                        <input type="text" name="name" id="" value=<?php echo $_SESSION["name"] ?>>
                    </div>
                </div>
                <div class="sec">
                    <div>
                        <h3>Email</h3>
                        <input type="email" name="email" id="" value=<?php echo $_SESSION["email"] ?>>
                    </div>
                    <div>
                        <h3>Date of birth</h3>
                        <input type="date" name="dob" id="" value=<?php echo $_SESSION["dob"] ?>>
                    </div>


                </div>
                <div class="sec">
                    <div>
                        <h3>Gender</h3>
                        <input type="text" name="gender" id="" value=<?php echo $_SESSION["gender"] ?>>
                    </div>
                    <div>
                        <h3>Nationality</h3>
                        <input type="text" name="nationality" id="" value=<?php echo $_SESSION["nationality"] ?>>
                    </div>


                </div>
                <div class="sec">
                    <div>
                        <h3>Address</h3>
                        <input type="text" name="address" id="" value=<?php echo $_SESSION["address"] ?>>
                    </div>
                    <div>
                        <h3>Phone</h3>
                        <input type="text" name="phone" id="" value=<?php echo $_SESSION["phone"] ?>>
                    </div>


                </div>
            </div>
            <button type="submit" class="update" name="update">Update your profile</button>
            <h3 class="notify">
                <?php
                echo $update;
            ?>

    </div>
    </form>
    </div>

</body>

</html>