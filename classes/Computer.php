<?php
class Computer extends Prodotto
{
    public $marca;
    public $ram;

    function __construct(string $nome, string $desc, float $prezzo, int $quantitàDisponibile, string $marca, string $ram)
    {
        parent::__construct($nome,  $desc,  $prezzo,  $quantitàDisponibile);
        $this->marca = $marca;
        $this->ram = $ram;
    }
}