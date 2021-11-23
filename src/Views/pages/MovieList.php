 <?php

use App\Models\Movie;

require_once __DIR__ . '/../layouts/default.php';
 ?>
    <section class='row justify-content-center'>
    
    <?php
    //require_once __DIR__ . '/../../Models/Movie.php';
    $movies = (new Movie())->all();
    foreach ($movies as $movie) {
        echo "
        <div class='card' style='width: 18rem'>
            <img src= {$movie->image} class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>{$movie->title}</h5>
            </div>
        </div>
        ";
    } 
    ?>

    </section>
</body>