<?php

class Player {

    /** Nom de l'utilisateur
     * @var string
     */

    public $user_name = "";

    /** Pokemon 1 de l'utilisateur
     * @var class
     */

    public $pokemon_1;

    /** Pokemon 2 de l'utilisateur
     * @var class
     */

    public $pokemon_2;

    /** Pokemon 3 de l'utilisateur
     * @var class
     */

    public $pokemon_3;


    /** fonction construct de l'utilisateur
     * @param string $user_name
     * @param string $pokemon_1
     * @param string $pokemon_2
     * @param string $pokemon_3
     */

    public function __construct(string $user_name, string $pokemon_1, string $pokemon_2, string $pokemon_3)
    {
        $this->user_name = $user_name;
        $this->pokemon_1 = $pokemon_1;
        $this->pokemon_2 = $pokemon_2;
        $this->pokemon_3 = $pokemon_3;
    }



}