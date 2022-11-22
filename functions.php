<?php 

    $pokemonsArray = [
        'pokemon1' => 'pikachu',
        'pokemon2' => 'blastoise',
        'pokemon3' => 'charizard',
    ];


    function create_user(string $name) {
        $user = new Player("0",0,0,0);
        $user->__set('user_name', $name);
        for ($i=1; $i < 4; $i++) { 
            $index = 'pokemon'.$i;
            $pokemon = $_POST[$index];
            $url =  'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
            $result = make_request(get_client(), $url);
            $health = $result->stats[0]->base_stat;
            $attack1Damages = $result->stats[1]->base_stat;
            $attack2Damages = $result->stats[3]->base_stat;
            $type = $result->types[0]->type->name;
            $pokemon = new Pokemon($pokemon,$type,$health,$attack1Damages ,$attack2Damages);
            $attribute_to_modify = 'pokemon_'.$i;
            $user->__set($attribute_to_modify, $pokemon);
        } 
        return $user;
    }

    function create_ia(array $pokemonsArray) {
        $ia = new Player("0",0,0,0);
        for($i=1; $i < 4; $i++) {
            $pokemonNbr = rand(1, (count($pokemonsArray)));
            $pokemonIndexToSelect = 'pokemon'.$pokemonNbr;
            $pokemon = $pokemonsArray[$pokemonIndexToSelect];
            $url = 'https://pokeapi.co/api/v2/pokemon/'.$pokemon;
            $result = make_request(get_client(), $url);
            $health = $result->stats[0]->base_stat;
            $attack1Damages = $result->stats[1]->base_stat;
            $attack2Damages = $result->stats[3]->base_stat;
            $type = $result->types[0]->type->name;
            $pokemon = new Pokemon($pokemon,$type,$health,$attack1Damages ,$attack2Damages);
            $attribute_to_modify = 'pokemon_'.$i;
            $ia->__set($attribute_to_modify, $pokemon);
        }
        return $ia;
    }


?>