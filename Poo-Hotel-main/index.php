<?php

require('Client.php');
require('Hotel.php');
require('Chambre.php');
require('Reservation.php');

$h1 = new Hotel("Hilton ****Strasbourg", "10 route de la gare", 67000, "STRASBOURG");
$h2 = new Hotel("Regent ****Paris", "14 route de la chance", 75000, "PARIS");

$c1 = new Chambre(1, 120, 2, TRUE, $h1);
$c2 = new Chambre(2, 100, 1, FALSE, $h1);
$c3 = new Chambre(3, 200, 3, FALSE, $h1);
$c4 = new Chambre(4, 250, 1, TRUE, $h1);

$cl1 = new Client("Martin", "Mystere");
$cl2 = new Client("Droupas", "Ratatra");
$cl3 = new Client("Drobie", "Varime");

$r1 = new Reservation("2023-03-03","2023-03-05", $c1, $cl1,$h1);
$r2 = new Reservation("2023-04-11","2023-04-15", $c2, $cl3,$h1);
$r3 = new Reservation("2023-05-01","2023-05-06", $c3, $cl2,$h1);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/756e95885c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>


<body>
    <h1> HOTEL POO
    </h1>

    <?php
$h1->infosHotel();
$h1->infosHotelReservation();

$cl1->infosClientReservation();

$h1->statusHotel();


?>
</body>
</html>