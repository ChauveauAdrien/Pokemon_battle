<?php
require_once __DIR__.'/includes/header.php';

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

?>
<main class="main__wrapper">
    <div class="main__top">
        <div class="main__tchat">
            <p>Bienvenue jeune dresseur ! <br>Es-tu prêt à entrer dans l'arène Pokemon Battle ?</p>
        </div>
    </div>
    <div class="main__bottom">
        <div class="main__btn btn-left">
            <a class="btn__a" href="">Non</a>
        </div>
        <div class="main__btn btn-right">
            <a class="btn__a" href="/vues/name.php">Oui</a>
        </div>
    </div>


</main>

<?php

require_once __DIR__.'/includes/footer.php';

?>
    
