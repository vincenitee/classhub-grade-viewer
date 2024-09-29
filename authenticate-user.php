<?php 
require_once 'DatabaseConnect.php';

$db = DatabaseConnect::getInstance();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email-address'];
    $current_password = $_POST['password'];

    $response = ["status" => false];

    // Checks if it is a valid email
    if(isset($email)){
        $sql = "SELECT * FROM student WHERE dmmmsu_email = '$email'";
        $result = $db->select_info_multiple_key($sql);

        // Checks if the user exists
        if(isset($result[0])){
            $user = $result[0];
            $password = $user["password"];

            // Checks if the password is valid
            if(password_verify($current_password, $password)){
                session_start();
                $_SESSION["user_id"] = $user["user_id"];
                
                $response = ["login" => true];
            } else{
                $response["message"] = "Invalid Email or Password";
            }

        } else{
            $response["message"] = "User not found";
        }
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>