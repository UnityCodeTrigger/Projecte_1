<?php

abstract class Product
{
    protected $nombre;
    protected $precio;
    protected $talla;
    protected $tipo;
    
    /*
    public function __construct($nombre, $precio, $talla)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->talla = $talla;
    }
    */

    public function __construct()
    {

    }

    public function GetNombre()
    {
        return $this->nombre;
    }

    public function GetPrecio()
    {
        return $this->precio;
    }

    public function GetTalla()
    {
        return $this->talla;
    }
}

?>