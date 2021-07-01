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

    public function getCircuito()
    {
        return $this->circuito;
    }

    public function getScadenza()
    {
        return $this->annoScadenza;
    }

    public function getNumero()
    {
        return $this->numeroCarta;
    }
}