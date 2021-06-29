<?php

class UtenteAnziano extends Utente
{
    protected $sconto = 20;

    function __construct(string $nome, string $cognome, int $eta, string $cittadinanza)
    {
        parent::__construct($nome,  $cognome,  $eta,  $cittadinanza);
    }
}