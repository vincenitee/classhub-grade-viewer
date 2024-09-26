<?php 
    require_once 'DatabaseConnect.php';
    
    $db = DatabaseConnect::getInstance();

    $sql = "SELECT * FROM year_level";

    try{
        $result = $db->select_info_multiple_key($sql);

        header("Content-Type: application/json");
        echo json_encode($result);
    } catch(Exception $e){

        http_response_code(500);
        echo json_encode(["error" => "Failed to fetch data: {$e->getMessage()}"]);
        exit;
    }

?>