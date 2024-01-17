<?php
require_once __DIR__ . '/MODELS/Boxes.php';
require_once __DIR__ . '/MODELS/Foods.php';
require_once __DIR__ . '/MODELS/Lamps.php';

$bats = "Pipistrelli";
$spiders = "Ragni";
$snakes = "Serpenti";
$src_bat = "./IMG/bat.jpg";
$src_spider = "./IMG/spider.jpg";
$src_snake = "./IMG/snake.jpg";
$Items = [
    new Boxes(
        $src_bat,
        "Casetta per Pipistrelli",
        "21,44€",
        "Casa nido per pipistrelli realizzata in legno di pino e dipinta a mano, con pittura certificata ecologica a base d'acqua.",
        $bats,
        ["Legno"],
        "Esterno",
        "26,5x17,7x12,4 cm",
    ),
    new Foods(
        $src_snake,
        "Prodotto Alimentare",
        "10,99€",
        "Descrizione del prodotto alimentare.",
        $snakes,
        "Lorem",
        "2,5kg",
    ),
    new Lamps(
        $src_spider,
        "Lampada da Tavolo",
        "39,99€",
        "Descrizione della lampada da tavolo.",
        $spiders,
        "Nero",
        "110V",
        "60W"
    )

];