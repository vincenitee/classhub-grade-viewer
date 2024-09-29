<?php 
require_once '../Database.php';

$db = new Database('localhost', 'root', '', 'classhub_data');

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else{
    header('Location: ../index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classhub | Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Bootstrap JS -->
    <script defer src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" type="image/png" href="../assets/img/classhub_logo_orig.jpg">

    <!-- Feather Icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</head>
<body class="min-vh-100">
    <!-- Navigation Bar -->
    <?php include '../assets/templates/navbar.php'; ?>

    <!-- Sidebar -->
    <?php include '../assets/templates/sidebar.php'; ?>
    
    <!-- Main Content -->
    <main class="container my-3">
        <div class="alert alert-success">
            <?php
            $sql = "SELECT * FROM student WHERE user_id = '$user_id'";
            $last_name = $db->select_info_multiple_key($sql)[0]['last_name'];

            echo "Welcome, $last_name!"; 
            ?>
        </div>
    </main>

    <script>
        feather.replace()
    </script>
</body>
</html>