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
    pretty_print_r($result->stats);
}


if(isset($_POST) and !empty($_POST)) {
    foreach($_POST as $pokemon) {
        $url =  'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
        make_request(get_client(), $url);
    }
   
}












?>