<?php

class Client
{
    private string $nom;
    private string $prenom;
    private array $reservationsClient;
    

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservationsClient = [];
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

    // methode pour ajouter une reservation au client
    public function ajouterReservationClient(Reservation $reservationClientTotal)
    {
        $this->reservationsClient[] = $reservationClientTotal;
    }

    // methode pour afficher les reservation du client
    public function afficherReservationClient()
    {
        foreach($this->reservationsClient as $reservation)
        {
            echo $reservation;
        }
    }

    // methode pour voir les reservations d'un client
    public function infosClientReservation()
    {
        echo "<h2>Réservation de $this->nom $this->prenom</h2>";

        if (count($this->reservationsClient) > 0)
        {
            echo '<span class="btn btn-success">'.count($this->reservationsClient).' réservations</span><br>';
            foreach($this->reservationsClient as $reservation)
            {
                echo "<strong>Hotel: ".$reservation->getHotel()->getNom()."</strong>/ Chambre: ".$reservation->getChambre()->getNumero()." (".$reservation->getChambre()->getNbDeLit()." lits - ".$reservation->getChambre()->getPrix()." € - Wifi:".$reservation->getChambre()->getWifi().") du ".$reservation->getDateDebut()." au ".$reservation->getDateFin()."<br>";
            }
        }
        else
        {
            echo "<span>Aucune réservation !</span><br>";
        }
        echo "Total: ".$reservation->calculPrix()." €<br>";
    }

    public function __toString()
    {
        return "$this->nom $this->prenom";
    }
}