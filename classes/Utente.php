<?php

class Utente
{
    public $nome;
    public $cognome;
    protected $eta;
    protected $cittadinanza;

    function __construct(string $nome, string $cognome, int $eta, string $cittadinanza)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->cittadinanza = $cittadinanza;
    }

    public function setCartaCredito($carta)
    {
        /* $this->CartaDiCredito = [];
        $this->CartaDiCredito["circuito"] = $carta->circuito;
        $this->CartaDiCredito["annoScadenza"] = $carta->annoScadenza;
        $this->CartaDiCredito["numeroCarta"] = $carta->numeroCarta; */
        $this->CartaDiCredito = $carta;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function getCittadinanza()
    {
        return $this->cittadinanza;
    }
}