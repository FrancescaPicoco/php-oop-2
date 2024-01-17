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
    <title>Document</title>
</head>
<body>
    <div>
        <h1> 
            <?= count($Items) ?> 
        </h1>
        <?php foreach($Items as $articolo) : ?> 
            <h1> <?= get_class($articolo) . " for " . $articolo->getTypology() ?></h1>   
            <ul>
                <li>
                    <?= $articolo->img ?>
                </li>
                <li>
                    <?= $articolo->getTypology()->name ?> <!--Type o get-->
                </li>
            </ul>
        <?php endforeach; ?>
    </div> 
</body>
</html>

