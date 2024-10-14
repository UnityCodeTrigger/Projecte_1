<?php

include_once("config/DatabaseAccessObject.php");
include_once("model/Product.php");
include_once("model/Productos/Shirt.php");

class ProductController
{
    public function index()
    {
        $dao = new DatabaseAccessObject();
        $productos = $dao->getAllCamisetas("talla");
        
        include_once("view/index.php");
    }

    public function show()
    {
        include_once("view/show.php");
    }
}

?>