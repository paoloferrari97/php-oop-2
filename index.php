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
}

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

$asus = new Computer("ROG Zephyrus", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias veniam dolores, deserunt vero voluptatum dicta doloribus commodi officia ullam quisquam quos blanditiis repellendus odit. Tenetur aperiam nobis architecto quos quod?", 1799.99, 2, "Asus", "16GB");

var_dump($asus);

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

$lacoste = new Maglietta("Lacoste", "Lorem ipsum dolor sit amte consectetur adipiscing elit.", 49.99, 13, "Verde", "M");

var_dump($lacoste);