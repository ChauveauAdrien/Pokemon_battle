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


    /** construct du pokemon
     * @param string $name
     * @param string $type
     * @param int $health
     * @param int $attack1Damages
     * @param int $attack2Damages
     * @param int $attack3Damages
     * @param int $attack4Damages
     */

    public function __construct(string $name, string $type, int $health, int $attack1Damages, int $attack2Damages, int $attack3Damages, int $attack4Damages) 
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->attack1Damages = $attack1Damages;
        $this->attack2Damages = $attack2Damages;
        $this->attack3Damages = $attack3Damages;
        $this->attack4Damages = $attack4Damages;
    }
    
    /** get le nom du pokemon
     * @return string
     */

    public function getName() : string {
        return $this->name;
    }

    /** get le type du pokemon
     * @return string
     */

    public function geType() : string {
        return $this->type;
    }

    /** get la santé du pokemon
     * @return string
     */

    public function getHealth() : string {
        return $this->health;
    }

    /** get les dommages de l'attaque 1
     * @return string
     */

    public function getAttack1Damages() : string {
        return $this->attack1Damages;
    }

    /** get les dommages de l'attaque 2
     * @return string
     */

    public function getAttack2Damages() : string {
        return $this->attack2Damages;
    }

    /** get les dommages de l'attaque 3
     * @return string
     */

    public function getAttack3Damages() : string {
        return $this->attack3Damages;
    }

    /** get les dommages de l'attaque 4
     * @return string
     */

    public function getAttack4Damages() : string {
        return $this->attack4Damages;
    }

    /** set le nom du pokemon
     * @param string $name
     * @return self
     */

    public function setName(string $name) : self {
        $this->name = $name;
        return $this;
    }

    /** set le type du pokemon
     * @param string $type
     * @return self
     */

    public function setType(string $type) : self {
        $this->type = $type;
        return $this;
    }

    /** set la santé du pokemon
     * @param string $health
     * @return self
     */

    public function setHealth(string $health) : self {
        $this->$health = $health;
        return $this;
    }

    /** set les dommages de l'attaque 1
     * @param string $attack1Damages
     * @return self
     */

    public function setAttack1Damages(string $attack1Damages) : self {
        $this->$attack1Damages = $attack1Damages;
        return $this;
    }

    /** set les dommages de l'attaque 2
     * @param string $attack2Damages
     * @return self
     */

    public function setAttack2Damages(string $attack2Damages) : self {
        $this->$attack2Damages = $attack2Damages;
        return $this;
    }

    /** set les dommages de l'attaque 3
     * @param string $attack3Damages
     * @return self
     */

    public function setAttack3Damages(string $attack3Damages) : self {
        $this->$attack3Damages = $attack3Damages;
        return $this;
    }

    /** set les dommages de l'attaque 4
     * @param string $attack3Damages
     * @return self
     */

    public function setAttack4Damages(string $attack4Damages) : self {
        $this->$attack4Damages = $attack4Damages;
        return $this;
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
        $attackNbr = rand(1,4);
        return $this->getRandomAttackDamages($attackNbr);
    }

    /** attaque de l'autre pokemon
     * @param int $damagesSuffered
     * @return self
     */

     public function attacked($damagesSuffered) : self {
        $this->setHealth($this->getHealth() - $damagesSuffered);
        return $this;
     }


}