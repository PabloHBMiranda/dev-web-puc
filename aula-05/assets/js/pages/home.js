import Swiper, {Autoplay, Navigation, Pagination} from 'swiper/bundle';


document.addEventListener("DOMContentLoaded", function () {
    const banners = document.querySelectorAll('.template-home-front-page');

    console.log(banners);
    banners?.forEach(item => {
        let config = {
            loop: false,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        };

        if (item.querySelectorAll('.swiper-container .swiper-slide').length > 1) {
            config.pagination = {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return `<li class="page ${className}"></li>`;
                },
            };

            config.loop = true;

        }

        new Swiper(item.querySelector('.swiper-container'), config);
    });
});
