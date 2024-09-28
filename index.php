<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classhub | Login</title>
    
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

        <div class="row align-items-center justify-items-center h-100">
            <!-- Login Area -->
            <form action="authenticate-user.php" method="post" class="col-lg-4 col-md-10 mx-auto" id="login-form">
                <a href="" class="navbar-brand flex-fill d-flex justify-content-center">
                    <img src="assets/img/classhub_logo.png" alt="logo" width="100">
                </a>

                <h4 class="my-4 text-center fw-bold">
                    Welcome Back
                </h4>
                
                <!-- Email Input -->
                <input type="email" name="email-address" id="email-address" class="form-control my-3" placeholder="Email address" required autofocus>
                
                <!-- Password Input -->
                <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password" required>

                <button class="btn btn-primary w-100">Sign In</button>

                <div class="checkbox mt-3 text-secondary account-actions">
                    <span>Don't have an account? <a href="signup.php">Signup here</a></span><br>

                    <span>Forgot your password? <a href="reset-password.php">Reset here</a></span>
                </div>
            </form>
        </div>
    
    </section>
    
    <!-- SweetAlert2 -->
    <script src="assets/js/utils/sweetalert2.js"></script>

    <!-- Axios JS -->
    <script src="assets/js/utils/axios.js"></script>

    <!-- Bundled JS -->
    <script type="module" src="assets/js/main.js"></script>
</body>
</html>