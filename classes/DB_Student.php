<?php

class DB_Student {
    public function __construct()
    {
//        include '../db_connection.php';
    }

    public function all()
    {
        $result = mysqli_query(openCon(), "SELECT * FROM student");

       return $this->parseResult($result);
    }

    public function find($student_id)
    {
        $result = mysqli_query(openCon(), "SELECT * FROM student WHERE `id` = '".$student_id."'");

        return $this->parseResult($result)[0];
    }

    protected function parseResult($result)
    {
        $students = [];

        while ($row = $result->fetch_object()){
            $students[] = $row;
        }

        return $students;
    }
}