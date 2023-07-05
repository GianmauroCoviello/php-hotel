<?php
    // inserito l'array associativo
    include __DIR__ . '/partials/vars.php'

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- table inserita -->
                <table class="table">
                    <thead>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Parcheggio</th>
                        <th>Voto</th>
                        <th>distanza dal centro</th>
                    </thead>
                    <tbody>
                        <!-- vengono ciclati i tr -->
                        <?php foreach($hotels as $hotel ) {?>
                            <tr>
                                <!-- inseriti le chiavi con i propri valori all'interno dei td -->
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td>
                                    <?php 
                                        echo $hotel['parking'] ;
                                        
                                        if ($hotel['parking'] === true) {
                                            
                                            echo 'SI';
                                       
                                            
                                        } else {
                                            echo 'NO';
                                            
                                        }
                                

                                    ?>
                                </td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center']; ?>m</td>                        
                            </tr>
                        
                        <?php } ?>

                    </tbody>
                    
                    
                </table>


            </div>
        </div>
    </div>

      
    
    
</body>
</html>