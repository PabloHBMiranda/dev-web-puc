<?php

$banners = [
    [
        'image' =>  'cara-de-fogo.jpg',
        'link'  => 'https://worldofwarcraft.blizzard.com/pt-br/news/23850854/quebre-o-gelo-wrath-of-the-lich-king-classic%E2%84%A2-j%C3%A1-est%C3%A1-dispon%C3%ADvel',
        'name' => 'Cara do Martelo de Fogo',
    ],
    [
        'image' => 'ilidan.jpg',
        'link'  => 'https://worldofwarcraft.blizzard.com/pt-br/news/23964381/obtenha-a-montaria-barbilh%C3%A3o-maravilha-na-compra-de-uma-assinatura-de-6-meses',
        'name' => 'Ilidan',
    ],
    [
        'image' => 'drake.jpg',
        'link'  => 'https://us.shop.battle.net/pt-br/product/world-of-warcraft-dragonflight?utm_source=worldofwarcraft.com&utm_campaign=bop-wow-global-dragonflight&utm_medium=internal&utm_content=hp-panel',
        'name' => 'Drake',
    ],
    [
        'image' =>  'lich-king.jpg',
        'link'  => 'https://worldofwarcraft.blizzard.com/pt-br/game/recruit-a-friend',
        'name' => 'Lich King',
    ],
]

?>


<div class="template-home-front-page" style="height: 500px">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                foreach ( $banners as $banner ) {
                    $image = $banner['image'];
                    $link = ! empty( $banner['link'] ) ? $banner['link'] : '';

                    echo "<div class=\"swiper-slide\">";
                    if ( ! empty( $link ) && ! empty( $image ) ) {
                        $target = ( ! empty( $banner['target_blank'] ) ) ? "target=\"_blank\"" : '';
                        echo "<a href=\"$link\" target='_blank' title=\"{$banner['name']}\" >";
                    }

                    echo '<img src="assets/images/' . $image  . '" alt="'.  $banner['name'] .'">';

                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>

            <ul class="swiper-pagination"></ul>
        </div>
    </div>
</div>
