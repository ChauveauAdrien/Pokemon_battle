<?php

require_once __DIR__.'/../includes/header.php';
require_once __DIR__.'/../functions.php';


?>
<main class="main__wrapper">
    <div class="choice__top">
        <div class="main__tchat">
            <p>Voila XXX te voici arrivé dans l'arène Pokemon Battle ! <br>Désormais, Choisis trois pokemon pour te battre :</p>
        </div>
    </div>
    <div class="choice__bottom">
        <p>Choisis trois Pokemon pour former ton équipe !</p>
        <form action="../controllers/choice-controller.php" method="POST" id="test">
            <div class="pokemon__form">
                <div>
                    <?php foreach($pokemonsArray as $key => $value) : ?> 
                        <input type="checkbox" name="<?=$key?>" value="<?=$value?>">
                        <label for="<?=$key?>"><?=$value?></label>
                        <p>Lvl 54</p>
                    <?php endforeach; ?>
                </div>

                
            </div>
        </form>
        <button type="submit" form="test" class="choice__form__btn">Suivant</button>
    </div>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>

