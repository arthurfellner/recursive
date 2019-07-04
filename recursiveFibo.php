<?php


function fibo($nr)
{
    if ($nr <= 1)
    {
        return $nr;
    }

    return fibo($nr - 1) +  fibo($nr - 2);
}


if(isset($_POST['number'])){
    $nr = $_POST['number'];

    $lookedNr = fibo($nr);

    echo '<br/> Pos looked = '.$nr.' and value = '.$lookedNr;

    ?><br/><a href="index.php">Look another nr</a><?php

}


