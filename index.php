<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere, servizi unici per una vacanza da sogno',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro, l hotel dei tuoi sogni, il futuro è nelle tue mani',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare, per chi ama godersi un hotel vista mare, a due passi dalla spiaggia',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista, fra montagne e laghi, l/hotel più unico che ci sia',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano, sei a milano e non sai dove pernottare? Questa è la scelta giusta per te!',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<h1> Prenota l'hotel che fa più al tuo caso </h1>";
    echo "<div class='general'>";
    

    foreach ($hotels as $hotel) {
        echo "<div class='biglietto-hotel'>";
        echo "<div class='card'>";
            echo "<h2>" . $hotel['name'] . "</h2>";
            echo "<p>" . $hotel['description'] . "</p>";
            echo "<p><strong>Parking: </strong>" . ($hotel['parking'] ? 'Yes' : 'No') . "</p>"; /* verifico se l'hotel ha il parcheggio con un
                                                                                                 operatore ternario */
            echo "<strong><p>Vote: </strong>" . $hotel['vote'] . "</p>";
        echo "</div>";
        echo "</div>";
    }

    echo "</div>";
    ?>
</body>
</html>