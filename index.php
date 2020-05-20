<?php

require('fonction.php');

echo number(10) . '<br>';

echo number(10)  . '<br>';

echo affInput(5);

$array = array(
    array('name' => 'nom', 'type' => 'text', 'class' => 'modal'),

    array('name' => 'prenom', 'type' => 'text', 'class' => 'modal'),

    array('name' => 'valider', 'type' => 'submit', 'class' => 'btn')
);
?>

<form>
<?php
    createForm($array);
?>
</form>