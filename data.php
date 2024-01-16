<?php
require_once __DIR__ . '/MODELS/Boxes.php';
require_once __DIR__ . '/MODELS/Foods.php';
require_once __DIR__ . '/MODELS/Lamps.php';

$bats = new Type("Pipistrelli");
$spiders = new Type("Ragni");
$snakes = new Type("Serpenti");

$Items = [
    new Boxes(
        "img",
        "Casetta per Pipistrelli",
        "21,44€",
        "Casa nido per pipistrelli realizzata in legno di pino e dipinta in modo artigianale e a mano, con pittura certificata ecologica a base d'acqua.",
        $bats,
        // "Legno",
        // "Esterno",
        // "26,5x17,7x12,4 cm",
    )
];