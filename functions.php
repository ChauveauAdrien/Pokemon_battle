<?php 

require_once __DIR__.'/vues/battle.php';
 



function fight($object1, $object2) {
    $infos = [];
    $user = $object1;
    $ia = $object2;
    $currentUserPokemonNbr = 1;
    $currentIaPokemonNbr = 1;
    $currentIaPokemon = 'pokemon_'.$currentIaPokemonNbr;
    $currentUserPokemon = 'pokemon_'.$currentUserPokemonNbr;

    $ia->$currentIaPokemon->attacked($user->$currentUserPokemon->attack());
    $user->$currentUserPokemon->attacked($ia->$currentIaPokemon->attack());
    if($ia->$currentIaPokemon->__get('health') <= 0 and $currentIaPokemonNbr < 3) {
        $currentIaPokemonNbr++;
    }
    elseif($user->$currentUserPokemon->__get('health') <= 0 and $currentUserPokemonNbr < 3) {
        $currentUserPokemonNbr++;
    }
    array_push($infos, $currentIaPokemonNbr, $currentUserPokemonNbr);
    return $infos;

}









?>