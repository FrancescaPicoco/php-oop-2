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
    <ul>
        <li><?= $articolo->img ?></li>
        <li><?= $articolo->name ?></li>
    </ul>
    <?php endforeach; ?>
    </div> 
</body>
</html>
