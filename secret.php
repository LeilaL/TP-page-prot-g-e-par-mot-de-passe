<?php

if (isset($_POST['mdp']) and $_POST['mdp'] == 'kangourou')
{
    echo '<h1>Confidential Information</h1><br/> Neil A. Armstrong n\'est pas allé sur la lune.';
}
else
{
    echo 'Mauvais <em>mot de passe</em> !<br/> Pour réessayer <a href="index.php">clique</a>';
}
