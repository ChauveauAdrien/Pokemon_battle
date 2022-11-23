<?php

require_once __DIR__.'/../includes/header.php';
require_once __DIR__.'/../controllers/choice-controller.php';





?>
<main class="main__wrapper">
    <div class="choice__top">
        <div class="main__tchat">
            <p>Voila <?=$_SESSION['name']?> te voici arrivé dans l'arène Pokemon Battle ! <br> Désormais, Choisis trois pokemon pour te battre :</p>
        </div>
    </div>
    <div class="choice__bottom">
        <p>Choisis trois Pokemon pour former ton équipe !</p>
        <form action="../controllers/choice-controller.php" method="POST" id="test">
            <?php foreach($pokemonsArray as $key => $value) : ?> 
                <div class="pokemon__form"> 
                    <div>
                        <input type="checkbox" name="<?=$key?>" value="<?=$value?>">
                        <label for="<?=$key?>"><?=$value?></label>
                    </div>
                    <p>Lvl 54</p>
                </div>
            <?php endforeach; ?>
        </form>
    <button type="submit" form="test" class="choice__form__btn">Suivant</button>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>

