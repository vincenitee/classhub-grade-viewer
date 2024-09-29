<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classhub | Register</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Bootstrap JS -->
    <script defer src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Icon -->
    <link rel="icon" type="image/png" href="assets/img/classhub_logo.png">

</head>
<body class="bg-light">

    <section class="container p-4">
        <div class="row align-items-center justify-content-center h-100">
            <form action="register-user.php" method="post" class="col-md-8 mx-auto" id="signup-form">
                <div class="navbar-brand d-flex flex-fill justify-content-center align-items-center">
                    <img src="assets/img/classhub_logo.png" alt="" width="100">
                </div>

                <h4 class="my-3 text-center fw-bold">Create an account</h4>

                <!-- Row 1 -->
                <div class="row gy-3 mb-3">
                    <!-- Firstname  -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            Firstname <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" required autocomplete="off" autofocus>
                    </div>

                    <!-- Middlename -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            Middlename (Optional)
                        </label>

                        <input type="text" name="middlename" id="middlename" class="form-control form-control-sm" required autocomplete="off">
                    </div>

                    <!-- Lastname -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            Lastname <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" required autocomplete="off">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row gy-3 mb-3">
                    <!-- Personal Email Address  -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            Personal Email Address <span class="text-danger">*</span>
                        </label>

                        <input type="email" name="personal-emailaddress" id="personal-emailaddress" class="form-control form-control-sm" required autocomplete="off">
                    </div>

                    <!-- DMMMSU Email Address  -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            DMMMSU Email Address <span class="text-danger">*</span>
                        </label>

                        <input type="email" name="work-emailaddress" id="work-emailaddress" class="form-control form-control-sm" required autocomplete="off">
                    </div>

                    <!-- Contact Number -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            Contact Number <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="contact" id="contact" class="form-control form-control-sm" required autocomplete="off">
                    </div>

                </div>

                <!-- Row 3 -->
                <div class="row gy-3 mb-5">
                    <!-- Student ID No -->
                    <div class="col-lg-3">
                        <label for="" class="form-label text-secondary">
                            Student ID No <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="student-id" id="student-id" class="form-control form-control-sm" required autocomplete="off">
                    </div>

                    <!-- Year Level -->
                    <div class="col-lg-3">
                        <label for="" class="form-label text-secondary">
                            Year Level <span class="text-danger">*</span>
                        </label>

                        <select name="year-level" id="yearlevel-select" class="form-select form-select-sm">
                            <option value="">Select Year Level</option>
                        </select>
                    </div>

                    <!-- Strand -->
                    <div class="col-lg-3">
                        <label for="" class="form-label text-secondary">
                            Strand <span class="text-danger">*</span>
                        </label>

                        <select name="strand" id="strand-select" class="form-select form-select-sm" disabled>
                            <option value="">Select Strand</option>
                        </select>
                    </div>

                    <!-- Class Section -->
                    <div class="col-lg-3">
                        <label for="" class="form-label text-secondary">
                            Section <span class="text-danger">*</span>
                        </label>

                        <select name="section" id="section-select" class="form-select form-select-sm" disabled>
                            <option value="">Select Section</option>
                            
                        </select>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="row gy-4 pb-3">
                    <!-- Region -->
                    <div class="col-lg-6">
                        <label for="" class="form-label text-secondary">
                            Region <span class="text-danger">*</span>
                        </label>
                        <select name="region" id="region-select" class="form-select form-select-sm">
                            <option value="">Select Region</option>
                        </select>
                    </div>

                    <!-- Province -->
                    <div class="col-lg-6">
                        <label for="" class="form-label text-secondary">
                            Province <span class="text-danger">*</span>
                        </label>
                        <select name="province" id="province-select" class="form-select form-select-sm" required disabled>
                            <option value="">Select Province</option>
                        </select>
                    </div>

                    <!-- Municipality -->
                    <div class="col-lg-6">
                        <label for="" class="form-label text-secondary">
                            Municipality <span class="text-danger">*</span>
                        </label>
                        <select name="municipality" id="municipality-select" class="form-select form-select-sm" required disabled>
                            <option value="">Select Municipality</option>
                        </select>
                    </div>

                    <!-- Barangay -->
                    <div class="col-lg-6">
                        <label for="" class="form-label text-secondary">
                            Barangay <span class="text-danger">*</span>
                        </label>
                        <select name="barangay" id="barangay-select" class="form-select form-select-sm" required disabled>
                            <option value="">Select Barangay</option>
                        </select>
                    </div>

                    <!-- Additional Information (Address) -->
                    <div class="col-lg-8">
                        <label for="" class="form-label text-secondary">
                            Street Name, Building, House No. <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="specific-address" id="specific-address" class="form-control form-control-sm" autocomplete="off">
                    </div>

                    <!-- Postal Code -->
                    <div class="col-lg-4">
                        <label for="" class="form-label text-secondary">
                            Postal Code <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="postal-code" id="postal-code" class="form-control form-control-sm" autocomplete="off">
                    </div>
                </div>
                <hr>
                <!-- Row 5 -->
                <div class="row gy-4 mt-2 mb-4">

                    <!-- Password Fields -->
                    <div class="col-lg-6">
                        <label for="" class="form-label text-secondary">Password <span class="text-danger">*</span></label>

                        <input type="password" name="password" id="password" class="form-control form-control-sm">
                        <br>
                        <label for="" class="form-label text-secondary">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="confirm-password" id="confirm-password" class="form-control form-control-sm">
                    </div>

                    <!-- Password Requirements -->
                    <div class="col-lg-6 align-items-center">
                        <p class="mb-2" style="font-size: 0.9rem;"> Password Requirements: </p>

                        <p class="small-text text-muted" style="font-size: 0.8rem;">
                            Your new password must satisfy all of these requirements:
                        </p>

                        <ul class="text-muted mb-0" style="font-size: 0.9rem;">
                            <li>Minimum of 8 characters</li>
                            <li>Must contain least one special character</li>
                            <li>Must contain at least one number</li>
                            <li>Must contain at leat one uppercase letter</li>
                        </ul>
                    </div>

                    <div class="col-12 mt-5">
                        <button class="btn btn-primary w-100">Sign up</button>
                    </div>
                </div>

                <div class="checkbox mt-3 text-secondary account-actions">
                    <span>Already have an account? <a href="index.php">Sign in here</a></span> <br>

                    <span>Forgot your password? <a href="reset-password.php">Reset here</a></span>
                </div>
            </form>
        </div>
    </section>

    <!-- Axios JS -->
    <script src="assets/js/utils/axios.js"></script>

    <!-- Sweet Alert JS -->
    <script src="assets/js/utils/sweetalert2.js"></script>

    <!-- Custom JS -->
    <script type="module" src="assets/js/main.js"></script>
</body>
</html>