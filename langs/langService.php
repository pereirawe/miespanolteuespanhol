<?php

$acceptLang = ['es', 'pt'];
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
};

$lang = in_array($lang, $acceptLang) ? $lang : 'pt';

require_once "./langs/" . $lang . ".php";
$langContent = 'content_' . $lang;
$langURLGet = "?lang=" . $lang;
$content = new $langContent();

$subtitle = str_replace('.php','',$_SERVER['PHP_SELF']);
$subtitle = str_replace('/','',$subtitle);
$content->subtitle = $content->nav[$subtitle];