<?php
require __DIR__.'/Database.php';

class Person extends Database
{
    function __construct()
    {
        $this->conn = $this->dbConnect();
    }

    public function index()
    {   
        $sql = "SELECT * FROM person";
        $data = $this->conn->query($sql);
        return $data;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM person WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute([':id' => $id]) !== TRUE)
            echo "loi get";
        // error_log(print_r($id, TRUE));
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function add()
    {   
        $name = $_POST['name'];
        $address = $_POST['address'];
        $sql = "INSERT into person(name, address) value(:name, :address)";

        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute([':name' => $name, ':address' => $address]) !== true)
            echo "loi add <br> ";
    }   

    public function update($id)
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $sql = "UPDATE person SET name = :name, address = :address WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute([':name' => $name, ':address' => $address, ':id' => $id]) !== true)
            echo "loi update <br> $name $address $id";
    }

    public function delete($id)
    {
        $sql = "DELETE FROM person WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        if ($stmt->execute([':id' => $id]) !== TRUE)
            echo "loi xoa";
    }
}
