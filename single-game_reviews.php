<?php get_header(); ?>
<div class="navigation-road">
    <div class="navigation-road__wrapper">
        <a class="navigation-road__main" href="#">
            Главная
        </a>
        <div class="separator"></div>
        <a class="navigation-road__reviews" href="#">
            Обзоры
        </a>
        <div class="separator"></div>
        <a class="navigation-road__game" href="#">
            Metro 2033
        </a>
    </div>
</div>
<div class="current-game-review">
    <div class="current-game-review__wrapper">
        <div class="current-game-review__image">
            <img src="<?php the_field('main_img') ?>" alt="">
        </div>
        <div class="current-game-review__card">
            <div class="current-game-review__content-wrapper">
                <div class="time-to-pass__wrapper">
                    <div class="time-to-pass">
                        <img src="<? echo get_template_directory_uri(); ?>/images/time-to-pass.svg" alt="">
                        <p>Прохождение заняло <?php the_field('time_to_pass') ?></p>
                    </div>
                </div>
                <div class="current-game-info">
                    <div class="current-game-name">
                        <?php the_field('game_name') ?>
                    </div>
                    <div class="current-game-additional-info">
                        <div class="current-game-genre">
                            <div class="current-game-genre__name">
                                Жанр:
                            </div>
                            <div class="current-game-genre__content">
                                <?php the_field('genre') ?>
                            </div>
                        </div>
                        <div class="current-game-developer">
                            <div class="current-game-developer__name">
                                Разработчик:
                            </div>
                            <div class="current-game-developer__content">
                                <?php the_field('developer') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wp-content">
                    <? the_content(); ?>
                </div>
                <!-- <div class="backstory">
                                <h2 class="backstory__title">
                                    Предыстория
                                </h2>
                                <div class="backstory__content">
									<?php the_field('backstory') ?>
                                </div>
                                <div class="backstory__image">
                                    <img src="<?php the_field('backstory_image') ?>" alt="">
                                </div>
                            </div>
                            <div class="gameplay-review">
                                <h2 class="gameplay-review__title">
                                    Геймплей и не только
                                </h2>
                                <div class="gameplay-review__content">
									<?php the_field('gameplay_review') ?>
                                </div>
                                <div class="gameplay-review__images">
                                    <img src="<?php the_field('gameplay_review_image_1') ?>" alt="">
                                    <img src="<?php the_field('gameplay_review_image_2') ?>" alt="">
                                    <img src="<?php the_field('gameplay_review_image_3') ?>" alt="">
                                </div>
                            </div>
                            <div class="game-info-list">
                                <h2 class="game-info-list__title">
                                    Пример маркированного списка
                                </h2>
                                <ul class="game-info-list__content">
                                    <?php the_field('game_info_list') ?>
                                </ul>
                                <div class="game-info-list__image">
                                    <img src="<?php the_field('game_info_image') ?>" alt="">
                                </div>
                            </div>
                            <div class="quote-example">
                                <h2 class="quote-example__title">
                                    Пример цитаты
                                </h2>
                                <div class="quote-card">
                                    <div class="quote-card__left">
                                        <div class="quote-card__quote-image">
                                            <img src="<? echo get_template_directory_uri(); ?>/images/quote-image.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="quote-card__right">
                                        <div class="quote-card__content">
                                            <?php the_field('quote_example') ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                <div class="game-opinion">
                    <?
                    if (have_rows('pluses_repeater')) :
                    ?>
                        <div class="pleased">
                            <div class="pleased__title">
                                <img src="<? echo get_template_directory_uri(); ?>/images/pleased-image.svg" alt="">
                                <p>Порадовало</p>
                            </div>
                            <div class="pleased__image">
                                <img src="<? the_field('pluses_img'); ?>" alt="">
                            </div>
                            <ul class="pleased__content">
                                <?
                                while (have_rows('pluses_repeater')) : the_row();
                                    $sub_value = get_sub_field('pluses_repeater_item');
                                ?>
                                    <li><? echo $sub_value; ?></li>
                                <?
                                endwhile;
                                ?>
                            </ul>
                        </div>
                    <?
                    endif;
                    ?>
                    <?
                    if (have_rows('upset_repeater')) :
                    ?>
                        <div class="upset">
                            <div class="upset__title">
                                <img src="<? echo get_template_directory_uri(); ?>/images/upset-image.svg" alt="">
                                <p>Огорчило</p>
                            </div>
                            <div class="upset__image">
                                <img src="<? the_field('upset_img'); ?>" alt="">
                            </div>
                            <ul class="upset__content">
                                <?
                                while (have_rows('upset_repeater')) : the_row();
                                    $sub_value = get_sub_field('upset_repeater_item');
                                ?>
                                    <li><? echo $sub_value; ?></li>
                                <?
                                endwhile;
                                ?>
                            </ul>
                        </div>
                    <?
                    endif;
                    ?>
                    <!-- <div class="upset">
                        <div class="upset__title">
                            <img src="<? echo get_template_directory_uri(); ?>/images/upset-image.svg" alt="">
                            <p>Огорчило</p>
                        </div>
                        <div class="upset__image">
                            <img src="<? echo get_template_directory_uri(); ?>/images/game-opinion__image.png" alt="">
                        </div>
                        <ul class="upset__content">
                            <?php the_field('upset') ?>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="current-game-review__review-result">
            <div class="review-result__wrapper">
                <h2 class="review-result__title">
                    Заключение и итог
                </h2>
                <div class="review-result__content">
                    <?php the_field('review_result') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>