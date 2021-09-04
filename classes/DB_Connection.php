<?php
class DB_Connection {
    public static function connect()
    {
        $host = "localhost";
        $username = "martin";
        $password = "Mackomace1!";
        $dbname = "school_board";

        try {
            return mysqli_connect($host,$username,$password,$dbname);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}