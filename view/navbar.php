<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Pharmacy24/view/home.php"><img
                    src="http://localhost/Pharmacy24/utilities/logo.png" alt="">PHARMACY'24</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="http://localhost/Pharmacy24/view/home.php">Home</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../view/admin/adminLogin.php">ADMIN</a></li>
                            <li><a class="dropdown-item" href="../view/customer/customerlogin.php">CUSTOMER</a></li>
                            <li><a class="dropdown-item" href="../view/seller/sellerLogin.php">SELLER</a></li>
                            <li><a class="dropdown-item" href="../view/supplier/CommonLoginSupplier.php">SUPPLIER</a>
                            </li>
                        </ul>
                    </li>
                    <a class="nav-link" href="http://localhost/Pharmacy24/view/about.php">About</a>
                    <a class="nav-link" href="http://localhost/Pharmacy24/view/contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>