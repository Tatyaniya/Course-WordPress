<?php
/**
 *  Template name: Шаблон Кейсы
 */
get_header();
?>


<?php if ( have_posts() ) :

                    
    while ( have_posts() ) :  the_post();

        the_title();
        
    endwhile;

    the_posts_navigation();

    else :

    echo 'Нет кейсов';

    endif; 
    
?>


<?php get_footer();