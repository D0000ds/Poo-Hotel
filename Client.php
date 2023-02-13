<?php

class Client
{
    private string $nom;
    private string $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;

    }

    // get et set de $nom
    public function getNom()
    {
        echo "le nom est $this->nom<br>";
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        echo "le nouveau nom est $this->nom<br>";
    }
    // get et set de $prenom
    public function getPrenom()
    {
        echo "le prenom est $this->prenom<br>";
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        echo "le nouveau prenom est $this->prenom<br>";
    }

    public function __toString()
    {
        return "$this->nom $this->prenom";
    }
}