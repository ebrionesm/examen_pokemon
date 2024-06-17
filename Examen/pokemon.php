<?php

require_once("tipo.php");

class Pokemon
{
    private int $id;
    private string $nombre;
    private Tipo $tipo;

    private ?Tipo $tipoSecundario;
    private float $peso;
    private float $altura;
    private array $ataques;

    public function __construct(int $id, string $nombre, Tipo $tipo, float $peso, 
    float $altura, array $ataques, ? Tipo $tipoSecundario = NULL)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->ataques = $ataques;
        $this->tipoSecundario = $tipoSecundario;
    }

    public function getId() : int
    {
        return $this->id;
    }
    
    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function getTipo() : Tipo
    {
        return $this->tipo;
    }

    public function getTipoSecundario() : Tipo|NULL
    {
        return $this->tipoSecundario;
    }


    public function getPeso() : float
    {
        return $this->peso;
    }

    public function getAltura() : float
    {
        return $this->altura;
    }

    public function getAtaques() : array
    {
        return $this->ataques;
    }

    
    public function __toString() : string
    {
        return $this->getNombre();
    }
}

?>