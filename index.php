<?php

require_once './classes/Pokemon.php';
include 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon-habitat/');
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'



$pokemon1 = new Pokemon('Pikachu', 'elec', 300,'attack', 60,'attack', 40,'attack', 20,'attack', 10);
$pokemon2 = new Pokemon('Dracaufeu', 'feu', 400, 'attack', 100, 'attack', 80, 'attack', 60, 'attack', 40);



$pokemon1->attacked($pokemon2->attack());


// print_r($pokemon1);

echo $pokemon1->__get('health');