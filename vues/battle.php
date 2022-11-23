<?php

require_once __DIR__.'/../includes/header.php';
// require_once __DIR__.'/../functions.php';
require_once __DIR__.'/../controllers/choice-controller.php';


$user = create_user($_SESSION['name']);
$ia = create_ia($pokemonsArray);
$currentUserPokemonNbr = 1;
$currentIaPokemonNbr = 1;
$currentIaPokemon = 'pokemon_'.$currentIaPokemonNbr;
$currentUserPokemon = 'pokemon_'.$currentUserPokemonNbr;
while(($ia->pokemon_3->__get('health') > 0) and ($user->pokemon_3->__get('health')) > 0) {
    $ia->$currentIaPokemon->attacked($user->$currentUserPokemon->attack());
    $user->$currentUserPokemon->attacked($ia->$currentIaPokemon->attack());
    if($ia->$currentIaPokemon->__get('health') <= 0 and $currentIaPokemonNbr < 3) {
        $currentIaPokemonNbr++;
    }
    elseif($user->$currentUserPokemon->__get('health') <= 0 and $currentUserPokemonNbr < 3) {
        $currentUserPokemonNbr++;
    }
}

 


?>
<main class="main__wrapper">
    <div class="battle__top">
        <div class="battle__info">
            <div class="battle-info__top">
            <div class="pokemon__info">
                <div class="info__top">
                    <p><?= $ia->__get('pokemon_1')->__get('name') ?></p>
                    <p>Lvl 54</p>
                </div>
                <div class="info__mid">
                    <p>PV</p>
                    <div class="pv__container">
                        <div class="pv"></div>
                    </div>
                </div>
                <div class="info__bottom">
                    <p>250/250 Pv</p>
                </div>
            </div>
            <div class="pokemon__plateforme">
                <img class="sprite-front" src="<?= $ia->__get('pokemon_1')->__get('front_sprite')  ?>" alt="">
            </div>
            </div>
            <div class="battle-info__bottom">
                <div class="battle__tchat">
                    <p>XXX a perdu 250 pv</p>
                </div>
                <div class="pokemon__plateforme">
                    <img class="sprite-back" src="<?= $user->__get('pokemon_1')->__get('back_sprite') ?>" alt="">
                </div>
                <div class="pokemon__info">
                    <div class="info__top">
                        <p><?= $user->__get('pokemon_1')->__get('name') ?></p>
                        <p>Lvl 54</p>
                    </div>
                    <div class="info__mid">
                        <p>PV</p>
                        <div class="pv__container">
                            <div class="pv"></div>
                        </div>
                    </div>
                    <div class="info__bottom">
                        <p>250/250 Pv</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="battle__bottom">
        <a class="btn__a" href="../vues/result.php">
            <div class="battle__btn__top">
                Attaquer
            </div>
        </a>
        <a class="btn__a" href="../controllers/end_game.php">
            <div class="battle__btn__bottom">
                Fuire
            </div>
        </a>
        
    </div>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>