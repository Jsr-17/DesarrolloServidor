<?php
class Empleado
{
    public function __construct(private string $nombre, private string $apellido, private int $sueldo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    function obtenerNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }
    function debePagarImpuestos(): bool
    {
        if ($this->sueldo >= 3333) {
            return true;
        }
        return false;
    }
}


$jose = new Empleado("Jose Antonio", "Román Moreno", 3332);

print($jose->debePagarImpuestos());

echo $jose->obtenerNombreCompleto();
