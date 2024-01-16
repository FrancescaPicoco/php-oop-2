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
    <?php foreach($items as $articolo) ?>
    <ul>
        <li><?= $products->img ?></li>
        <li><?= $products->name ?></li>
    </ul>
    </div> 
</body>
</html>
