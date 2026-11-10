<?php
/**
 * Title: Home: the site hour as four stacking cards
 * Slug: kantei-valuers/front-site-hour
 * Categories: kantei-valuers
 * Keywords: process, site hour, sticky
 * Viewport Width: 1440
 * Description: Intro and four split cards (minute stamp, heading, text at the left and a photograph at the right) that pin one over the other with a 20 px stepped edge.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
$l = 'kantei_valuers_lines';
$photos = array( 1 => 'h06-plan.webp', 2 => 'h07-tape.webp', 3 => 'h08-condition.webp', 4 => 'h09-documents.webp' );
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"site-hour","className":"kv-sec kv-hour","layout":{"type":"default"}} -->
<section id="site-hour" class="wp-block-group alignfull kv-sec kv-hour"><!-- wp:group {"className":"kv-hour__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-hour__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo esc_html( kantei_valuers_t( 'hour_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $l( 'hour_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kantei_valuers_t( 'hour_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-deck","layout":{"type":"default"}} -->
<div class="wp-block-group kv-deck"><?php foreach ( $photos as $n => $img ) : ?><!-- wp:group {"className":"kv-deck__card kv-deck__card--<?php echo $n; ?>","layout":{"type":"default"}} -->
<div class="wp-block-group kv-deck__card kv-deck__card--<?php echo $n; ?>"><!-- wp:group {"className":"kv-deck__text","layout":{"type":"default"}} -->
<div class="wp-block-group kv-deck__text"><!-- wp:paragraph {"className":"kv-deck__stamp"} -->
<p class="kv-deck__stamp"><?php echo $e( "h{$n}_stamp" ); ?> <span><?php echo esc_html( kantei_valuers_t( 'min' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kv-deck__title"} -->
<h3 class="wp-block-heading kv-deck__title"><?php echo $e( "h{$n}_title" ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo $e( "h{$n}_body" ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"kv-deck__img"} -->
<figure class="wp-block-image size-large kv-deck__img"><img src="<?php echo $i( $img ); ?>" alt="<?php echo $a( "alt_h{$n}" ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
