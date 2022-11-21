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
        <form action="" method="POST">
            <label for="dresseur_name">Choisis ton nom de dresseur</label> <br>
            <input type="text" id="dresseur_name" name="dresseur_name" value="" placeholder="Nom de dresseur">
            <button type="submit">Valider</button>
        </form>
    </div>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>