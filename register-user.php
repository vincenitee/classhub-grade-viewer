<?php
require_once 'DatabaseConnect.php';

$db = DatabaseConnect::getInstance();

$response = ["success" => false];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $student_id = $_POST['student-id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $personal_email = $_POST['personal-emailaddress'];
    $dmmmsu_email = $_POST['work-emailaddress'];
    $contact = $_POST['contact'];
    $year_id = $_POST['year-level'];
    $section_id = $_POST['section'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if (isPasswordValid($password, $confirm_password)) {
        $hashed_password = password_hash($confirm_password, PASSWORD_DEFAULT);

        // Insertion of user's information
        $student_sql = 'INSERT INTO user (first_name, middle_name, last_name, personal_email, dmmmsu_email, student_id, contact_number, year_id, section_id, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $student_types = 'sssssssiis';
        $student_param = [$firstname, $middlename, $lastname, $personal_email, $dmmmsu_email, $student_id, $contact, $year_id, $section_id, $hashed_password];

        $student_row_id = $db->insert_update_delete($student_sql, $student_types, $student_param);

        if ($student_row_id) {
            // Insertion of user's address information
            $region_id = $_POST['region'];
            $province_id = $_POST['province'];
            $municipality_id = $_POST['municipality'];
            $brgy_id = $_POST['barangay'];
            $specific_address = $_POST['specific-address'];
            $postal_code = $_POST['postal-code'];

            $address_sql = "INSERT INTO address (user_id, region_id, province_id, municipality_id, brgy_id, specific_address, postal_code) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $address_types = 'iiiiisi';
            $address_params = [$student_row_id, $region_id, $province_id, $municipality_id, $brgy_id, $specific_address, $postal_code];

            $address_row_id = $db->insert_update_delete($address_sql, $address_types, $address_params);

            if ($address_row_id) {
                $response["success"] = true;
                $response["message"] = "Registered Successfully";
            }
        } else {
            $response["message"] = "Failed to insert student data";
        }
    }

    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}

function isPasswordValid($password, $confirm_password)
{
    global $response;

    if ($password !== $confirm_password) {
        $response["message"] = "Password doesn't match";
        return false;
    }

    $minLength = 8;
    $hasUpperCase = preg_match('/[A-Z]/', $password);
    $hasLowerCase = preg_match('/[a-z]/', $password);
    $hasNumbers = preg_match('/\d/', $password);
    $hasSpecialChars = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password);

    if (strlen($password) < $minLength) {
        $response["message"] = "Password must be atleast 8 character";
        return false;
    }
    if (!$hasUpperCase) {
        $response["message"] = "Password must contain an uppercase letter";
        return false;
    }
    if (!$hasLowerCase) {
        $response["message"] = "Password must contain a lowercase letter";
        return false;
    }
    if (!$hasNumbers) {
        $response["message"] = "Password must contain a number";
        return false;
    }
    if (!$hasSpecialChars) {
        $response["message"] = "Password must contain a special character";
        return false;
    }

    return true;
}
