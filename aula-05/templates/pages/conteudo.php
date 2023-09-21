<?php
$user = 'Sem nome';
$user = (!empty($_GET['user'])) ? $_GET['user'] : 'Sem nome';
?>

<div class="template-conteudo-page">
    <div class="container">
        <div class="search-wrapper">
            <h1>Buscar Filme</h1>
            <input type="text" id="filmeInput" placeholder="Digite o nome do filme">
            <button class="buscarFilme">Buscar</button>
        </div>
        <div id="resultado"></div>
    </div>
</div>
