<?php
/**
 *  Template name: Шаблон Главная
 */
get_header();
?>

<?php 
// дефолтная авторизация вп
/*if(is_user_logged_in()) {
    echo 'hello! <a href="' . wp_logout_url(get_permalink()).'">OUT</a>';
} else {
    wp_login_form();
}*/

 ?>
<?php
    while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php get_footer();