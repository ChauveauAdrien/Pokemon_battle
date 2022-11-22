<?php
require_once __DIR__.'/includes/header.php';
require_once './classes/Pokemon.php';

?>
<main class="main__wrapper">
    <div class="main__top">
        <div class="main__tchat">
            <p>Bienvenue jeune dresseur ! <br>Es-tu prêt à entrer dans l'arène Pokemon Battle ?</p>
        </div>
    </div>
    <div class="main__bottom">
        <a class="btn__a" href="">
            <div class="main__btn btn-left">
                Non
            </div>
        </a>
        <a class="btn__a" href="/vues/name.php">
            <div class="main__btn btn-right">
                Oui
            </div>
        </a>
    </div>
</main>

<?php

require_once __DIR__.'/includes/footer.php';

?>
    
