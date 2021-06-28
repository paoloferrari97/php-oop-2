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
}

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

$paolo = new UtentePremium("Paolo", "Ferrari", 24, "Italiana", "12");

var_dump($paolo);

class UtenteAnziano extends Utente
{
    protected $sconto = 20;

    function __construct(string $nome, string $cognome, int $eta, string $cittadinanza)
    {
        parent::__construct($nome,  $cognome,  $eta,  $cittadinanza);
    }
}

$mario = new UtenteAnziano("Mario", "Mariotti", 67, "Italiana");

var_dump($mario);

$asus->setSconto(13);

var_dump($asus);


class CartaCredito
{
    protected $circuito;
    protected $annoScadenza;
    protected $numeroCarta;

    function __construct(string $circuito, int $annoScadenza, int $numeroCarta)
    {
        $this->circuito = $circuito;
        $this->annoScadenza = $annoScadenza;
        $this->numeroCarta = $numeroCarta;
    }
}

$cartaPaolo = new CartaCredito("Visa", 2022, 54546);

var_dump($cartaPaolo);

//var_dump($cartaPaolo->circuito);

$paolo->setCartaCredito($cartaPaolo);

var_dump($paolo);