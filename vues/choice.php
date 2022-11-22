<?php

require_once __DIR__.'/../includes/header.php';

?>
<main class="main__wrapper">
    <div class="choice__top">
        <div class="main__tchat">
            <p>Voila XXX te voici arrivé dans l'arène Pokemon Battle ! <br>Désormais, Choisis trois pokemon pour te battre :</p>
        </div>
    </div>
    <div class="main__bottom">
        <form action="../vues/battle.php" method="POST">
            <input type="checkbox" name="dracaufeu" value="dracaufeu">
            <label for="dresseur_name">Dracaufeu</label> <br>
            <input type="checkbox" name="pikachu" value="pikachu">
            <label for="dresseur_name">Pikachu</label> <br>
            <input type="checkbox" name="tortank" value="tortank">
            <label for="dresseur_name">Tortank</label> <br>
        </form>
    </div>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>