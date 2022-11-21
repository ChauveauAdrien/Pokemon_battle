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
     * @return int
     */

    public function getHealth() : int {
        return $this->health;
    }

    /** get les dommages de l'attaque 1
     * @return int
     */

    public function getAttack1Damages() : int {
        return $this->attack1Damages;
    }

    /** get les dommages de l'attaque 2
     * @return int
     */

    public function getAttack2Damages() : int {
        return $this->attack2Damages;
    }

    /** get les dommages de l'attaque 3
     * @return int
     */

    public function getAttack3Damages() : int {
        return $this->attack3Damages;
    }

    /** get les dommages de l'attaque 4
     * @return int
     */

    public function getAttack4Damages() : int {
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
     * @param int $health
     * @return self
     */

    public function setHealth(int $health) : self {
        $this->health = $health;
        return $this;
    }

    /** set les dommages de l'attaque 1
     * @param int $attack1Damages
     * @return self
     */

    public function setAttack1Damages(int $attack1Damages) : self {
        $this->$attack1Damages = $attack1Damages;
        return $this;
    }

    /** set les dommages de l'attaque 2
     * @param int $attack2Damages
     * @return self
     */

    public function setAttack2Damages(int $attack2Damages) : self {
        $this->$attack2Damages = $attack2Damages;
        return $this;
    }

    /** set les dommages de l'attaque 3
     * @param int $attack3Damages
     * @return self
     */

    public function setAttack3Damages(int $attack3Damages) : self {
        $this->$attack3Damages = $attack3Damages;
        return $this;
    }

    /** set les dommages de l'attaque 4
     * @param int $attack3Damages
     * @return self
     */

    public function setAttack4Damages(int $attack4Damages) : self {
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
        if($this->getHealth() < 0) {
            $this->setHealth(0);
        }
        return $this;
     }


}