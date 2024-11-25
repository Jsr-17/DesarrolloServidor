<?php

class Empleado
{
    public function __construct(
        private string $nombre,
        private string $apellido,
        private int $sueldo

    ) {
    }
    public function getNombre(
    ): string {
        return $this->nombre;
    }
    public function getApellido(
    ): string {
        return $this->apellido;
    }
    public function getSueldo(
    ): int {
        return $this->sueldo;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getNombreCompleto()
    {
        return $this->getNombre() . $this->getApellido();
    }
    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > 3333) {
            return true;
        }
        return false;
    }
}
$jose = new Empleado("Jose Antonio", "Roman moreno", 5000);
echo $jose->debePagarImpuestos();
?>