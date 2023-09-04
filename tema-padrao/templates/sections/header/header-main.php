<?php

$items = [
    'name' => [
        'Menu 1',
        'Menu 2',
        'Menu 3',
        'Menu 4',
        'Menu 5',],
    'url' => ['https://google.com.br',
        'https://google.com.br',
        'https://google.com.br',
        'https://google.com.br',
        'https://google.com.br',]
];

?>

<section class="template-header-main">
    <div class="container">
        <div class="wrapper-header-main">
            <ul class="nav-bar">
                <?php
                   for($i = 0; $i < count($items['name']); $i++) {
                        echo '<li class="menu-nav-bar"><a href="'.$items['url'][$i].'">'.$items['name'][$i].'</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</section>
