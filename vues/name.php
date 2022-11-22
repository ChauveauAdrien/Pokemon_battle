<?php

require_once __DIR__.'/../includes/header.php';

?>
<main class="main__wrapper">
    <div class="main__top">
        <div class="main__tchat">
            <p>Mais avant tout, rappelle moi ton nom :</p>
        </div>
    </div>
    <div class="main__bottom">
        <form action="/vues/choice.php" method="POST" class="name__form">
            <label for="dresseur_name" class="dresseur_name">Choisis ton nom de dresseur</label>
            <input type="text" id="dresseur_name" name="dresseur_name" value="" placeholder="Nom de dresseur">
            <button type="submit">Valider</button>
        </form>
    </div>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>
    
