<?php
/**
 * The sidebar containing the main widget areas.
 *
 * @package Bow
 */
?>

<aside class="site-secondary widget-area col-xs-12 col-md-4" role="complementary">

    <?php if (! dynamic_sidebar('Sidebar')) : ?>

        <div id="search" class="widget widget_search">
            <?php get_search_form(); ?>
        </div><!-- .widget -->

        <div id="archives" class="widget">
            <h1 class="widget-title"><?php _e('Archives', 'bow'); ?></h1>
            <ul>
                <?php wp_get_archives([ 'type' => 'monthly' ]); ?>
            </ul>
        </div><!-- .widget -->

        <div id="meta" class="widget">
            <h1 class="widget-title"><?php _e('Meta', 'bow'); ?></h1>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </div><!-- .widget -->

    <?php endif; ?>

</aside><!-- .site-secondary -->
