<?php
class InventoryModel
{
    public function __construct(private int $id, private  string $nombre, private int $cantidad, private int $precio) {}
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    public function setCantidad(int $cantidad)
    {
        $this->cantidad = $cantidad;
    }
    public function setPrecio(int $precio)
    {
        $this->precio = $precio;
    }
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}
