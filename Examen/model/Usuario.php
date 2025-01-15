<?php
class Usuario
{
    function __construct(private string $name = "", private string $pass = "", private string $email = "")
    {
    }

    public function getName()
    {
        return $this->name;

    }
    public function getPass()
    {
        return $this->pass;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setName(string $data)
    {
        $this->name = $data;
    }
    public function setPass(string $data)
    {
        $this->pass = $data;

    }
    public function setEmail(string $data)
    {
        $this->email = $data;
    }
}
