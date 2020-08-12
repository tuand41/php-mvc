<?php 
class Database
{
    function dbConnect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "phpmvc";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $conn;
    }
}
