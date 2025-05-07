<?php
require_once 'DatabaseConnect.php';

$db = DatabaseConnect::getInstance();

$response = ["success" => false];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $student_id = $_POST['student-id'];
    $current_password = $_POST['current-password'];
    $new_password = $_POST['new-password'];
    $confirm_password = $_POST['confirm-password'];
    
    $password_sql = "SELECT password FROM student WHERE student_id = $student_id";
    $current_hashed_password = $db->select_info_multiple_key($password_sql)[0][0];

    $passwords = [
        'current_hashed_password' => $current_hashed_password,
        'current_password' => $current_password,
        'new_password' => $new_password,
        'confirm_password' => $confirm_password
    ];

    if(isPasswordUpdateValid($passwords)){

        // hash the updated password
        $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

        $update_sql = "UPDATE student SET password = ? WHERE student_id = ?";
        $update_types = "si";
        $update_params = [$hashed_new_password, $student_id];

        $affected_rows = $db->insert_update_delete($update_sql, $update_types, $update_params);

        if($affected_rows){
            $response["success"] = true;
            $response["message"] = "Password updated successfully";
        }
    }

    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}

function isPasswordUpdateValid($passwords){
    global $response;

    extract($passwords);

    if(!password_verify($current_password, $current_hashed_password)){
        $response["message"] = "Incorrect password, please try again";
        return false;
    }

    if($new_password !== $confirm_password){
        $response["message"] = "New password doesn't match";
        return false;
    }

    

    return true;
}


