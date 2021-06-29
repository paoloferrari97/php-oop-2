<?php

class UtentePremium extends Utente
{
    protected $durataMesiAbbonamento;
    protected $sconto = 15;

    function __construct(string $nome, string $cognome, int $eta, string $cittadinanza, float $durataMesiAbbonamento)
    {
        parent::__construct($nome,  $cognome,  $eta,  $cittadinanza);
        $this->durataMesiAbbonamento = $durataMesiAbbonamento;
    }
}