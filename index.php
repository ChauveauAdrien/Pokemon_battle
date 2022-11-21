<?php

require_once './classes/Pokemon.php';

$pokemon1 = new Pokemon('Pikachu', 'elec', 100, 60, 40, 20, 10);
$pokemon2 = new Pokemon('Dracofeu', 'feu', 200, 100, 80, 60, 40);



echo $pokemon1->getHealth();
$pokemon1->attacked($pokemon2->attack());
echo $pokemon1->getHealth();