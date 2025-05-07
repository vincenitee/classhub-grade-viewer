<?php 
require_once realpath(dirname(__DIR__)) . '/DatabaseConnect.php';

$db = DatabaseConnect::getInstance();

session_start();

if(isset($_SESSION['admin_id'])){
    $admin_id = $_SESSION['admin_id'];
    
    $sql = "SELECT * FROM admin WHERE admin_id = $admin_id";
    $admin = $db->select_info_multiple_key($sql)[0];
} else{
    /**
     * dirname() - returns the parent directory of the file
     * __DIR__ - returns the current file path of the file
     * realpath() - returns the absolute path of the current file
     */
    $file_path = realpath(dirname($_SERVER['PHP_SELF']) . '/index.php');
    header('Location: ' . $file_path);
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

    <link rel="icon" type="image/png" href="../assets/img/classhub_logo_orig.jpg">

    <!-- Feather Icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</head>
<body style="background-color: #F0F0F0; height: 100vh;">

    <div class="d-flex">
        <?php include './templates/sidebar.php' ?>

        <main class="flex-grow-1">
            <?php include './templates/navbar.php' ?>

            <div class="tab-content" id="tabContent">
                <?php include './dashboard.php' ?>
                <?php include './grades.php' ?>
                <?php include '../assets/templates/account-info.php' ?>
            </div>
        </main>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- FeatherIcon JS -->
    <script> feather.replace() </script>

    <!-- Axios JS -->
    <script src="../assets/js/utils/axios.js"></script>
    
    <!-- Chart JS -->
    <script src="../assets/js/utils/chart.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="../assets/js/utils/sweetalert2.js"></script>

    <!-- Custom JS -->
    <script type="module" src="../assets/js/main.js"></script>

    <script>

        // JavaScript to manually trigger pill switching
        function togglePill(pillId) {
            const pillElement = document.getElementById(pillId);
            let targetPill = new bootstrap.Tab(pillElement);
            targetPill.show();  // Activates the specified pill
        }

    </script>
</body>
</html>