<?php
/**
 * Title: Home: onboarding in four steps
 * Slug: tsunagu-systems/onboarding
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Description: Four short onboarding steps with their durations in one line on a full wisteria field, no images.
 */
?>
<!-- wp:group {"tagName":"section","className":"ts-onb","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ts-onb">
<!-- wp:paragraph {"className":"ts-label"} -->
<p class="ts-label"><?php echo esc_html( tsunagu_systems_t( 'ob_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ts-sec__title"} -->
<h2 class="wp-block-heading ts-sec__title"><?php echo esc_html( tsunagu_systems_t( 'ob_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<ol class="ts-onb__line"><li class="ts-onb__step"><span class="ts-onb__no">01</span><strong><?php echo esc_html( tsunagu_systems_t( 'ob1_t' ) ); ?></strong><span class="ts-onb__d"><?php echo esc_html( tsunagu_systems_t( 'ob1_d' ) ); ?></span></li><li class="ts-onb__step"><span class="ts-onb__no">02</span><strong><?php echo esc_html( tsunagu_systems_t( 'ob2_t' ) ); ?></strong><span class="ts-onb__d"><?php echo esc_html( tsunagu_systems_t( 'ob2_d' ) ); ?></span></li><li class="ts-onb__step"><span class="ts-onb__no">03</span><strong><?php echo esc_html( tsunagu_systems_t( 'ob3_t' ) ); ?></strong><span class="ts-onb__d"><?php echo esc_html( tsunagu_systems_t( 'ob3_d' ) ); ?></span></li><li class="ts-onb__step"><span class="ts-onb__no">04</span><strong><?php echo esc_html( tsunagu_systems_t( 'ob4_t' ) ); ?></strong><span class="ts-onb__d"><?php echo esc_html( tsunagu_systems_t( 'ob4_d' ) ); ?></span></li></ol>
<!-- /wp:html --></section>
<!-- /wp:group -->
