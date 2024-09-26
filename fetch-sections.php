<?php 
    require_once 'DatabaseConnect.php';
    
    $db = DatabaseConnect::getInstance();
    
    if(isset($_GET['yearId'])){
        $yearId = intval($_GET['yearId']);

        $sql = "SELECT 
                    ys.section_id, s.section 
                FROM 
                    year_section ys
                JOIN 
                    section s ON ys.section_id = s.section_id
                WHERE  
                    year_id = $yearId";

        try{
            $result = $db->select_info_multiple_key($sql);

            header("Content-Type: application/json");
            echo json_encode($result);
        } catch(Exception $e){
            http_response_code(500);
            echo json_encode(["error" => "Failed to fetch data: {$e->getMessage()}"]);
            exit;
        }

    } else{
        echo json_encode(["error" => "Year ID not found"]);
    }

    

?>