<?php

$items = [
    'name' => [
            'Principal',
        'Cadastro',
        'Conteúdo'
    ],
    'url' => [URL_SITE,'cadastro',
        'conteudo'],

    'target' => ['_self',
        '_self',
        '_self',
        '_self',
        '_self  ',]
];

?>

<section class="template-header-main">
    <div class="container">
        <div class="wrapper-header-main">
            <a class="navbar-brand" href="<?= URL_SITE ?>">
                <img src="assets/images/steam.png" alt="Logo da Minha Empresa" class="logo">
            </a>
            <ul class="nav-bar">
                <?php
                for($i = 0; $i < count($items['name']); $i++) {
                    echo '<li class="menu-nav-bar"><a href="'.$items['url'][$i].'" target="'. $items['target'][$i] .'">'.$items['name'][$i].'</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</section>
