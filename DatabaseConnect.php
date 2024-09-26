<?php 
    require_once 'Database.php';

    class DatabaseConnect{
        private static $instance = null;
        private $db;

        private function __construct(){
            $config = require 'config.php';

            $db_host = $config['db_host'];
            $db_user = $config['db_user'];
            $db_pass = $config['db_pass'];
            $db_name = $config['db_name'];

            try{
                $this->db = new Database($db_host, $db_user, $db_pass, $db_name);
            } catch(Exception $e){
                http_response_code(500);
                echo json_encode(["error" => "Failed to connect to the database: {$e->getMessage()}"]);
            }
        }

        public static function getInstance(){
            if(self::$instance == null){
                self::$instance = new DatabaseConnect();
            }

            return self::$instance->db;
        }
    }

?>