<?php

if ( ! is_active_sidebar( 'woocommerce' ) ) {
	return;
}
?>

    <aside class="sidebar">

        <?php dynamic_sidebar( 'woocommerce'); ?>

        <div class="rating">
            <h5 class="rating__title">Рейтинг</h5>
            <div class="rating__block">
                <div class="rate"></div>
                <span>(113)</span>
            </div>
            <div class="rating__block">
                <div class="rate"></div>
                <span>(74)</span>
            </div>
            <div class="rating__block">
                <div class="rate"></div>
                <span>(8)</span>
            </div>
        </div>

        <div class="banner" style="background: url(img/banner1.jpg) no-repeat center top/ cover;">
            <h4 class="banner__title">Часы Rado</h4>
            <p class="banner__text">со скидкой -30%</p>
            <a href="#" class="banner__btn">Купить</a>
        </div>

    </aside>