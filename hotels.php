<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>
<ul>
    <?php foreach($hotels as $hotel) { ?>
        <li>
            <h2> <?php echo $hotel["name"]; ?> </h2>
            <p> <?php echo $hotel["description"]; ?> </p>
            <span> 
                <?php 
                if($hotel["parking"] == 1 ){
                    echo "True";
                }else{
                    echo "False";
                }
                ?>
            </span>
            <span> <?php echo $hotel["vote"]; ?> </span>
            <span> <?php echo $hotel["distance_to_center"]; ?> </span>
        </li>
    <?php } ?>
</ul>

