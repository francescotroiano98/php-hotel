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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
    <body>


    <table class="table">
        
  <thead>
    
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hotel Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance to the center</th>
    </tr>
    
  </thead>
  <tbody>
  
    <tr>
    <?php foreach ($hotels as $singleHotel) { ?>
      <th scope="row">1</th>
      <td><?php echo $singleHotel['name'] . ' '; ?></td>
      <td><?php echo $singleHotel['description'] . ' '; ?></td>
      <td><?php echo $singleHotel['parking'] ? 'true' : 'false';  ?></td>
      <td><?php echo $singleHotel['vote']; ?></td>
      <td><?php echo $singleHotel['distance_to_center']; ?></td>
    </tr>
    <?php } ?>
   
  </tbody>
  
</table>
       
    </body>
</html>
