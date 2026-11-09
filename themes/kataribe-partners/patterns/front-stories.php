<?php
/**
 * Title: Home: three stories
 * Slug: kataribe-partners/front-stories
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Heading and three story cards with a photograph, a navy sector label, a title, a paragraph and a circle arrow.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"kp-sec kp-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull kp-sec kp-stories"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:heading {"className":"kp-h2"} -->
<h2 class="wp-block-heading kp-h2"><?php echo esc_html( kataribe_partners_t( 'st_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-subline"} -->
<p class="kp-subline"><?php echo esc_html( kataribe_partners_t( 'st_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kp-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kp-cards sp-stagger"><?php
$imgs  = array( 1 => 'h09-heat-pump.webp', 2 => 'h10-lab-corridor.webp', 3 => 'h11-bakery.webp' );
$posts = array( 1 => 'a-launch-week-for-a-quieter-heat-pump', 2 => 'trial-results-under-embargo-in-plain-words', 3 => 'three-openings-three-weeks-of-local-press' );
for ( $n = 1; $n <= 3; $n++ ) : ?><!-- wp:group {"className":"kp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kp-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-card__img"} -->
<figure class="wp-block-image size-full kp-card__img"><img src="<?php echo $i( $imgs[ $n ] ); ?>" alt="<?php echo $a( 'alt_st_' . $n ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kp-card__label"} -->
<p class="kp-card__label"><span class="kp-label"><?php echo $e( 'st_' . $n . '_s' ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kp-card__title"} -->
<h3 class="wp-block-heading kp-card__title"><?php echo $e( 'st_' . $n . '_t' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-card__text"} -->
<p class="kp-card__text"><?php echo $e( 'st_' . $n . '_p' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-circle"} -->
<p class="kp-circle"><a href="/<?php echo esc_attr( $posts[ $n ] ); ?>/" aria-label="<?php echo esc_attr( kataribe_partners_t( 'st_read' ) ); ?>: <?php echo $a( 'st_' . $n . '_t' ); ?>"> </a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
