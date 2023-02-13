<?php

class Reservation
{
    private DateTime $dateDebutDeReservation;
    private DateTime $dateFinDeReservation;
    private Chambre $chambreReserver;
    private Client $client;
    private Hotel $hotelName;
    private array $reservationHotel;

    public function __construct($dateDebutDeReservation, $dateFinDeReservation, $chambreReserver, $client, $hotelName)
    {
        $this->dateDebutDeReservation = new DateTime($dateDebutDeReservation);
        $this->dateFinDeReservation = new DateTime($dateFinDeReservation);
        $this->chambreReserver = $chambreReserver;
        $this->client = $client;
        $this->hotelName = $hotelName;
        $this->reservationHotel = [];
        $this->ajouterReservationHotel($this);
    }

    // methode pour ajouter une reservation
    public function ajouterReservationHotel(Reservation $reservationHotelTotal)
    {
        $this->reservationHotel[] = $reservationHotelTotal;
    }

    public function __toString()
    {
        $dateDebutDeReservation = $this->dateDebutDeReservation->format('Y-m-d');
        $dateFinDeReservation = $this->dateFinDeReservation->format('Y-m-d');
        return "$this->hotelName - $this->client - Chambre $this->chambreReserver - $dateDebutDeReservation au $dateFinDeReservation<br>";
    }
}