<?php
    require_once realpath(dirname(__DIR__) . '/DatabaseConnect.php');

    $db = DatabaseConnect::getInstance();
    
    session_start();
    if(isset($_SESSION['student_id'])){
        $student_id = $_SESSION['student_id'];
    
        $sql = "SELECT * FROM student WHERE student_id = $student_id";
        $student = $db->select_info_multiple_key($sql)[0];
    } else{
        $file_path = realpath(dirname(__DIR__) . '/index.php');
        header('Location: ' . $file_path);
        exit;
    }

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

    <!-- FeatherIcon JS -->
    <script> feather.replace() </script>

    <!-- Axios JS -->
    <script src="../assets/js/utils/axios.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="../assets/js/utils/sweetalert2.js"></script>

    <!-- Custom JS -->
    <script type="module" src="../assets/js/main.js"></script>
</body>
</html>