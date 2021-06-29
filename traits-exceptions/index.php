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
}

class Studente extends Persona
{
}