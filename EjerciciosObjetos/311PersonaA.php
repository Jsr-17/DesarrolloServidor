Copia la clase del ejercicio anterior en 307Empleado.php y
modifícala.
Crea una clase Persona que sea padre de Empleado, de manera que Persona
contenga el nombre y los apellidos, y en Empleado quede el salario y los
teléfonos.

<?php



abstract class Persona
{
    public function __construct(private string $nombre = "", private string $apellido = "", private int $edad = 0) {}

    function obtenerNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }
    function getEdad(): int
    {
        return  $this->edad;
    }
    function setEdad(int $edad)
    {
        $this->edad = $edad;
    }
    public abstract function toHtml(Persona $emp);
}

class Empleado extends Persona
{
    private static int $sueldoTope = 2000;

    public function __construct(
        string $nombre = "",
        string $apellido = "",
        int $edad,
        private int $sueldo = 1000,
        private array $n_tf = []
    )
    //Pongo un valor predefinido para que asi no sea obligatorio el usar parametros si no que php ya tenga asignados en memoria un valor predefinido para ellos
    {
        parent::__construct($nombre, $apellido, $edad);
    }
    function debePagarImpuestos(): bool
    {
        if ($this->getEdad() > 21) {


            if ($this->sueldo >= self::$sueldoTope) {
                return true;
            }
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
    public  function toHtml(Persona $emp): string
    {
        if ($emp instanceof Empleado) {


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
        } else {
            return "no data avainabel";
        }
    }
}
$jose = new Empleado("Jose antonio", "roman moreno", 22);
echo $jose->obtenerNombreCompleto();
