<?php
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