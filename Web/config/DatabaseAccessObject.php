<?php

class DatabaseAccessObject
{

    private $conn;

    public function __construct($host = "localhost", $user="root", $pass="", $db = "proyecto1", $puerto="3306")
    {
        $this->conn = $this->connect($host, $user,$pass,$db,$puerto);
    }

    public function connect($host = "localhost", $user="root", $pass="", $db = "proyecto1", $puerto="3306")
    {
        try
        {
            $conn = new mysqli($host, $user,$pass, $db,$puerto);

            if($conn)
                return $conn;
            else
                $conn->close();
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }

    public function getAllCamisetas($order = "nombre")
    {
        $whitelist = ["nombre","precio","talla","id"];
        if(in_array( $order, $whitelist) == false)
            $order = "nombre";

        $conn = $this->conn;
        $query = $conn->prepare("SELECT * FROM PRODUCTOS ORDER BY {$order} DESC");
        $query->execute();
        $result = $query->get_result();

        $productos = [];
        while($producto = $result->fetch_object("Shirt"))
            $productos [] = $producto;

        return $productos;
    }

}

?>