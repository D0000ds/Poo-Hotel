<?php

require('Client.php');
require('Hotel.php');
require('Chambre.php');
require('Reservation.php');

$h1 = new Hotel("Hilton ****Strasbourg", "10 route de la gare", 67000, "STRASBOURG");

$c1 = new Chambre(3, 120, 2, TRUE, false);
$c2 = new Chambre(1, 100, 1, FALSE, false);
$c3 = new Chambre(2, 200, 3, FALSE, false);

$cl1 = new Client("Martin", "Mystere");
$cl2 = new Client("Droupas", "Ratatra");
$cl3 = new Client("Drobie", "Varime");

$r1 = new Reservation("2023-03-03","2023-03-05", $c1, $cl1,$h1);
$r2 = new Reservation("2023-04-11","2023-04-15", $c2, $cl3,$h1);
$r3 = new Reservation("2023-05-01","2023-05-06", $c3, $cl2,$h1);

echo $r3;