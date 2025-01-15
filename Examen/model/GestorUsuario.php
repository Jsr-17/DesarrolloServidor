<?php
include "./Usuario.php";

class GestorUsuario
{
    private $arrayUsuarios = [];

    public function almacenaUsuarios(Usuario $usuario)
    {
        $this->arrayUsuarios = [...$this->arrayUsuarios, $usuario];
    }
    public function buscaUsuario($email): string|Usuario
    {
        foreach ($this->arrayUsuarios as $key => $value) {
            if ($value->getEmail() == $email) {
                return $value;
            }
        }
        return "Usuario no encontrado";
    }
    public function obtieneUsuarios()
    {
        return $this->arrayUsuarios;
    }
    public function setArray($array)
    {
        $this->arrayUsuarios = $array;
    }

}