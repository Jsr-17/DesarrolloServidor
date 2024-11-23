Copia la clase del ejercicio anterior en 307Empleado.php y
modifícala.
Crea una clase Persona que sea padre de Empleado, de manera que Persona
contenga el nombre y los apellidos, y en Empleado quede el salario y los
teléfonos.

<?php


class Persona
{
    public function __construct(protected string $nombre = "", protected string $apellido = "", protected int $edad = 0) {}

    function obtenerNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }
    function getEdad(): int
    {
        return  $this->edad;
    }
    function getNombre(): string
    {
        return  $this->nombre;
    }
    function setEdad(int $edad)
    {
        $this->edad = $edad;
    }
}
abstract class Trabajador extends Persona
{
    public function __construct($nombre, $apellido, $edad, private array $telefonos, private int $sueldo = 0)
    {
        parent::__construct($nombre, $apellido, $edad);
    }
    public abstract function calculaSueldo();
    public abstract function debePagarImpuestos(): bool;
    public function getTelefonos()
    {
        return $this->telefonos;
    }
    public function setTelefonos($telefono)
    {
        $this->telefonos = [...$this->telefonos, $telefono];
    }
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
}

class Empleado extends Trabajador
{

    public function __construct(
        string $nombre = "",
        string $apellido = "",
        int $edad,
        private int $sueldo = 1000,
        array $telefonos = [],
        private $horasTrabajadas = 0,
        private $precioPorHora = 10
    )
    //Pongo un valor predefinido para que asi no sea obligatorio el usar parametros si no que php ya tenga asignados en memoria un valor predefinido para ellos
    {
        parent::__construct($nombre, $apellido, $edad, $telefonos);
    }
    function debePagarImpuestos(): bool
    {
        if ($this->getEdad() > 21) {

            return true;
        }
        return false;
    }
    public function anyadirTelefono(int $telefono)
    {
        $this->setTelefonos($telefono);
    }

    public function vaciarTelefonos()
    {
        $this->setTelefonos([]);
    }
    public function calculaSueldo(): int
    {
        $total = 0;
        for ($i = 0; $i < $this->horasTrabajadas; $i++) {
            $total += $this->precioPorHora;
        }
        return $total;
    }
    public function getHoras()
    {
        return $this->horasTrabajadas;
    }
    public function setHoras(int $horas)
    {
        $this->horasTrabajadas = $horas;
    }
}
class Gerente extends Trabajador
{

    public function __construct(
        string $nombre = "",
        string $apellido = "",
        int $edad,
        private int $sueldo = 1000,
        array $telefonos = [],
        private $salario = 0

    )
    //Pongo un valor predefinido para que asi no sea obligatorio el usar parametros si no que php ya tenga asignados en memoria un valor predefinido para ellos
    {
        parent::__construct($nombre, $apellido, $edad, $telefonos);
    }
    function debePagarImpuestos(): bool
    {
        if ($this->getEdad() > 21) {

            return true;
        }
        return false;
    }
    public function anyadirTelefono(int $telefono)
    {
        $this->setTelefonos($telefono);
    }

    public function vaciarTelefonos()
    {
        $this->setTelefonos([]);
    }
    public function calculaSueldo(): int
    {
        $total = $this->salario + $this->salario * $this->edad / 100;
        return $total;
    }
}

class Empresa
{
    public function __construct(protected string $name = "", protected string $direccion = "", protected array $almacen = []) {}
    public function anyadirTrabajador(Trabajador $t)
    {
        $this->almacen = [...$this->almacen, $t];
    }
    public function listarTrabajadoresHtml(): string
    {
        $listado = "<ul>";

        foreach ($this->almacen as $key => $value) {
            $listado .= "<li>" . htmlspecialchars($value->getNombre()) . "<li>";
        }

        $listado .= "</ul>";
        return $listado;
    }
    public function getCosteNominas(): float
    {
        $total = 0;
        foreach ($this->almacen as $key => $value) {
            $total = $value->calculaSueldo();
            echo "El trabajador cobra " . $value->getNombre() . "  " . $total . "<br>";
        }
        return $total;
    }
}

$jose = new Empleado("Jose antonio", "roman moreno", 22);
echo "<br>";
$jose->setSueldo(100);
$jose->setHoras(115);
echo "<br>";
$gerente = new Gerente("paco", "ramire", 32, 100, [], 100);
echo "<br>";

$empresa = new Empresa("juanes", "Pakine", []);
$empresa->anyadirTrabajador($jose);
$empresa->anyadirTrabajador($gerente);
$empresa->getCosteNominas();
