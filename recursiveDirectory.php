<?php

//echo dirname(__FILE__);

//$path = '/opt/lampp/htdocs/recursive';
$path = '/opt/lampp/htdocs/';
$path2 = '/opt/lampp/*';


echo '<pre>';

$dirContents = recDir($path);
print_r($dirContents);


function recDir($dir, &$directoriesTree = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);

        if(is_dir($path) === FALSE) {
           continue;
        } else if($value != "." && $value != "..") {
            //echo '<br/>'.$value;
            recDir($path, $directoriesTree[$value]);
        }
    }


    return $directoriesTree;
}