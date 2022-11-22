<?php

include '../vendor/autoload.php';
require_once '../classes/Player.php';
require_once '../classes/Pokemon.php';


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
    create_user();
}


function create_user() {
    $user = new Player("0",0,0,0);
    $user->__set('user_name', "Maxime");
    for ($i=1; $i < 4; $i++) { 
        $index = 'pokemon'.$i;
        $pokemon = $_POST[$index];
        $url =  'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
        $result = make_request(get_client(), $url);
        $name = $result->name;
        $health = $result->stats[0]->base_stat;
        $attack1Damages = $result->stats[1]->base_stat;
        $attack2Damages = $result->stats[3]->base_stat;
        $type = $result->types[0]->type->name;
        $pokemon = new Pokemon($name,$type,$health,$attack1Damages ,$attack2Damages);
        $attribute_to_modify = 'pokemon_'.$i;
        $user->__set($attribute_to_modify, $pokemon);
    } 
    print_r($user);
}













?>