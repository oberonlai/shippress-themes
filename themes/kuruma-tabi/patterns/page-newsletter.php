<?php
/**
 * Title: Page: season notes
 * Slug: kuruma-tabi/page-newsletter
 * Categories: kuruma-tabi
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter page: split head, three notes on what the list is for and the newsletter slot (email and submit are always present).
 */
?>
<!-- wp:group {"tagName":"main","className":"kt-main","layout":{"type":"default"}} -->
<main class="wp-block-group kt-main"><!-- wp:group {"tagName":"section","align":"full","className":"kt-hero kt-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-hero kt-hero--page"><!-- wp:group {"className":"kt-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__text"><!-- wp:heading {"level":1,"className":"kt-h1"} -->
<h1 class="wp-block-heading kt-h1"><span class="kt-w" style="--i:0"><?php echo esc_html( kuruma_tabi_t( 'nl2_h1' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-lede"} -->
<p class="kt-lede"><?php echo esc_html( kuruma_tabi_t( 'nl2_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kt-hero__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'family-sunset-road.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-three","layout":{"type":"default"}} -->
<div class="wp-block-group kt-three"><!-- wp:group {"className":"kt-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'nl2_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 'nl2_1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'nl2_2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 'nl2_2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-story sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kt-h3 kt-h3--s"} -->
<h3 class="wp-block-heading kt-h3 kt-h3--s"><?php echo esc_html( kuruma_tabi_t( 'nl2_3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-story__q"} -->
<p class="kt-story__q"><?php echo esc_html( kuruma_tabi_t( 'nl2_3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--wash","layout":{"type":"default"},"anchor":"join"} -->
<section id="join" class="wp-block-group alignfull kt-sec kt-sec--wash"><!-- wp:group {"className":"kt-wrap kt-wrap--narrow","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap kt-wrap--narrow"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'nl2_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'nl2_sub2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-form kt-form--page","layout":{"type":"default"}} -->
<div class="wp-block-group kt-form kt-form--page"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'plan@kurumatabi.example', 'label' => kuruma_tabi_t( 'forms_email' ), 'submit' => kuruma_tabi_t( 'forms_subscribe' ), 'notice' => kuruma_tabi_t( 'forms_mail_notice' ), 'subject' => kuruma_tabi_t( 'forms_mail_subject' ) ) ); ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
