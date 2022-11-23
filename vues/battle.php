<?php

require_once __DIR__.'/../includes/header.php';

?>
<main class="main__wrapper">
    <div class="battle__top">
        <div class="battle__info">
            <div class="battle-info__top">
            <div class="pokemon__info">
                <div class="info__top">
                    <p>DRACAUFEU</p>
                    <p>Lvl 54</p>
                </div>
                <div class="info__mid">
                    <p>PV</p>
                    <div class="pv__container">
                        <div class="pv"></div>
                    </div>
                </div>
                <div class="info__bottom">
                    <p>250/250 Pv</p>
                </div>
            </div>
            <div class="pokemon__plateforme">
                <img class="sprite-front" src="../assets/img/charizard-back.png" alt="">
            </div>
            </div>
            <div class="battle-info__bottom">
                <div class="battle__tchat">
                    <p>XXX a perdu 250 pv</p>
                </div>
                <div class="pokemon__plateforme">
                    <img class="sprite-back" src="../assets/img/charizard-back.png" alt="">
                </div>
                <div class="pokemon__info">
                    <div class="info__top">
                        <p>DRACAUFEU</p>
                        <p>Lvl 54</p>
                    </div>
                    <div class="info__mid">
                        <p>PV</p>
                        <div class="pv__container">
                            <div class="pv"></div>
                        </div>
                    </div>
                    <div class="info__bottom">
                        <p>250/250 Pv</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="battle__bottom">
        <a class="btn__a" href="../vues/result.php">
            <div class="battle__btn__top">
                Attaquer
            </div>
        </a>
        <a class="btn__a" href="">
            <div class="battle__btn__bottom">
                Fuire
            </div>
        </a>
        
    </div>

</main>

<?php

require_once __DIR__.'/../includes/footer.php';

?>