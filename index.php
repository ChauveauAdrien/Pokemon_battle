<?php

require_once './classes/Pokemon.php';
include 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon/27');
var_dump($response->getBody());


// $pokemon1 = new Pokemon('Pikachu', 'elec', 300, 60, 40, 20, 10);
// $pokemon2 = new Pokemon('Dracofeu', 'feu', 200, 100, 80, 60, 40);



// $pokemon1->attacked($pokemon2->attack());


// print_r($pokemon1);