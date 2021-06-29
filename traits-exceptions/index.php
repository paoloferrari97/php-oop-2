<?php

class Persona
{
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $comuneResidenza;

    public function __construct(string $nome, string $cognome, int $eta, string $comuneResidenza)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->comuneResidenza = $comuneResidenza;
    }

    public function getNomeCompleto()
    {
        return $this->nome . " " . $this->cognome;
    }

    public function setComuneResidenza($comun)
    {
        if (!is_string($comun)) {
            throw new Exception("Il comune di residenza inserito non è una stringa!");
        }

        $this->comuneResidenza = $comun;
    }
}

trait getterEta
{
    public function getEta()
    {
        return $this->eta;
    }
}

trait setterUniversità
{
    public function setUniversità($uni)
    {
        $this->università = $uni;
    }
}

class Studente extends Persona
{
    protected $università;
    protected $indirizzo;

    public function __construct(string $nome, string $cognome, int $eta, string $comuneResidenza, string $università, string $indirizzo)
    {
        parent::__construct($nome, $cognome, $eta, $comuneResidenza);
        $this->università = $università;
        $this->indirizzo = $indirizzo;
    }

    public function getUniversità()
    {
        return $this->università;
    }

    public function setIndirizzo($indiriz)
    {
        $this->indirizzo = $indiriz;
    }

    use getterEta;

    use setterUniversità;
}

$paolo = new Persona("Paolo", "Ferrari", 24, "Brescia");

$mario = new Studente("Mario", "Mariotti", 42, "Bergamo", "UNIBG", "Giurisprudenza");

try {
    echo $paolo->setComuneResidenza(75);
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>