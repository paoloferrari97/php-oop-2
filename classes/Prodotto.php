<?php

class Prodotto
{
    public $nome;
    public $desc;
    public $prezzo;
    protected $quantitàDisponibile;

    function __construct(string $nome, string $desc, float $prezzo, int $quantitàDisponibile)
    {
        $this->nome = $nome;
        $this->desc = $desc;
        $this->prezzo = $prezzo;
        $this->quantitàDisponibile = $quantitàDisponibile;
    }

    public function setSconto(int $sconto)
    {
        $this->prezzo = ($this->prezzo * (100 - $sconto)) / 100;
        $this->prezzo = round($this->prezzo, 2);
    }
}