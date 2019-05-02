<?php

get_header();

?>

<!-- Services -->
    <section class="inner services tabs">
        <div class="wrapper">
            <h2 class="services__title secondary-title"><span><?php echo $wayup_options['service_archive_title_1']; ?></span><br><?php echo $wayup_options['service_archive_title_2']; ?></h2>
            <div class="tabs__wrap">

                <p class="tabs__descr"><?php echo $wayup_options['service_archive_desc']; ?></p>
                <!-- Cases titles -->
                <ul class="tabs__caption">
                    <!-- получаем таксономи -->
                    <?php $services_types = get_terms( array(
                        'taxonomy' => 'service-type',
                        'hide_empty' => false,
                    ) );
                    
                    $i = 0;
                    $active = '';
                    foreach ( $services_types as $type ) {
                        if($i == 0) { 
                            $active = 'active';
                        } else {
                            $active = '';
                        }
                        echo '<li class="'.$active.'">'.$type->name.'</li>';
                        $i++;
                    }
                    ?>
                </ul>
            </div>
            <!-- Выводим контент -->
            <?php 
            $j = 0;
            $current = '';
            foreach ( $services_types as $category ) { 
                if( $j == 0 ) {
                    $current = 'active';
                } else {
                    $current = '';
                }
                ?>
                <div class="tabs__content <?php echo esc_attr( $current ); ?>">
                    <ul class="services__list">
                        <?php 
                        // посты, соответствующие родительской категории 
                        $services = new WP_Query(array(
                            'post_type'     => 'service',
                            'posts_per_page' => -1, // вытащит все, что найдет в базе данных
                            'tax_query'     => array(
                                array(
                                    'taxonomy' => 'service-type',
                                    'field'    => 'slug',
                                    'terms'    => $category->slug // подкатегории
                                ),
                            ),
                        ));

                        if ( $services->have_posts() ) :

                            while ( $services->have_posts() ) : $services->the_post(); 

                                $services_icon_bg_style = '';
                                $services_icon_item_style = '';

                                if (get_metadata('post', get_the_ID(), 'wayup_service_icon', true)) {
                                    $services_icon_bg_style = 'services__bg_'.get_metadata('post', get_the_ID(), 'wayup_service_icon', true);
                                    $services_icon_item_style = 'services__item_'.get_metadata('post', get_the_ID(), 'wayup_service_icon', true);
                                } else {
                                    $services_icon_bg_style = 'services__bg_stat';
                                    $services_icon_item_style = 'services__item_stat';
                                } ?>

                                <li class="services__item <?php echo $services_icon_item_style; ?>">
                                    <h3 class="services__heading"><?php the_title(); ?></h3>
                                    <!-- Вывести отрывок -->
                                    <div class="services__descr" id="services__descr"><?php the_excerpt(); ?></div>
                                    <p class="services__price"><?php echo $wayup_options['service_currency']; echo get_metadata('post', get_the_ID(), 'wayup_service_cost', true); ?></p>
                                    <!-- для шаблона текст завернуть в ф-цию перевода -->
                                    <a href="<?php the_permalink(); ?>" class="services__order btn">Подробнее</a>
                                    <div class="services__bg <?php echo $services_icon_bg_style; ?>"></div>
                                </li>
                        <?php endwhile;
                            wp_reset_postdata();
                            endif;
                        ?>
                    </ul>
                </div><!-- End cases content one-->
                
            <?php 
                $j++;
            } ?>
            
        </div>

    </section><!-- End services -->

<?php	

get_footer();