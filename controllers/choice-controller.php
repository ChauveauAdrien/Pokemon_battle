<?php

include '../vendor/autoload.php';


use GuzzleHttp\Client;

function pretty_print_r($var): void {
    echo '<pre>' . print_r($var, true) . '</pre>';
}

function get_client() {
    $client = new Client([
        'verify' => false,
        'stream' => false,
    ]);
    return $client;
}

function make_request(Client $client,string $url) {
    $response = $client->get($url);
    $result = $response->getBody()->getContents();
    $resultObject = json_decode($result);
    $result = $resultObject;
    $name = $result->name;
    $attack1Damage = $result->stats[1]->base_stat;
    $attack2Damages = $result->stats[3]->base_stat;
    echo $name.'  '.$attack1Damage.'  '.$attack2Damages;
    pretty_print_r($result->stats);
}


if(isset($_POST) and !empty($_POST)) {
    for ($i=1; $i < 4; $i++) { 
        $index = 'pokemon'.$i;
        $pokemon = $_POST[$index];
        $url =  'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
        make_request(get_client(), $url);
    } 
        
   
}












?>