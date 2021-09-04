<?php
class DB_Connection {
    public static function connect()
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