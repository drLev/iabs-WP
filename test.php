<?php
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    array("name"=>"Two", "point" => 2),
    array("name"=>"Three", "point" => 3 ),
    array("name"=>"Four", "point" => 4 ),
    array("name"=>"Five", "point" => 5 ),
    array("name"=>"Six", "point" => 6 ),
    array("name"=>"Seven", "point" => 7 ),
    array("name"=>"Eight", "point" => 8 ),
    array("name"=>"Nine", "point" => 9 ),
    array("name"=>"Ten", "point" => 10 ),
    array("name"=>"Jack", "point" => 10 ),
    array("name"=>"Queen", "point" => 10 ),
    array("name"=>"King", "point" => 10 ),
    array("name"=>"Ace", "point" => 11 )
);

$cards = [];

foreach ($faces as $face) {
    foreach ($suits as $suit) {
        $cards[] = [
            'name' => $face['name'],
            'point' => $face['point'],
            'suit' => $suit
        ];
    }
}
print_r($cards);