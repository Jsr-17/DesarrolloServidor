Copia la clase del ejercicio anterior y modifícala.
Completa el siguiente método con una cadena HTML que muestre los datos de
un empleado dentro de un párrafo y todos los teléfonos mediante una lista
ordenada (para ello, deberás crear un getter para los teléfonos):
• public static function toHtml(Empleado $emp): string


<br>


<?php
class Empleado
{
    private static int $sueldoTope = 2000;
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
    public function getTelefonos(): array
    {
        return $this->n_tf;
    }
    public function getSueldoTope()
    {
        return self::$sueldoTope;
    }
    public function setSueldoTope(int $sueldo)
    {
        self::$sueldoTope = $sueldo;
    }

    public static function toHtml(Empleado $emp): string
    {
        $lista = $emp->getTelefonos();
        $html =
            "
        <p>
        <ul>";
        //En una misma variable puedo guardar una concatenacion de strings operada por php

        foreach ($lista as $key => $value) {
            $html .= "<li>" . "el numero " . $key . "  tiene el valor" . htmlspecialchars($value) . "</li>";
        }
        $html .= "
        </ul>
        </p>
        ";
        return $html;
    }
}
$jose = new Empleado("Jose Antonio", "Román Moreno", 3332);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
$jose->anyadirTelefono(1231231);
echo Empleado::toHtml($jose);
