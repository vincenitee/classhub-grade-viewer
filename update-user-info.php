<?php 
require_once 'DatabaseConnect.php';

$db = DatabaseConnect::getInstance();

$response = ["success" => false];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_id = $_POST['student-id'];
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $last_name = $_POST['lastname'];
    $personal_email = $_POST['personal-emailaddress'];
    $work_email = $_POST['work-emailaddress'];
    $contact = $_POST['contact'];
    $student_id = $_POST['student-id'];
    
    $sql = "UPDATE 
                student
            SET
                first_name = ?,
                middle_name = ?,
                last_name = ?,
                personal_email = ?,
                dmmmsu_email = ?,
                contact_number = ?,
                student_id = ?
            WHERE 
                student_id = ?";
    
    $types = "sssssssi";

    $params = [$first_name, $middle_name, $last_name, $personal_email, $work_email, $contact, $student_id, $user_id];

    $affected_rows = $db->insert_update_delete($sql, $types, $params);

    if($affected_rows){
        $response["success"] = true;
        $response["message"] = "Data Updated Successfully";
    } else{
        $response["message"] = "Failed to update information";
    }

    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}


?>