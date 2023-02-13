<?php

class Hotel
{
    private string $nom;
    private string $rue;
    private int $codePostale;
    private string $ville;

    public function __construct($nom, $rue, $codePostale, $ville)
    {
        $this->nom = $nom;
        $this->rue = $rue;
        $this->codePostale = $codePostale;
        $this->ville = $ville;

    }

    // get et set de $nom
    public function getNom()
    {
        echo "le nom de l'hotel est $this->nom<br>";
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        echo "le nouveau nom de l'hotel est $this->nom<br>";
    }
    // get et set de $codePostale
    public function getCodePostale()
    {
        echo "le code postale de l'hotel est $this->codePostale<br>";
    }
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
        echo "le nouveau code postale de l'hotel est $this->codePostale<br>";
    }
    // get et set de $rue
    public function getRue()
    {
        echo "la rue de l'hotel est $this->rue<br>";
    }
    public function setRue($rue)
    {
        $this->rue = $rue;
        echo "la nouvelle rue de l'hotel est $this->rue<br>";
    }
    // get et set de $ville
    public function getVille()
    {
        echo "la ville de l'hotel est $this->ville<br>";
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
        echo "la nouvelle rue de l'hotel est $this->ville<br>";
    }

    public function __toString()
    {
        return "$this->nom";
    }
}