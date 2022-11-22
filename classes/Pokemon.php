<?php 

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

    /** dommages de l'attaque 3
     * @var int
     */

    public $attack3Damages = 0;

    /** dommages de l'attaque 4
     * @var int
     */

    public $attack4Damages = 0;

    /** nom de l'attaque 1
     * @var string
     */

    public $attack1 = "";

    /** nom de l'attaque 2
     * @var string
     */

    public $attack2 = "";

    /** nom de l'attaque 3
     * @var string
     */

    public $attack3 = "";

    /** nom de l'attaque 4
     * @var string
     */

    public $attack4 = "";


    /** construct du pokemon
     * @param string $name
     * @param string $type
     * @param int $health
     * @param string $attack1
     * @param int $attack1Damages
     * @param string $attack2
     * @param int $attack2Damages
     */

    public function __construct(string $name, string $type, int $health, string $attack1, int $attack1Damages, string $attack2, int $attack2Damages) 
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->attack1 = $attack1;
        $this->attack1Damages = $attack1Damages;
        $this->attack2 = $attack2;
        $this->attack2Damages = $attack2Damages;
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

    /** va chercher une des 4 attaques selon le nombre en parametre
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