<?php
require_once __DIR__.'/includes/header.php';

require_once './classes/Pokemon.php';
include 'vendor/autoload.php';

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

make_request(get_client(), "https://pokeapi.co/api/v2/pokemon/pikachu");

?>
<main class="main__wrapper">
    <div class="main__top">
        <div class="main__tchat">
            <p>Bienvenue jeune dresseur ! <br>Es-tu prêt à entrer dans l'arène Pokemon Battle ?</p>
        </div>
    </div>
    <div class="main__bottom">
        <a class="btn__a" href="">
            <div class="main__btn btn-left">
                Non
            </div>
        </a>
        <a class="btn__a" href="/vues/name.php">
            <div class="main__btn btn-right">
                Oui
            </div>
        </a>
    </div>


</main>

<?php

require_once __DIR__.'/includes/footer.php';

?>
    
