<?php 
class Database{
    private $conn;
    
    public function __construct($dbhost, $dbuser, $dbpass, $dbname){   
        $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        if($this->conn->connect_error){
            die('Connection Failed: ' . $this->conn->connect_error);
        }

    }

    public function select_info_multiple_key($sql){
        
        if($results = $this->conn->query($sql)){

            if($this->conn->affected_rows > 0){
                
                $return_value = array();
                $counter = 0;

                while($result = $results->fetch_assoc()){

                    // Fetches the table columns (productID, productName, etc.)
                    $table_columns = array_keys($result);
                    
                    // Initializes the first element of the array with an empty array
                    $return_value[$counter] = array();

                    for($i = 0; $i < count($table_columns); $i++){
                        // Converts all characters to HTML entities for safe rendering
                        $return_value[$counter][$table_columns[$i]] = htmlentities($result[$table_columns[$i]], ENT_QUOTES);
                        $return_value[$counter][$i] = htmlentities($result[$table_columns[$i]], ENT_QUOTES);
                    }
                    
                    $counter = $counter + 1;
                }

                return $return_value;
            } else{
                return null;
            }

        } else{
            $this->conn->close();
            return null;
        }

    }

    public function insert_update_delete($sql, $types = '', $params = []){
        $stmt = $this->conn->prepare($sql);

        if($stmt === false){
            die('Unable to execute query: ' . $this->conn->error);
        }

        // Bind parameters if any
        if(!empty($types) && !empty($params)){
            $stmt->bind_param($types, ...$params);
        }

        // Execute the query
        $stmt->execute();

        if($stmt->error){
            echo "Execution Error: " . $stmt->error;
            $stmt->close();
            return false;
        }

        // For insertion operation, it will return the last inserted id
        if(strpos($sql, "INSERT") === 0){
            $insertID = $stmt->insert_id;
            $stmt->close();
            return $insertID;
        }

        $affected_rows = $stmt->affected_rows;

        $stmt->close();

        return $affected_rows;
    }

    // Prints array in a formatted manner
    public function pretty_print($result_set){
        echo "<pre>";
        print_r($result_set);
        echo "</pre>";
    }

    public function generateUID(){
        return substr(time(), -6) . rand(10000, 99999);
    }

}

?>