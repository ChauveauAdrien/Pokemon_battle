<?php


if(!empty($_POST['dresseur_name'])) {
    session_start();
    $_SESSION['name'] = $_POST['dresseur_name'];
    $_SESSION['user_pokemons'] = array();
    header('Location: ../vues/choice.php');
}
else {
    header('Location: ../vues/name.php');
}