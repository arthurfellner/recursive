<?php

function recursiveString($string){
    $stringLen = strlen($string);

    if($stringLen == 1){
        return $string;
    }

    $stringLen--;


    return recursiveString(substr($string, 1,$stringLen)) . substr($string, 0, 1);
}


if(isset($_POST['string'])){
    $str = $_POST['string'];

    $mirroredStr = recursiveString($str);


   echo $str.' mirrored = '.$mirroredStr;

    ?><br/><a href="index.php">Try another string</a><?php

}