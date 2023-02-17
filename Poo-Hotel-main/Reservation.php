<?php

class Reservation
{
    private DateTime $dateDebutDeReservation;
    private DateTime $dateFinDeReservation;
    private Chambre $chambre;
    private Client $client;
    private Hotel $hotel;

    public function __construct($dateDebutDeReservation, $dateFinDeReservation, $chambre, $client, $hotel)
    {
        $this->dateDebutDeReservation = new DateTime($dateDebutDeReservation);
        $this->dateFinDeReservation = new DateTime($dateFinDeReservation);
        $this->chambre = $chambre;
        $this->client = $client;
        $this->hotel = $hotel;
        $hotel->ajouterReservationHotel($this);
        $client->ajouterReservationClient($this);
        $chambre->ajouterReservationChambre($this);
        $chambre->isReserve();
    }

    // methode qui permet de nous renvoyer le $c1 et ect
    public function getChambre()
    {
        return $this->chambre;
    }

    // methode qui permet de nous renvoyer le $h1 et ect
    public function getHotel()
    {
        return $this->hotel;
    }

    // methode pour avoir la date du debut
    public function getDateDebut()
    {
        $dateDebutDeReservation = $this->dateDebutDeReservation->format('Y-m-d');
        return $dateDebutDeReservation;
    }

    // methode pour avoir la date de fin
    public function getDateFin()
    {
        $dateFinDeReservation = $this->dateFinDeReservation->format('Y-m-d');
        return $dateFinDeReservation;
    }
    
    // calculer le prix d'un sejour
    public function calculPrix()
    {
        $dateDebutDeReservation = $this->dateDebutDeReservation->format('Y-m-d');
        $dateDebutDeReservatioCalcul = strtotime($dateDebutDeReservation);
        $dateFinDeReservation = $this->dateFinDeReservation->format('Y-m-d');
        $dateFinDeReservationCalcul = strtotime($dateFinDeReservation);
        $jourSec = 86400;

        $dateTotal =  $dateFinDeReservationCalcul - $dateDebutDeReservatioCalcul;
        $dateTotal = $dateTotal / $jourSec;

        $prixTotal =  $dateTotal* $this->getChambre()->getPrix();

        return $prixTotal;
    }

    public function __toString()
    {
        $dateDebutDeReservation = $this->dateDebutDeReservation->format('Y-m-d');
        $dateFinDeReservation = $this->dateFinDeReservation->format('Y-m-d');
        return "$this->client - $this->chambre - du $dateDebutDeReservation au $dateFinDeReservation";
    }
}