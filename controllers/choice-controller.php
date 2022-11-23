<?php



require_once __DIR__.'/../classes/Player.php';
require_once __DIR__.'/../classes/Pokemon.php';

$pokemonsArray = [
    1 => 'pikachu',
    2 => 'blastoise',
    3 => 'charizard',
    4 => 'charmander',
    5 => 'venusaur',
    6 => 'pidgeot',
    7 => 'nidoqueen',
    8 => 'nidoking',
    9 => 'alakazam',
    10 => 'gengar',
    11 => 'rapidash',
    12 => 'onix',
    13 => 'gyarados',
    14 => 'lapras',
    15 => 'eevee',
    16 => 'dragonite',
    17 => 'mewtwo',
    18 => 'meganium',
    19 => 'typhlosion',
    20 => 'steelix'
];

session_start();
  



include __DIR__.'/../vendor/autoload.php';

    
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

// pretty_print_r($_POST);
// pretty_print_r($_SESSION);

function create_user(string $name) {
    $user = new Player("0",0,0,0);
    $user->__set('user_name', $name);
    $i = 1;
    foreach($_SESSION['user_pokemons'] as $key => $value) { 
        $value = $value;
        $pokemon = $_SESSION['user_pokemons'][$key];
        $url =  'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
        $result = make_request(get_client(), $url);
        $health = $result->stats[0]->base_stat;
        $attack1Damages = $result->stats[1]->base_stat;
        $attack2Damages = $result->stats[3]->base_stat;
        $type = $result->types[0]->type->name;
        $front_sprite = $result->sprites->front_default;
        $back_sprite = $result->sprites->back_default;
        $pokemon = new Pokemon($pokemon,$type,$health,$attack1Damages ,$attack2Damages, $front_sprite, $back_sprite);
        $attribute_to_modify = 'pokemon_'.$i;
        $i++;
        $user->__set($attribute_to_modify, $pokemon);
    } 
    return $user;
}

function create_ia($pokemonsArray) {
    $ia = new Player("0",0,0,0);
    $i = 1;
    for($j = 1; $j <= 3; $j++) {
        $pokemonNbr = rand(1, count($pokemonsArray));;
        $pokemon = $pokemonsArray[$pokemonNbr];
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
        $result = make_request(get_client(), $url);
        $health = $result->stats[0]->base_stat;
        $attack1Damages = $result->stats[1]->base_stat;
        $attack2Damages = $result->stats[3]->base_stat;
        $type = $result->types[0]->type->name;
        $front_sprite = $result->sprites->front_default;
        $back_sprite = $result->sprites->back_default;
        $pokemon = new Pokemon($pokemon,$type,$health,$attack1Damages ,$attack2Damages, $front_sprite, $back_sprite);
        $attribute_to_modify = 'pokemon_'.$i;
        $ia->__set($attribute_to_modify, $pokemon);
        $i++;
    }
    return $ia;
}

function create_data_for_user($data) {
    // var_dump($_POST);
    foreach($data as $key => $pokemon) {
        var_dump($key);
        var_dump($pokemon);
        array_push($_SESSION['user_pokemons'], $pokemon);
    }
    // print_r($_SESSION);
}

create_data_for_user($_POST);



if(isset($_POST) and !empty($_POST)) {
    // pretty_print_r(create_user($_SESSION['name']));
    // pretty_print_r(create_ia($pokemonsArray));
    header('Location: ../vues/battle.php');
}













?>