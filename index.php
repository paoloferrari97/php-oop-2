<?php

require __DIR__ . "/classes/Prodotto.php";
require __DIR__ . "/classes/Computer.php";
require __DIR__ . "/classes/Maglietta.php";
require __DIR__ . "/classes/Utente.php";
require __DIR__ . "/classes/UtentePremium.php";
require __DIR__ . "/classes/UtenteAnziano.php";
require __DIR__ . "/classes/CartaCredito.php";



$prodotto = [
    $asus = new Computer("ROG Zephyrus", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias veniam dolores, deserunt vero voluptatum dicta doloribus commodi officia ullam quisquam quos blanditiis repellendus odit. Tenetur aperiam nobis architecto quos quod?", 1799.99, 2, "Asus", "16GB"),
    $lacoste = new Maglietta("Lacoste", "Lorem ipsum dolor sit amte consectetur adipiscing elit.", 49.99, 13, "Verde", "M")
];


$utente = [
    $paolo = new UtentePremium("Paolo", "Ferrari", 24, "Italiana", "12"),
    $mario = new UtenteAnziano("Mario", "Mariotti", 67, "Italiana")
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>

<body>

    <h1>Prodotti:</h1>
    <?php foreach ($prodotto as $item) : ?>
    <h3>Nome: <?php echo $item->nome; ?></h3>
    <p>Descrizione: <?php echo $item->desc; ?></p>
    <p>Prezzo: <?php echo $item->prezzo; ?> $</p>
    <?php endforeach ?>

    <h1>Applico sconto al primo prodotto del 40%</h1>
    <?php $asus->setSconto(40); ?>
    <p>Nuovo prezzo: <?php echo $asus->prezzo; ?> $</p>

    <h1>Utenti:</h1>
    <?php foreach ($utente as $el) : ?>
    <h3>Nome: <?php echo $el->nome; ?></h3>
    <h3>Cognome: <?php echo $el->cognome; ?></h3>
    <p>Età: <?php echo $el->getEta(); ?> anni</p>
    <p>Cittadinanza: <?php echo $el->getCittadinanza(); ?></p>
    <?php endforeach ?>

    <h1>Creo nuova carta di credito e la stampo a schermo:</h1>
    <?php $cartaPaolo = new CartaCredito("Visa", 2022, 54546); ?>
    <p>Circuito: <?php echo $cartaPaolo->getCircuito(); ?></p>
    <p>Anno di scadenza: <?php echo $cartaPaolo->getScadenza(); ?></p>
    <p>Numero della carta: <?php echo $cartaPaolo->getNumero(); ?></p>

    <h1>Setto questa carta di credito come se fosse di proprietà dell'utente Paolo Ferrari</h1>
    <?php $paolo->setCartaCredito($cartaPaolo); ?>
    <p>Circuito carta Paolo: <?php echo $paolo->CartaDiCredito->getCircuito(); ?></p>
    <p>Anno scandeza carta Paolo: <?php echo $paolo->CartaDiCredito->getScadenza(); ?></p>
    <p>Numero carta Paolo: <?php echo $paolo->CartaDiCredito->getNumero(); ?></p>

</body>

</html>