<?php

include 'class/Song.php';

$song1 = new Song(1, 'Time of the Season', 'Zombies');
$song2 = new Song(2, 'Get Up (I Feel Like Being a) Sex Machine', 'James Brown');
$song3 = new Song(3, 'Superstition', 'Stevie Wonder');
// pack all the objects in 1 array of objects
$arr = [$song1, $song2, $song3];
// convert php array in a string of a JSON array
$direct = json_encode($arr);

//var_dump($direct);

echo $direct;