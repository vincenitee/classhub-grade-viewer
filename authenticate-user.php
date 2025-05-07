<?php 
require_once 'DatabaseConnect.php';

$db = DatabaseConnect::getInstance();

$response = ["success" => false];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email-address'];
    $password = $_POST['password'];

    if(isUserCredentialsValid($email, $password)){
        session_start();
        $response["success"] = true;
        $response["message"] = "Signed In Successfully";

        $sql = "SELECT student_id FROM student WHERE dmmmsu_email = '$email'";
        $_SESSION['student_id'] = $db->select_info_multiple_key($sql)[0]['student_id'];
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

function isUserCredentialsValid($email, $password){
    global $response, $db;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $response["message"] = "Invalid email format";
        return false;
    }

    $sql = "SELECT * FROM student WHERE dmmmsu_email = '$email'";
    $user = $db->select_info_multiple_key($sql)[0];

    if(!isset($user)){
        $response["message"] = "User not found";
        return false;
    }

    if(!password_verify($password, $user['password'])){
        $response["message"] = "Incorrect password";
        return false;
    }

    return true;
}

?>