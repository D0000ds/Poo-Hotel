<?php

class Hotel
{
    private string $nom;
    private string $rue;
    private int $codePostale;
    private string $ville;
    private array $reservationsHotel;
    private array $nbDeChambres;



    public function __construct($nom, $rue, $codePostale, $ville)
    {
        $this->nom = $nom;
        $this->rue = $rue;
        $this->codePostale = $codePostale;
        $this->ville = $ville;
        $this->reservationsHotel = [];
        $this->nbDeChambres = [];
        
    }

    // get et set de $nom
    public function getNom()
    {
        return $this->nom;
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


    // methode pour ajouter une reservation a l'hotel
    public function ajouterReservationHotel(Reservation $reservationHotelTotal)
    {
        $this->reservationsHotel[] = $reservationHotelTotal;
    }

    // methode pour avoir le nombre de chambres
    public function ajouterUneChambre(Chambre $chambre)
    {
        $this->nbDeChambres[] = $chambre;
    }

    // methode pour afficher les reservation de l'hotel
    public function afficherReservationHotel()
    {
        foreach($this->reservationsHotel as $reservation)
        {
            echo $reservation;
        }
    }

    // methode pour avoir tout les infos de l'hotel
    public function infosHotel()
    {
        echo "<h2>$this->nom</h2>";
        echo "<span>$this->rue $this->codePostale $this->ville</span><br>";
        echo "<span>nombre de chambres: ".count($this->nbDeChambres)."</span><br>";
        echo "<span>nombre de chambres réservées: ".count($this->reservationsHotel)."</span><br>";
        echo "<span>nombre de chambres dispo: ".count($this->nbDeChambres) - count($this->reservationsHotel)."</span><br>";
    }

    // methode pour voir les reservations d'un hotel
    public function infosHotelReservation()
    {
        echo "<h2>Réservation de l'hôtel $this->nom</h2>";

        if (count($this->reservationsHotel) > 0)
        {
            echo count($this->reservationsHotel)."<span> réservations</span><br>";
            foreach($this->reservationsHotel as $reservation)
            {
                echo $reservation."<br>";
            }
        }
        else
        {
            echo "<span>Aucune réservation !</span><br>";
        }
    }

    // satus des chambres de l'hotel
    public function statusHotel()
    {
        echo "<table><th>Chambre </th><th> Prix</th><th> Wifi</th><th> Etat</th>";
        foreach ($this->nbDeChambres as $chambre)
        {
            echo "<tr><td>$chambre</td><td>".$chambre->getPrix()."</td><td>".$chambre->wifiEmote()."</td><td>".$chambre->statusIsReserve()."</td></tr>";
        }
        echo "</table>";
    }
}