<?php

class Chambre
{
    private int $numero;
    private bool $isreserve;
    private float $prix;
    private int $nbDeLit;
    private bool $wifi;

    public function __construct($numero, $prix, $nbDeLit, $wifi, $isreserve)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->nbDeLit = $nbDeLit;
        $this->wifi = $wifi;
        $this->isreserve = $isreserve;
    }

    // get et set de $numero
    public function getNumero()
    {
        echo "le numero est $this->numero<br>";
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
        echo "le nouveau numero est $this->numero<br>";
    }
    // get et set de $prix
    public function getPrix()
    {
        echo "le prix est $this->prix<br>";
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
        echo "le nouveau prix est $this->prix<br>";
    }
    // get et set de $nbDeLit
    public function getNbDeLit()
    {
        echo "le nombre de lit est $this->nbDeLit<br>";
    }
    public function setNbDeLit($nbDeLit)
    {
        $this->nbDeLit = $nbDeLit;
        echo "le nouveau nombre de lit est $this->nbDeLit<br>";
    }
    // get et set de $wifi
    public function getWifi()
    {
        echo "le wifi est $this->wifi<br>";
    }
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
        echo "le nouveau wifi est $this->wifi<br>";
    }
    // get et set de $isreserve
    public function getIsreserve()
    {
        echo "Reserver est $this->isreserve";
    }
    public function setIsreserve($isreserve)
    {
        $this->isreserve = $isreserve;
        echo "la nouvelle reservation est $this->isreserve";
    }

    public function __toString()
    {
        return "$this->numero";
    }
}