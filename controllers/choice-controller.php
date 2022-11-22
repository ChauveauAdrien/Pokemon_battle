<?php

include '../vendor/autoload.php';
require_once '../classes/Player.php';
require_once '../classes/Pokemon.php';
require_once '../functions.php';


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
    return $result;
}


if(isset($_POST) and !empty($_POST)) {
    create_user("Maxime");
    create_ia($pokemonsArray);
    header('Location: ../vues/battle.php');
}
















?>