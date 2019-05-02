<?php
/**
 *  Template name: Шаблон Корзины
 */

get_header();
?>

<section class="single cart">
    <div class="wrapper">

        <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

    </div>
</section>
		

<?php
get_footer();
