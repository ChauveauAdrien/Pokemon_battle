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




}