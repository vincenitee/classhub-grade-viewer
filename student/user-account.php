<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classhub | Account</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Bootstrap JS -->
    <script defer src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" type="image/png" href="../assets/img/classhub_logo_orig.jpg">

</head>
<body class="min-vh-100">
    
    <!-- Navbar -->
    <?php include '../assets/templates/navbar.php'; ?>

    <!-- Sidebar -->
    <?php include '../assets/templates/sidebar.php'; ?>

    <!-- Account Info -->
    <?php include '../assets/templates/account-info.php' ?>

    <!-- Feather Icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <script>
        feather.replace()
    </script>
</body>
</html>