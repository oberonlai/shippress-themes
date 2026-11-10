<?php
/**
 * Title: Home: rollout rows
 * Slug: genba-diary/front-rollout
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Label, heading, a paragraph and four ruled day rows with a 3:4 photograph at the right, closed by the request button.
 */
?>
<!-- wp:group {"className":"gd-rollout gd-sec","layout":{"type":"default"},"tagName":"section","anchor":"rollout","align":"full"} -->
<section id="rollout" class="wp-block-group alignfull gd-rollout gd-sec"><!-- wp:group {"className":"gd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wide"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_rollout' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'rollout_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-split","layout":{"type":"default"}} -->
<div class="wp-block-group gd-split"><!-- wp:group {"className":"gd-split__l","layout":{"type":"default"}} -->
<div class="wp-block-group gd-split__l"><!-- wp:paragraph {"className":"gd-rollout__p"} -->
<p class="gd-rollout__p"><?php echo esc_html( genba_diary_t( 'rollout_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gd-rows","layout":{"type":"default"}} -->
<div class="wp-block-group gd-rows"><!-- wp:group {"className":"gd-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-row__d"} -->
<p class="gd-row__d"><?php echo esc_html( genba_diary_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gd-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row__b"><!-- wp:heading {"level":3,"className":"gd-row__t"} -->
<h3 class="wp-block-heading gd-row__t"><?php echo esc_html( genba_diary_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-row__p"} -->
<p class="gd-row__p"><?php echo esc_html( genba_diary_t( 'r1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-row__d"} -->
<p class="gd-row__d"><?php echo esc_html( genba_diary_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gd-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row__b"><!-- wp:heading {"level":3,"className":"gd-row__t"} -->
<h3 class="wp-block-heading gd-row__t"><?php echo esc_html( genba_diary_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-row__p"} -->
<p class="gd-row__p"><?php echo esc_html( genba_diary_t( 'r2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-row__d"} -->
<p class="gd-row__d"><?php echo esc_html( genba_diary_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gd-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row__b"><!-- wp:heading {"level":3,"className":"gd-row__t"} -->
<h3 class="wp-block-heading gd-row__t"><?php echo esc_html( genba_diary_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-row__p"} -->
<p class="gd-row__p"><?php echo esc_html( genba_diary_t( 'r3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-row__d"} -->
<p class="gd-row__d"><?php echo esc_html( genba_diary_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gd-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group gd-row__b"><!-- wp:heading {"level":3,"className":"gd-row__t"} -->
<h3 class="wp-block-heading gd-row__t"><?php echo esc_html( genba_diary_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gd-row__p"} -->
<p class="gd-row__p"><?php echo esc_html( genba_diary_t( 'r4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"gd-cta-wrap"} -->
<div class="wp-block-buttons gd-cta-wrap"><!-- wp:button {"className":"gd-cta"} -->
<div class="wp-block-button gd-cta"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( genba_diary_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-split__img sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full gd-split__img sp-reveal sp-reveal--up"><img src="<?php echo genba_diary_img( 'g13-gate-briefing.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g13' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
