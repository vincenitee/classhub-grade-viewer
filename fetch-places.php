<?php 
    require_once 'DatabaseConnect.php';
    
    $db = DatabaseConnect::getInstance();
    
    $sql = "SELECT * FROM region";

    if(isset($_GET['regionId'])){
        $regionId = intval($_GET['regionId']);
        $sql = "SELECT * FROM province WHERE region_id = $regionId";

    } else if(isset($_GET['provinceId'])){
        $provinceId = intval($_GET['provinceId']);
        $sql = "SELECT * FROM municipality WHERE province_id = $provinceId";

    } else if(isset($_GET['municipalityId'])){
        $municipalityId = intval($_GET['municipalityId']);
        $sql = "SELECT * FROM brgy WHERE municipality_id = $municipalityId";

    }

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