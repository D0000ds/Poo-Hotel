
<?php

class Chambre
{
    private int $numero;
    private float $prix;
    private int $nbDeLit;
    private bool $wifi;
    private array $reservationsChambre;
    private Hotel $hotel;
    private bool $isReserve;

    public function __construct($numero, $prix, $nbDeLit, $wifi, $hotel)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->nbDeLit = $nbDeLit;
        $this->wifi = $wifi;
        $this->reservationsChambre = [];
        $this->hotel = $hotel;
        $hotel->ajouterUneChambre($this);
        $this->isReserve = FALSE;
    }

    // get et set de $numero
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
        echo "le nouveau numero est $this->numero<br>";
    }
    // get et set de $prix
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
        echo "le nouveau prix est $this->prix<br>";
    }
    // get et set de $nbDeLit
    public function getNbDeLit()
    {
        return $this->nbDeLit;
    }
    public function setNbDeLit($nbDeLit)
    {
        $this->nbDeLit = $nbDeLit;
        echo "le nouveau nombre de lit est $this->nbDeLit<br>";
    }
    // get et set de $wifi
    public function getWifi()
    {
        if ($this->wifi == True)
        {
            return "oui";
        }
        else 
        {
            return "non";
        }
    }
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
        echo "le nouveau wifi est $this->wifi<br>";
    }

    // methode pour ajouter une reservation a la chambre
    public function ajouterReservationChambre(Reservation $reservationChambreTotal)
    {
        $this->reservationsChambre[] = $reservationChambreTotal;
    }

    // permet de reservé une chambre
    public function isReserve()
    {
        $this->isReserve = True;
    }

    // methode pour afficher les reservation de la chambre
    public function afficherReservationChambre()
    {
        foreach($this->reservationsChambre as $reservation)
        {
            echo $reservation;
        }
    }

    // methode pour afficher une fontawsome wifi
    public function wifiEmote()
    {
        if ($this->wifi == TRUE)
        {
            return '<i class="fa-solid fa-wifi"></i>';
        }
        else
        {
            return '<i class="fa-solid fa-wifi-slash"></i>';
        }
    }

    // methode pour voir si une chambre est reservé
    public function statusIsReserve()
    {
        if ($this->isReserve == TRUE)
        {
            return "<span>Réservée</span><br>";
        }
        else
        {
            return "<span>Disponible</span><br>";
        }
    }

    public function __toString()
    {
        return "Chambre $this->numero";
    }
}