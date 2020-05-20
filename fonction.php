<?php

function number(int $x)
{
    $i = 0;
    while($i <= $x){
        echo $i++;
    }
}

function number2(int $x)
{
    $i = 0;
    for($i=0; $i<$x;$i++){
        echo $i;
    }
}

function affInput($x)
{
    for($i=0; $i<$x;$i++){
        echo '<input type="text">' . '<br>';
    }
}

function createForm(array $array)
{
    
        foreach($array as $key){
            echo '<input name="' . $key['name'] . '" type="' .$key['type'].'" class="'.$key['class'] . '""';
        }
    
}