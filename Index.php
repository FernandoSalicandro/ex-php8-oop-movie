<?php
require_once './Models/Traits.php';
require_once './Db/MovieDb.php';
require_once './Models/Genre.php';
require_once './Models/Movie.php';




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1 class='text-center my-3'>The Boolean Db</h1>
    <hr class='my-3'>
    <div class="container">
        <div class="row row-cols-3 g-3">
            <?php foreach ($movies as $curr_movie): ?>
                <div class="col">
                    <div class="card">
                        <div class="card-title border text-center py-2"><?php echo $curr_movie->getTitle(); ?></div>
                        <div class="card-body">
                            <div class="card-image d-flex justify-content-center"><img src=<?php echo $curr_movie->getImageUrl(); ?> alt="" class='img-resp'></div>
                            <div class="card-text p-2"><?php echo $curr_movie->getDescription(); ?></div>
                            <div class="card-description p-2">
                                <p><?php echo $curr_movie->getGenre(); ?></p>
                            </div>
                            <div class="card-description p-2">
                                <?php if (!empty($curr_movie->getDirector())) : ?>
                                    <p>Regista : <?php echo $curr_movie->getDirector() ?></p>
                                <?php else : ?>
                                    <p>Regista : mancante</p>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </div>


</body>

</html>