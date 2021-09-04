<?php
class DB_Connection {
    public function openConnection()
    {
        $host = "localhost";
        $username = "martin";
        $password = "Mackomace1!";
        $dbname = "school_board";
        $conn = mysqli_connect($host,$username,$password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
}