<?php get_header(); ?>
            <div class="navigation-road">
                <div class="navigation-road__wrapper">
                    <a class="navigation-road__main" href="#">
                        Главная
                    </a>
                    <div class="separator"></div>
                    <a class="navigation-road__reviews" href="#">
                        Каталог
                    </a>
                    <div class="separator"></div>
                    <a class="navigation-road__game" href="#">
                        Death`s Gadmbit: AFTERLIFE
                    </a>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="game-detailed-card">
                    <div class="game-detailed-card__wrapper">
                        <div class="game-detailed-card__left-item">
                            <div class="detail-slider1">
                                <div class="swiper" id="swiper1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="detail-slide__wrapper">
                                                <?
                                                if (have_rows('game_slider_repeater')) :
                                                ?>
                                                <?
                                                while (have_rows('game_slider_repeater')) : the_row();
                                                    $sub_value = get_sub_field('game_slider_img');
                                                ?>
                                                    <img src="<? echo $sub_value; ?>" alt="">
                                                <?
                                                endwhile;
                                                ?>
                                                <?
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="detail-slide__wrapper">
                                                <?
                                                if (have_rows('game_slider_repeater')) :
                                                ?>
                                                <?
                                                while (have_rows('game_slider_repeater')) : the_row();
                                                    $sub_value = get_sub_field('game_slider_img');
                                                ?>
                                                    <img src="<? echo $sub_value; ?>" alt="">
                                                <?
                                                endwhile;
                                                ?>
                                                <?
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="detail-slider2">
                                <div class="detail-slider2__wrapper">
                                    <div class="slider-navigation">
                                        <div class="slider__buttons">
                                            <div class="game-sets-slider__prev">
                                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="main-path" d="M0 17.1306L21.5943 -0.000488281H60C62.2091 -0.000488281 64 1.79037 64 3.99951V44.1832L41.8715 63.9995H4C1.79086 63.9995 0 62.2087 0 59.9995V17.1306Z" fill="#3C3A3B"/>
                                                    <g clip-path="url(#clip0_1746_970)">
                                                        <path d="M20.2779 32.6624C20.2782 32.6627 20.2784 32.663 20.2787 32.6633L25.1774 37.5383C25.5444 37.9035 26.1379 37.9021 26.5032 37.5351C26.8685 37.1681 26.8671 36.5745 26.5001 36.2093L23.2112 32.9363L43.0654 32.9363C43.5832 32.9363 44.0029 32.5166 44.0029 31.9988C44.0029 31.481 43.5832 31.0613 43.0654 31.0613L23.2112 31.0613L26.5 27.7883C26.867 27.423 26.8684 26.8295 26.5032 26.4625C26.1379 26.0954 25.5443 26.0941 25.1773 26.4593L20.2787 31.3343C20.2784 31.3346 20.2782 31.3349 20.2779 31.3352C19.9107 31.7016 19.9119 32.2971 20.2779 32.6624Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1746_970">
                                                            <rect width="24" height="24" fill="white" transform="translate(44.0029 43.9988) rotate(180)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="game-sets-slider__next">
                                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="main-path" d="M0 17.1306L21.5943 -0.000488281H60C62.2091 -0.000488281 64 1.79037 64 3.99951V44.1832L41.8715 63.9995H4C1.79086 63.9995 0 62.2087 0 59.9995V17.1306Z" fill="#3C3A3B"/>
                                                    <g clip-path="url(#clip0_1746_970)">
                                                        <path d="M43.7221 31.3366C43.7218 31.3363 43.7216 31.336 43.7213 31.3357L38.8226 26.4607C38.4556 26.0955 37.8621 26.0969 37.4968 26.4639C37.1315 26.8309 37.1329 27.4245 37.4999 27.7897L40.7888 31.0627L20.9346 31.0627C20.4168 31.0627 19.9971 31.4825 19.9971 32.0002C19.9971 32.518 20.4168 32.9377 20.9346 32.9377L40.7888 32.9377L37.5 36.2107C37.133 36.576 37.1316 37.1696 37.4968 37.5366C37.8621 37.9036 38.4557 37.9049 38.8227 37.5397L43.7213 32.6647C43.7216 32.6645 43.7218 32.6641 43.7221 32.6638C44.0893 32.2974 44.0881 31.7019 43.7221 31.3366Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1746_970">
                                                            <rect width="24" height="24" fill="white" transform="translate(44.0029 43.9988) rotate(180)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="increase__button" data-lightbox="test" href="<? echo get_template_directory_uri(); ?>/images/detail-slider2__image.png">
                                        <div class="increase__wrapper">
                                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.000488281 17.1311L21.5948 0H60.0005C62.2096 0 64.0005 1.79086 64.0005 4V44.1837L41.872 64H4.00048C1.79135 64 0.000488281 62.2091 0.000488281 60V17.1311Z" fill="white"/>
                                            </svg>
                                            <div class="increase__content">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1640_472)">
                                                        <path d="M23.7068 22.293L17.7378 16.324C19.3644 14.3346 20.1642 11.7961 19.9716 9.23359C19.7791 6.67106 18.609 4.28056 16.7034 2.55655C14.7977 0.832537 12.3024 -0.0930816 9.73342 -0.0288498C7.16447 0.035382 4.71849 1.08455 2.9014 2.90164C1.08431 4.71873 0.0351379 7.16472 -0.029094 9.73367C-0.0933258 12.3026 0.832293 14.798 2.5563 16.7036C4.28031 18.6092 6.67081 19.7793 9.23334 19.9719C11.7959 20.1644 14.3344 19.3647 16.3238 17.738L22.2928 23.707C22.4814 23.8892 22.734 23.99 22.9962 23.9877C23.2584 23.9854 23.5092 23.8803 23.6946 23.6948C23.88 23.5094 23.9852 23.2586 23.9875 22.9964C23.9897 22.7342 23.8889 22.4816 23.7068 22.293ZM9.99978 18C8.41753 18 6.87081 17.5308 5.55522 16.6518C4.23963 15.7727 3.21425 14.5233 2.60875 13.0615C2.00324 11.5997 1.84482 9.99115 2.1535 8.4393C2.46218 6.88746 3.22411 5.46199 4.34293 4.34317C5.46175 3.22435 6.88721 2.46243 8.43906 2.15374C9.99091 1.84506 11.5994 2.00349 13.0613 2.60899C14.5231 3.21449 15.7725 4.23987 16.6515 5.55546C17.5306 6.87106 17.9998 8.41778 17.9998 10C17.9974 12.121 17.1538 14.1545 15.654 15.6543C14.1542 17.154 12.1208 17.9976 9.99978 18Z" fill="#EC1A25"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1640_472">
                                                            <rect width="24" height="24" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="swiper" id="swiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="detail-slide__wrapper">
                                                    <img src="<? echo get_template_directory_uri(); ?>/images/detail-slider2__image.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail-slide__wrapper">
                                                    <img src="<? echo get_template_directory_uri(); ?>/images/detail-slider2__image.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="detail-slide__wrapper">
                                                    <img src="<? echo get_template_directory_uri(); ?>/images/detail-slider2__image.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="game-detailed-card__right-item">
                            <h1 class="right-item__game-title">
                                Death`s Gadmbit: Afterlife
                            </h1>
                            <div class="right-item__underline"></div>
                            <div class="right-item__detail-genre">
                                <div class="detail-genre__title">
                                    <span>Жанр:</span>
                                </div>
                                <div class="detail-genre__content">
                                    Экшены, Приключенческие игры, Инди, Ролевые игры
                                </div>
                            </div>
                            <div class="right-item__detail-developer">
                                <div class="detail-developer__title">
                                    <span>Разработчики:</span>
                                </div>
                                <div class="detail-developer__content">
                                    White Rabbit
                                </div>
                            </div>
                            <div class="right-item__limited-edition">
                                <div class="limited-edition__title">
                                    <span>Ограниченный тираж:</span>
                                </div>
                                <div class="limited-edition__content">
                                    Да
                                </div>
                            </div>
                            <div class="right-item__detail-set">
                                <div class="detail-set__title">
                                    <span>Комплект:</span>
                                </div>
                                <div class="detail-set__content">
                                    Игра, саундтрек, брелок
                                </div>
                            </div>
                            <div class="right-item__release-date">
                                <div class="release-date__title">
                                    <span>Дата выхода:</span>
                                </div>
                                <div class="release-date__content">
                                    13 авг. 2018
                                </div>
                            </div>
                            <div class="read-more-button__wrapper">
                                <div class="read-more-button">
                                    <svg width="225" height="64" viewBox="0 0 225 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.000488281 17.1311L21.5948 0H221C223.21 0 225 1.79086 225 4V44.1837L202.872 64H4.00049C1.79135 64 0.000488281 62.2091 0.000488281 60V17.1311Z" fill="#3C3A3B"/>
                                    </svg>
                                    <div class="read-more-button__content">
                                        <p>Читать обзор</p>
                                        <img src="<? echo get_template_directory_uri(); ?>/images/right-arrow.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="game-catalog">
                    <div class="game-catalog__header">
                        <div class="game-catalog__header-wrapper">
                            <div class="game-catalog__developer-section game-catalog-section">
                                <div class="game-catalog-section__title">
                                    <div class="game-catalog-section__title-name">
                                        Издатель
                                    </div>
                                    <div class="game-catalog-section__arrow">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.5C11.8082 16.5 11.6162 16.4267 11.4698 16.2803L3.9698 8.7803C3.67673 8.48723 3.67673 8.01267 3.9698 7.7198C4.26286 7.42692 4.73742 7.42673 5.0303 7.7198L12 14.6895L18.9698 7.7198C19.2629 7.42673 19.7374 7.42673 20.0303 7.7198C20.3232 8.01286 20.3234 8.48742 20.0303 8.7803L12.5303 16.2803C12.3839 16.4267 12.1919 16.5 12 16.5Z" fill="#929292"/>
                                        </svg>                                        
                                    </div>
                                </div>
                                <div class="game-catalog-section__content">
                                    <a class="game-catalog-section__item" href="#">
                                        White Rabbit
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        Skeleton Crew Studios
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        Explosm
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        White Rabbit
                                    </a>
                                </div>
                            </div>
                            <div class="game-catalog__genre-section game-catalog-section">
                                <div class="game-catalog-section__title">
                                    <div class="game-catalog-section__title-name">
                                        Жанр
                                    </div>
                                    <div class="game-catalog-section__arrow">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.5C11.8082 16.5 11.6162 16.4267 11.4698 16.2803L3.9698 8.7803C3.67673 8.48723 3.67673 8.01267 3.9698 7.7198C4.26286 7.42692 4.73742 7.42673 5.0303 7.7198L12 14.6895L18.9698 7.7198C19.2629 7.42673 19.7374 7.42673 20.0303 7.7198C20.3232 8.01286 20.3234 8.48742 20.0303 8.7803L12.5303 16.2803C12.3839 16.4267 12.1919 16.5 12 16.5Z" fill="#929292"/>
                                        </svg>    
                                    </div>
                                </div>
                                <div class="game-catalog-section__content">
                                    <a class="game-catalog-section__item" href="#">
                                        White Rabbit
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        Skeleton Crew Studios
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        Explosm
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        White Rabbit
                                    </a>
                                </div>
                            </div>
                            <div class="game-catalog__release-date-section game-catalog-section">
                                <div class="game-catalog-section__title">
                                    <div class="game-catalog-section__title-name">
                                        Год выхода
                                    </div>
                                    <div class="game-catalog-section__arrow">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 16.5C11.8082 16.5 11.6162 16.4267 11.4698 16.2803L3.9698 8.7803C3.67673 8.48723 3.67673 8.01267 3.9698 7.7198C4.26286 7.42692 4.73742 7.42673 5.0303 7.7198L12 14.6895L18.9698 7.7198C19.2629 7.42673 19.7374 7.42673 20.0303 7.7198C20.3232 8.01286 20.3234 8.48742 20.0303 8.7803L12.5303 16.2803C12.3839 16.4267 12.1919 16.5 12 16.5Z" fill="#929292"/>
                                        </svg>    
                                    </div>
                                </div>
                                <div class="game-catalog-section__content">
                                    <a class="game-catalog-section__item" href="#">
                                        White Rabbit
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        Skeleton Crew Studios
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        Explosm
                                    </a>
                                    <a class="game-catalog-section__item" href="#">
                                        White Rabbit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="game-catalog__search-button" href="#">
                            <svg width="164" height="64" viewBox="0 0 164 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 17.1311L21.5943 0H160C162.209 0 164 1.79086 164 4V44.1837L141.872 64H3.99999C1.79086 64 0 62.2091 0 60V17.1311Z" fill="#EC1A25"/>
                            </svg>  
                            <div class="search-button__content">
                                <div class="search-button__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1640_472)">
                                            <path d="M23.7068 22.293L17.7378 16.324C19.3644 14.3346 20.1642 11.7961 19.9716 9.23359C19.7791 6.67106 18.609 4.28056 16.7034 2.55655C14.7977 0.832537 12.3024 -0.0930816 9.73342 -0.0288498C7.16447 0.035382 4.71849 1.08455 2.9014 2.90164C1.08431 4.71873 0.0351379 7.16472 -0.029094 9.73367C-0.0933258 12.3026 0.832293 14.798 2.5563 16.7036C4.28031 18.6092 6.67081 19.7793 9.23334 19.9719C11.7959 20.1644 14.3344 19.3647 16.3238 17.738L22.2928 23.707C22.4814 23.8892 22.734 23.99 22.9962 23.9877C23.2584 23.9854 23.5092 23.8803 23.6946 23.6948C23.88 23.5094 23.9852 23.2586 23.9875 22.9964C23.9897 22.7342 23.8889 22.4816 23.7068 22.293ZM9.99978 18C8.41753 18 6.87081 17.5308 5.55522 16.6518C4.23963 15.7727 3.21425 14.5233 2.60875 13.0615C2.00324 11.5997 1.84482 9.99115 2.1535 8.4393C2.46218 6.88746 3.22411 5.46199 4.34293 4.34317C5.46175 3.22435 6.88721 2.46243 8.43906 2.15374C9.99091 1.84506 11.5994 2.00349 13.0613 2.60899C14.5231 3.21449 15.7725 4.23987 16.6515 5.55546C17.5306 6.87106 17.9998 8.41778 17.9998 10C17.9974 12.121 17.1538 14.1545 15.654 15.6543C14.1542 17.154 12.1208 17.9976 9.99978 18Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1640_472">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="search-button__text">
                                    Найти
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="game-catalog__content">
                        <a class="game-catalog__game1 game-catalog__game" href="#">
                            <div class="current-game-content">
                                <div class="game-catalog__current-game-info">
                                    <div class="game-catalog__game-wrapper">
                                        <div class="game-catalog__game-name">
                                            9 monkey of Shaolin
                                        </div>
                                        <div class="game-catalog__game-description">
                                            9 monkey of Shaolin
                                        </div>
                                    </div>
                                    <div class="views-wrapper">
                                        <div class="game-banner__views game-catalog__views">
                                            <div class="views__eye">
                                                <img src="<? echo get_template_directory_uri(); ?>/images/icon-view.svg" alt="">
                                            </div>
                                            <div class="views__number">
                                                22
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="game-catalog__game2 game-catalog__game" href="#">
                            <div class="current-game-content">
                                <div class="game-catalog__current-game-info">
                                    <div class="game-catalog__game-wrapper">
                                        <div class="game-catalog__game-name">
                                            9 monkey of Shaolin
                                        </div>
                                        <div class="game-catalog__game-description">
                                            9 monkey of Shaolin
                                        </div>
                                    </div>
                                    <div class="views-wrapper">
                                        <div class="game-banner__views game-catalog__views">
                                            <div class="views__eye">
                                                <img src="<? echo get_template_directory_uri(); ?>/images/icon-view.svg" alt="">
                                            </div>
                                            <div class="views__number">
                                                22
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="game-catalog__game3 game-catalog__game" href="#">
                            <div class="current-game-content">
                                <div class="game-catalog__current-game-info">
                                    <div class="game-catalog__game-wrapper">
                                        <div class="game-catalog__game-name">
                                            Dead Cells
                                        </div>
                                        <div class="game-catalog__game-description">
                                            9 monkey of Shaolin
                                        </div>
                                    </div>
                                    <div class="views-wrapper">
                                        <div class="game-banner__views game-catalog__views">
                                            <div class="views__eye">
                                                <img src="<? echo get_template_directory_uri(); ?>/images/icon-view.svg" alt="">
                                            </div>
                                            <div class="views__number">
                                                22
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="game-catalog__game4 game-catalog__game" href="#">
                            <div class="current-game-content">
                                <div class="game-catalog__current-game-info">
                                    <div class="game-catalog__game-wrapper">
                                        <div class="game-catalog__game-name">
                                            9 monkey of Shaolin
                                        </div>
                                        <div class="game-catalog__game-description">
                                            9 monkey of Shaolin
                                        </div>
                                    </div>
                                    <div class="views-wrapper">
                                        <div class="game-banner__views game-catalog__views">
                                            <div class="views__eye">
                                                <img src="<? echo get_template_directory_uri(); ?>/images/icon-view.svg" alt="">
                                            </div>
                                            <div class="views__number">
                                                22
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="game-catalog__game5 game-catalog__game" href="#">
                            <div class="current-game-content">
                                <div class="game-catalog__current-game-info">
                                    <div class="game-catalog__game-wrapper">
                                        <div class="game-catalog__game-name">
                                            Limited Run Games 2021
                                        </div>
                                        <div class="game-catalog__game-description">
                                            9 monkey of Shaolin
                                        </div>
                                    </div>
                                    <div class="views-wrapper">
                                        <div class="game-banner__views game-catalog__views">
                                            <div class="views__eye">
                                                <img src="<? echo get_template_directory_uri(); ?>/images/icon-view.svg" alt="">
                                            </div>
                                            <div class="views__number">
                                                22
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="game-catalog__game6 game-catalog__game" href="#">
                            <div class="current-game-content">
                                <div class="game-catalog__current-game-info">
                                    <div class="game-catalog__game-wrapper">
                                        <div class="game-catalog__game-name">
                                            Death`s Gadmbit: Afterlife
                                        </div>
                                        <div class="game-catalog__game-description">
                                            9 monkey of Shaolin
                                        </div>
                                    </div>
                                    <div class="views-wrapper">
                                        <div class="game-banner__views game-catalog__views">
                                            <div class="views__eye">
                                                <img src="<? echo get_template_directory_uri(); ?>/images/icon-view.svg" alt="">
                                            </div>
                                            <div class="views__number">
                                                22
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="go-top-button" onclick="topFunction()" id="myBtn">
                <svg width="152" height="152" viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_1640_474)">
                        <path d="M40 53.1311L61.5943 36H108C110.209 36 112 37.7909 112 40V88.1837L89.8715 108H44C41.7909 108 40 106.209 40 104V53.1311Z" fill="#EC1A25"/>
                    </g>
                    <g clip-path="url(#clip0_1640_474)">
                        <path d="M75.3393 60.2742C75.339 60.2745 75.3387 60.2748 75.3384 60.2751L70.4634 65.1737C70.0982 65.5407 70.0996 66.1343 70.4666 66.4996C70.8336 66.8648 71.4272 66.8634 71.7924 66.4964L75.0654 63.2075L75.0654 83.0618C75.0654 83.5795 75.4851 83.9993 76.0029 83.9993C76.5207 83.9993 76.9404 83.5795 76.9404 83.0618L76.9404 63.2075L80.2134 66.4964C80.5787 66.8634 81.1723 66.8648 81.5392 66.4995C81.9063 66.1342 81.9076 65.5406 81.5424 65.1737L76.6674 60.275C76.6671 60.2748 76.6668 60.2745 76.6665 60.2742C76.3001 59.907 75.7046 59.9082 75.3393 60.2742Z" fill="white"/>
                    </g>
                    <defs>
                        <filter id="filter0_d_1640_474" x="0" y="0" width="152" height="152" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="20"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.9125 0 0 0 0 0.628865 0 0 0 0 0.643722 0 0 0 1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1640_474"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1640_474" result="shape"/>
                        </filter>
                        <clipPath id="clip0_1640_474">
                            <rect width="24" height="24" fill="white" transform="translate(64.0029 83.9993) rotate(-90)"/>
                        </clipPath>
                    </defs>
                </svg>
                    
            </div>
        </main>

<?php get_footer(); ?>