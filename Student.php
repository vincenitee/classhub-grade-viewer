<?php 
    require_once 'DatabaseConnect.php';
    $db = DatabaseConnect::getInstance();

    class Student{
        public static function getAllStudent(){
            global $db;

            $sql = "SELECT * FROM user";
            $students = $db->select_info_multiple_key($sql);

            return $students;
        }

        public static function findStudent($id){
            $students = self::getAllStudent();

            foreach($students as $student){
                if($student['student_id'] == $id){
                    return $student;
                }
            }

            return null;
        }

    }
?>