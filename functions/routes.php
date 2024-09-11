<?php

$url = $_SERVER['REQUEST_URI'];
$URL = $url == "/" ? 'index' : explode("/", $url);

$routes = array();

function get_url()
{
    $REQ = $_SERVER['REQUEST_URI'];
    $URL[0] = preg_match("%^(\/)$%", $REQ) ? preg_replace("%^(\/)%", 'index', $REQ) : preg_replace("%^(\/)%", '', $REQ, 0);

    if ($URL[0] == 'index' || count(explode("/",$URL[0])) == 2 ) $URL[1] = 'index';
    else {
        if (explode("/",$URL[0])) $URL[1] = explode("/", $URL[0])[2];
        $URL[0] = explode("/", $URL[0])[1];
    }
    return $URL;
}