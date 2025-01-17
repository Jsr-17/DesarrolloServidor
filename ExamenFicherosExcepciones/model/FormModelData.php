<?php
class FormModelData
{
    public function __construct(private int $id, private string $asignatura, private string $examen, private int $nota, private string $nombre)
    {
    }

    public function getId()
    {
        return $this->id;
    }
    public function getExamen()
    {
        return $this->examen;
    }
    public function getAsignatura()
    {
        return $this->asignatura;
    }
    public function getNota()
    {
        return $this->nota;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
}
