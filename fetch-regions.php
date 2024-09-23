<?php 
    require_once 'Database.php';

    try{
        $db = new Database('localhost', 'root', '', 'classhub_data');
    } catch(Exception $e){

        http_response_code(500);
        echo json_encode(["error" => "Failed to connect to the database: {$e->getMessage()}"]);
        exit;
    }

    $sql = "SELECT * FROM region";
    
    try{
        $provinces = $db->select_info_multiple_key($sql);

        header('Content-Type: application/json');
        echo json_encode($provinces);
    } catch(Exception $e){

        http_response_code(500);
        echo json_encode(["error" => "Failed to fetch data: {$e->getMessage()}"]);
        exit;
    }
?>