<?php

if (isset($_GET['token'])) {
    if ( $_GET['token'] !== 'A556C28BA41F9D566729112B7E41A') {
        die;
        exit;
    }
} else {
    die;
    exit;
}

$files = glob('../storage/order/*.{json}', GLOB_BRACE);
foreach($files as $file) {
    $fileUrl = getFileURL($file);
    $fileName = getFileName($file);
    echo '<a href="'.$fileUrl.'" target="_blank">'.$fileName.'</a><br>';
}

function getFileName($file){

    $fileName = str_replace('../storage/order/','',$file);
    $fileName = str_replace('.json','',$fileName);
    $fileInfo = explode('_', $fileName);
    
    $fileInfo[0] = str_replace('date','',$fileInfo[0]);
    $fileInfo[2] = str_replace('name','',$fileInfo[2]);
    $fileInfo[2] = str_replace('-',' ',$fileInfo[2]);

    return $fileInfo[0] . ' - '. $fileInfo[2];
}

function getFileURL($file){
    return $_SERVER['HTTPS'] ? 'https://': 'http://' . $_SERVER['HTTP_HOST'] . str_replace('../','/',$file);
}