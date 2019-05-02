<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wayup
 */

get_header();
?>

        <section class="inner clients">
			<div class="wrapper">
				<h2 class="error-title secondary-title"><span>Ошибка 404</span><br></h2>
                <h3 class="error__box">Страница не найдена.</h3>
                <div class="error-replacement">Зато, у нас есть много других страниц:</div>
                
                <nav id="nav-wrap" class="menu">
                    
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-header',
                        'menu_id'        => 'nav',
                        'menu_class'	 => 'menu__list',
                        'container'		 => ''
                    ) );
                ?>

                </nav>
            </div>
        </section>

<?php
get_footer();
