<?php
class Empleado
{
    public function __construct(private string $nombre = "", private string $apellido = "", private int $sueldo = 0, private array $n_tf = [])
    //Pongo un valor predefinido para que asi no sea obligatorio el usar parametros si no que php ya tenga asignados en memoria un valor predefinido para ellos

    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
        $this->n_tf = $n_tf;
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

$jose->anyadirTelefono(622239452);
$jose->anyadirTelefono(622239452);
$jose->anyadirTelefono(622239452);
$jose->anyadirTelefono(622239452);

echo ($jose->listarTelefono());
$jose->vaciarTelefonos();
echo ($jose->listarTelefono());
