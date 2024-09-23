<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classhub | Reset Password</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Bootstrap JS -->
    <script defer src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" type="image/png" href="assets/img/classhub_logo.png">

</head>
<body class="bg-light">
    
    <!-- Main Wrapper -->
    <section class="container vh-100">
        <div class="row align-items-center mx-auto h-100">
            <form action="" class="col-lg-4 col-md-10 mx-auto" id="resetpassword-form">
                <a href="" class="navbar-brand flex-fill d-flex justify-content-center">
                    <img src="assets/img/classhub_logo.png" alt="logo" width="100">
                </a>

                <h4 class="my-3 text-center fw-bold">
                    Reset Password
                </h4>

                <p class="text-muted text-center">
                    Provide the email associated with your account to recover your password
                </p>

                <!-- Email Input -->
                <input type="email" name="email" id="email" class="form-control" required autocomplete="off">

                <button class="btn btn-primary btn-block w-100 mt-3">Reset Password</button>

                <div class="checkbox mt-3 text-secondary account-actions">
                    <span>Remember your password? <a href="index.php">Signin here</a></span>
                    <br>
                    <span>Don't have an account? <a href="signup.php">Register here</a></span>
                </div>
            </form>
        </div>
    </section>

</body>
</html>