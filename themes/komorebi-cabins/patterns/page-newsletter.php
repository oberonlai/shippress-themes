<?php
/**
 * Title: Page: The Woodshed Letter
 * Slug: komorebi-cabins/page-newsletter
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: Standalone subscription page: three example items and the newsletter slot on a forest-green panel.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-head kc-head--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-head kc-head--plain"><!-- wp:group {"className":"kc-head__gutter","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head__gutter"><!-- wp:paragraph {"className":"kc-head__kicker"} -->
<p class="kc-head__kicker"><?php echo wp_kses_post( komorebi_cabins_t( 'k2a8b1510' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"kc-head__h1"} -->
<h1 class="wp-block-heading kc-head__h1"><?php echo wp_kses_post( komorebi_cabins_t( 'kbce0dc10' ) ); ?></h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-intro-in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-intro-in"><!-- wp:paragraph {"className":"kc-lead kc-pintro"} -->
<p class="kc-lead kc-pintro"><?php echo wp_kses_post( komorebi_cabins_t( 'kab03b8ac' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-list kc-letteritems","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-list kc-letteritems"><!-- wp:group {"className":"kc-list__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-list__in"><!-- wp:group {"className":"kc-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-titlebar"><!-- wp:heading {"level":2,"className":"kc-title"} -->
<h2 class="wp-block-heading kc-title"><?php echo wp_kses_post( komorebi_cabins_t( 'k0abcc561' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-bracket"} -->
<p class="kc-bracket"><?php echo wp_kses_post( komorebi_cabins_t( 'k6c025f5b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled kc-letteritems","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled kc-letteritems"><!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k"><?php echo wp_kses_post( komorebi_cabins_t( 'k5eca1f5c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v"><?php echo wp_kses_post( komorebi_cabins_t( 'kce39d00a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k"><?php echo wp_kses_post( komorebi_cabins_t( 'k2125e9d2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v"><?php echo wp_kses_post( komorebi_cabins_t( 'k063ccb41' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-ruled__row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ruled__row"><!-- wp:paragraph {"className":"kc-ruled__k"} -->
<p class="kc-ruled__k"><?php echo wp_kses_post( komorebi_cabins_t( 'k29a55516' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-ruled__v"} -->
<p class="kc-ruled__v"><?php echo wp_kses_post( komorebi_cabins_t( 'ke982cb90' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"subscribe","className":"kc-letterwrap kc-section","layout":{"type":"default"}} -->
<section id="subscribe" class="wp-block-group alignfull kc-letterwrap kc-section"><!-- wp:group {"className":"kc-letter kc-dark","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter kc-dark"><!-- wp:heading {"level":2,"className":"kc-letter__h"} -->
<h2 class="wp-block-heading kc-letter__h"><?php echo wp_kses_post( komorebi_cabins_t( 'kbce0dc10' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-letter__p"} -->
<p class="kc-letter__p"><?php echo wp_kses_post( komorebi_cabins_t( 'kaffae34a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-letter__form","layout":{"type":"default"}} -->
<div class="wp-block-group kc-letter__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@komorebi-cabins.example', 'label' => komorebi_cabins_t( 'forms_email' ), 'submit' => komorebi_cabins_t( 'forms_subscribe' ), 'notice' => komorebi_cabins_t( 'forms_mail_notice' ), 'subject' => komorebi_cabins_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec"><!-- wp:group {"className":"kc-sec__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__in sp-stagger"><!-- wp:heading {"level":2,"className":"kc-sec__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-sec__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( komorebi_cabins_t( 'k02b29ee4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( komorebi_cabins_t( 'kb8e3ca71' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec"><!-- wp:group {"className":"kc-sec__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__in sp-stagger"><!-- wp:heading {"level":2,"className":"kc-sec__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading kc-sec__h sp-reveal sp-reveal--up"><?php echo wp_kses_post( komorebi_cabins_t( 'k7f354f6e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-sec__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( komorebi_cabins_t( 'ke9d5d4fb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
