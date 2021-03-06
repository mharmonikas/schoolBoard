<?php
require('classes/DB_Connection.php');

class DB_Student {
    public $conn;

    public function __construct()
    {
        $this->conn = DB_Connection::connect();
    }

    public function all()
    {
        $result = mysqli_query($this->conn, "SELECT * FROM student");

       return $this->parseResult($result);
    }

    public function find($student_id)
    {
        $sql = "SELECT * FROM student WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $student_id);
        $stmt->execute();

        $result = $stmt->get_result();

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