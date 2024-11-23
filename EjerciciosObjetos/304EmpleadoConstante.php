<?php
class Empleado
{
    //Este tipo de variables solamente son accesibles con el uso de self:: no con this->
    const SUELDO_TOPE = 2000;
    public function __construct(private string $nombre = "", private string $apellido = "", private int $sueldo = 1000, private array $n_tf = [])
    //Pongo un valor predefinido para que asi no sea obligatorio el usar parametros si no que php ya tenga asignados en memoria un valor predefinido para ellos
    {}

    function obtenerNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }
    function debePagarImpuestos(): bool
    {
        if ($this->sueldo >= self::SUELDO_TOPE) {
            return true;
        }
        return false;
    }
    public function anyadirTelefono(int $telefono)
    {
        $this->n_tf = [...$this->n_tf, $telefono];
    }
    public function listarTelefono()
    {
        if (!empty($this->n_tf)) {

            foreach ($this->n_tf as $key => $value) {
                echo "La posición " . $key . " posee el valor: " . $value;
                echo "<br>";
            }
        } else {
            echo  "Está vacio";
        }
    }
    public function vaciarTelefonos()
    {
        $this->n_tf = [];
    }
}
$jose = new Empleado("Jose Antonio", "Román Moreno", 3332);

echo $jose->debePagarImpuestos();
