<?php

class Maglietta extends Prodotto
{
    public $colore;
    public $taglia;

    function __construct(string $nome, string $desc, float $prezzo, int $quantitàDisponibile, string $colore, string $taglia)
    {
        parent::__construct($nome,  $desc,  $prezzo,  $quantitàDisponibile);
        $this->colore = $colore;
        $this->taglia = $taglia;
    }
}