<?php
/**
 * Title: Home: book a visit
 * Slug: madoka-childcare/front-visit
 * Categories: madoka-childcare
 * Description: Band with a torn top, a pebble photograph across it with a white tab, the visit paragraph, four enrolment steps and the badge.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-visit mc-band mc-torn-top mc-torn-bottom","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-visit mc-band mc-torn-top mc-torn-bottom"><!-- wp:group {"className":"mc-wrap mc-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap mc-visit__grid"><!-- wp:group {"className":"mc-visit__l","layout":{"type":"default"}} -->
<div class="wp-block-group mc-visit__l"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-pebble sp-reveal sp-reveal--zoom mc-pop"} -->
<figure class="wp-block-image size-full mc-pebble sp-reveal sp-reveal--zoom mc-pop"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p17' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mc-tab"} -->
<p class="mc-tab"><?php echo esc_html( madoka_childcare_t( 'visit_tab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-visit__card"} -->
<p class="mc-visit__card"><strong><?php echo esc_html( madoka_childcare_t( 'visit_card_h' ) ); ?></strong><br><?php echo wp_kses( madoka_childcare_t( 'visit_card' ), array( 'br' => array() ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-visit__r","layout":{"type":"default"}} -->
<div class="wp-block-group mc-visit__r"><!-- wp:heading {"level":2,"className":"mc-stripe mc-stripe--band mc-stripe--sm sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading mc-stripe mc-stripe--band mc-stripe--sm sp-reveal sp-reveal--wipe"><mark class="mc-stripe__in"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'visit_h' ) ) ), array( 'br' => array() ) ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'visit_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'visit_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true,"className":"mc-steps"} -->
<ol class="wp-block-list mc-steps"><li><?php echo esc_html( madoka_childcare_t( 'step1' ) ); ?></li><li><?php echo esc_html( madoka_childcare_t( 'step2' ) ); ?></li><li><?php echo esc_html( madoka_childcare_t( 'step3' ) ); ?></li><li><?php echo esc_html( madoka_childcare_t( 'step4' ) ); ?></li></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/enrolment/"><?php echo esc_html( madoka_childcare_t( 'visit_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-badge mc-badge--static"} -->
<p class="mc-badge mc-badge--static"><a href="/visit/"><span class="mc-badge__t"><?php echo wp_kses( madoka_childcare_t( 'book' ), array( 'br' => array() ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
