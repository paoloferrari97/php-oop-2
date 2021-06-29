<?php

class Persona
{
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $comuneResidenza;

    public function __construct($nome, $cognome, $eta, $comuneResidenza)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->comuneResidenza = $comuneResidenza;
    }

    public function getNomeCompleto()
    {
        return $this->nome . " " . $this->cognome;
    }

    public function setComuneResidenza($comun)
    {
        $this->comuneResidenza = $comun;
    }
}

class Studente extends Persona
{
    protected $università;
    protected $indirizzo;

    public function __construct($nome, $cognome, $eta, $comuneResidenza, $università, $indirizzo)
    {
        parent::__construct($nome, $cognome, $eta, $comuneResidenza);
        $this->università = $università;
        $this->indirizzo = $indirizzo;
    }

    public function getUniversità()
    {
        return $this->università;
    }

    public function setIndirizzo($indiriz)
    {
        $this->indirizzo = $indiriz;
    }
}