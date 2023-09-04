<?php

require 'constants.php';

$url = $_SERVER["REQUEST_URI"];
$url_part = explode('/', $url);

$pagina = '';

foreach ($url_part as $key => $value) {
    if ($value == '') {
        unset($url_part[$key]);
    }
}

if ($url !== null) {
    if (($url == URL_SITE || strpos($url, 'home') !== false) || count($url_part) <= 2 || end($url_part) == '') {
        $pagina = 'home.php';
    } else if(file_exists(PAGES . end($url_part) . '.php')) {
        $pagina = end($url_part) . '.php';
    } else{
        $pagina = '404.php';
    }
} else {
    $pagina = '404.php';
}

include 'header.php';

if (file_exists(PAGES . $pagina)) {
    include PAGES . $pagina;
}

include 'footer.php';
