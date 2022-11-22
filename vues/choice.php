<?php

require_once __DIR__.'/../includes/header.php';

?>
<main class="main__wrapper">
    <div class="choice__top">
        <div class="main__tchat">
            <p>Voila XXX te voici arrivé dans l'arène Pokemon Battle ! <br> Désormais, Choisis trois pokemon pour te battre :</p>
        </div>
    </div>
    <div class="choice__bottom">
        <p>Choisis trois Pokemon pour former ton équipe !</p>
        <form action="../vues/battle.php" method="POST" id="test">
            <div class="pokemon__form">
                <div>
                    <input type="checkbox" name="dracaufeu" value="dracaufeu">
                    <label for="dresseur_name">Dracaufeu</label> 
                </div>
                
                <p>Lvl 54</p>
            </div>
        </form>
    <button type="submit" form="test" class="choice__form__btn">Suivant</button>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>