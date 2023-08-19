<?php

require 'constants.php';

$url = $_SERVER["REQUEST_URI"];

$pagina = '';

if ($url !== null) {
    if ($url == URL_SITE || strpos($url, 'home') !== false) {
        $pagina = 'home.php';
    } else {
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
