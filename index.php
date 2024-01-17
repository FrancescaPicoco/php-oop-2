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
        <?php foreach($items as $articolo) : ?>
            <h1> <?= count($Items) ?> </h1>
            <h1> <?= get_class($articolo) . " for " . $articolo->Type->getItemTypology() ?></h1>
        <ul>
            <li>
                <?= $articolo->img ?>
            </li>
            <li>
                <?= $articolo->Type->name ?>
            </li>
        </ul>
        <?php endforeach; ?>
    </div> 
</body>
</html>
