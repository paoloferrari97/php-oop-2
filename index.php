<?php

require __DIR__ . "/classes/Prodotto.php";
require __DIR__ . "/classes/Computer.php";
require __DIR__ . "/classes/Maglietta.php";
require __DIR__ . "/classes/Utente.php";
require __DIR__ . "/classes/UtentePremium.php";
require __DIR__ . "/classes/UtenteAnziano.php";
require __DIR__ . "/classes/CartaCredito.php";



$asus = new Computer("ROG Zephyrus", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias veniam dolores, deserunt vero voluptatum dicta doloribus commodi officia ullam quisquam quos blanditiis repellendus odit. Tenetur aperiam nobis architecto quos quod?", 1799.99, 2, "Asus", "16GB");

var_dump($asus);


$lacoste = new Maglietta("Lacoste", "Lorem ipsum dolor sit amte consectetur adipiscing elit.", 49.99, 13, "Verde", "M");

var_dump($lacoste);




$paolo = new UtentePremium("Paolo", "Ferrari", 24, "Italiana", "12");

var_dump($paolo);


$mario = new UtenteAnziano("Mario", "Mariotti", 67, "Italiana");

var_dump($mario);

$asus->setSconto(13);

var_dump($asus);



$cartaPaolo = new CartaCredito("Visa", 2022, 54546);

var_dump($cartaPaolo);

//var_dump($cartaPaolo->circuito);

$paolo->setCartaCredito($cartaPaolo);

var_dump($paolo);