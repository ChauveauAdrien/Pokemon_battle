<?php 

require_once 'Player.php';


class Pokemon {


    /** Nom du pokemon
     * @var string
     */

    public $name = "";

    /** type du pokemon
     * @var string
     */

    public $type = "";

    /** santé du pokemon 
     * @var int
     */

    public $health = 0;

    /** dommages de l'attaque 1
     * @var int
     */

    public $attack1Damages = 0;

    /** dommages de l'attaque 2
     * @var int
     */

    public $attack2Damages = 0;


    /** nom de l'attaque 1
     * @var string
     */

    public $attack1 = "Attaque";

    /** nom de l'attaque 2
     * @var string
     */

    public $attack2 = "Attaque speciale";

    /** image de face du Pokemon
     * @var string
     */

    public $front_sprite = "";


    /** image de dos du Pokemon
     * @var string
     */

    public $back_sprite = "";


    /** construct du pokemon 
     * @param string $name
     * @param string $type
     * @param int $health
     * @param int $attack1Damages
     * @param int $attack2Damages
     * @param string $front_sprite
     * @param string $back_sprite
     */

    public function __construct(string $name, string $type, int $health, int $attack1Damages, int $attack2Damages, string $front_sprite, string $back_sprite) 
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->attack1Damages = $attack1Damages;
        $this->attack2Damages = $attack2Damages;
        $this->front_sprite = $front_sprite;
        $this->back_sprite = $back_sprite;
    }
    
    /**
    * Getter generique
    */

    public function __get($name) {
        return $this->$name;
    }

    /** setter generique
    * 
    */

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /** va chercher une des 2 attaques selon le nombre en parametre
     * @param int $nbr
     * @return int
     */

    public function getRandomAttackDamages(int $nbr) {
        $attackToSelect = 'attack'.$nbr.'Damages';
        return $this->$attackToSelect;
    }

    /** attaque du pokemon
     * @return int
     */

    public function attack() : int {
        $attackNbr = rand(1,2);
        return $this->getRandomAttackDamages($attackNbr);
    }

    /** attaque de l'autre pokemon
     * @param int $damagesSuffered
     * @return self
     */

     public function attacked($damagesSuffered) : self {
        $this->__set('health',($this->__get('health') - $damagesSuffered));
        if($this->__get('health') < 0) {
            $this->__set('health', 0);
        }
        return $this;
     }


}