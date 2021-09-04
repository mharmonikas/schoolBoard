<?php

class DB_Student {
    public function __construct()
    {
        include 'db_connection.php';
    }

    public static function all()
    {
        $result = mysqli_query(openCon(), "SELECT * FROM student");

        $students = [];

        while ($row = $result->fetch_object()){
            $students[] = $row;
        }

        return $students;
    }
}