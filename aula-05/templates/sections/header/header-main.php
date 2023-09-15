<?php

$items = [
    'name' => [
        'Cadastro',
        'Menu 2',
        'Menu 3',
        'Menu 4',
        'Menu 5',],
    'url' => ['http://localhost/dev-web-puc/aula-05/cadastro',
        'https://google.com.br',
        'https://google.com.br',
        'https://google.com.br',
        'https://google.com.br',],

    'target' => ['_self',
        '_self',
        '_self',
        '_self',
        '_self  ',]
];

$url1 = 'https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=7A359D5569A1912AE85419042419552C&steamids=76561198429621096';
$url2 = 'http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=7A359D5569A1912AE85419042419552C&steamid=76561198429621096&format=json';
$url3 = 'http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=12120&count=3&maxlength=300&format=json';
$response = file_get_contents($url1);
$data = json_decode($response);

echo "<pre>";
print_r($data);

?>

<section class="template-header-main">
    <div class="container">
        <div class="wrapper-header-main">
            <a class="navbar-brand" href="http://localhost/dev-web-puc/aula-05/">
                <img src="assets/images/steam.png" alt="Logo da Minha Empresa" class="logo">
            </a>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                <a class="navbar-brand" href="index.html">Fernando Recomenda</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro.html">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="conteudo.html">Conteúdo</a>
                        </li>
                    </ul>
                </div>
            </nav>
<!--            <ul class="nav-bar">-->
<!--                --><?php
//                   for($i = 0; $i < count($items['name']); $i++) {
//                        echo '<li class="menu-nav-bar"><a href="'.$items['url'][$i].'" target="'. $items['target'][$i] .'">'.$items['name'][$i].'</a></li>';
//                    }
//                ?>
<!--            </ul>-->
        </div>
    </div>
</section>
