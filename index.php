<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php 
require __DIR__ . '/data.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PetsCare</title>
</head>
<body>
    <div class="container-sm dark">
        <h1 class="text-center mt-3 pt-3">ALL FOR Y&#10084;UR PETS</h1>
        <div class="container-sm dark d-flex flex-wrap">
            <?php foreach($Items as $articolo) : ?>  
                <div class="card size-card">
                  <img src="<?= $articolo->img ?>" class="card-img-top">
                  <h5><?= $articolo->name?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?= get_class($articolo) . "per" . $articolo->getTypology() ?></h5>
                        <p class="card-text"> <?= $articolo->descr ?> </p>
                        <bold><?= $articolo->price?></bold>
                        <p><?= (isset($articolo->materials)) ? "Materiali-" . $articolo->materials . "-" : "" ?></p>
                        <p><?= (isset($articolo->location)) ? "Luogo:" . $articolo->location : ""?></p>
                        <p><?= (isset($articolo->size)) ? "Dimensioni:" . $articolo->size : ""?></p>
                        <p><?= (isset($articolo->taste)) ? "Gusto=" . $articolo->taste : ""?></p>
                        <p><?= (isset($articolo->kg)) ? "Kg:" . $articolo->kg : ""?></p>
                        <p><?= (isset($articolo->colore)) ? "Colore:" . $articolo->colore : ""?></p>
                        <p><?= (isset($articolo->voltaggio)) ? "Voltaggio" . $articolo->voltaggio : ""?></p>
                        <p><?= (isset($articolo->potenza)) ? "potenza:" . $articolo->potenza : ""?></p>
                        <a href="#" class="btn btn-primary">Buy It</a>
                    </div>
                </div> 
            <?php endforeach; ?>
            </div>    
        <h1> 
            <?= count($Items) ?> 
        </h1>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

