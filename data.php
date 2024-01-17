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
        "Casa nido per pipistrelli realizzata in legno di pino e dipinta a mano, con pittura certificata ecologica a base d'acqua.",
        $bats,
        ["Legno"],
        "Esterno",
        "26,5x17,7x12,4 cm",
    ),
    new Foods(
        "img2",
        "Prodotto Alimentare",
        "10,99€",
        "Descrizione del prodotto alimentare.",
        $snakes,
        "Lorem",
        "2,5kg",
    ),
    new Lamps(
        "img3",
        "Lampada da Tavolo",
        "39,99€",
        "Descrizione della lampada da tavolo.",
        $spiders,
        "Nero",
        "110V",
        "60W"
    )

];