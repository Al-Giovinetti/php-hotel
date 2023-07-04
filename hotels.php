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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="./hotels.php" methods="get">
        <div class="check">
            <label for="parking">hotel with parking</label>
            <input type="checkbox" name="parking" id="parking" class="">
        </div>
        <div class="check">
            <label for="vote"> higher vote than </label>
            <input type="number" name="vote" id="vote">
        </div>
        <button type="submit">
            Filter
        </button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($hotels as $key => $hotel) { 
            ?>
                <tr>
                    <th scope="row"> <?php echo $key+1 ?> </th>
                    <td> <?php echo $hotel["name"]; ?> </td>
                    <td> <?php echo $hotel["description"]; ?> </td>
                    <td> 
                        <?php 
                            if($hotel["parking"] == 1 ){
                                echo "True";
                            }else{
                                echo "False";
                            }
                        ?>
                    </td>
                    <td> <?php echo $hotel["vote"]; ?> </td>
                    <td> <?php echo $hotel["distance_to_center"]; ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>



        
