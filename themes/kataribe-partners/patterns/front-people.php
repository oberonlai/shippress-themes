<?php
/**
 * Title: Home: people
 * Slug: kataribe-partners/front-people
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Pale band: heading, a wide 21:9 team photograph, a short paragraph and seven name rows with top rules.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"kp-sec kp-people","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull kp-sec kp-people"><!-- wp:group {"className":"kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-wrap"><!-- wp:heading {"className":"kp-h2"} -->
<h2 class="wp-block-heading kp-h2"><?php echo esc_html( kataribe_partners_t( 'pe_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-subline"} -->
<p class="kp-subline"><?php echo esc_html( kataribe_partners_t( 'pe_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-people__img"} -->
<figure class="wp-block-image size-full kp-people__img"><img src="<?php echo $i( 'h12-team-table.webp' ); ?>" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_people' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kp-people__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kp-people__grid"><!-- wp:paragraph {"className":"kp-people__text"} -->
<p class="kp-people__text"><?php echo esc_html( kataribe_partners_t( 'pe_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kp-names","layout":{"type":"default"}} -->
<div class="wp-block-group kp-names"><?php for ( $n = 1; $n <= 7; $n++ ) : ?><!-- wp:group {"className":"kp-name","layout":{"type":"default"}} -->
<div class="wp-block-group kp-name"><!-- wp:paragraph {"className":"kp-name__n"} -->
<p class="kp-name__n"><?php echo $e( 'pe_' . $n . '_n' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-name__r"} -->
<p class="kp-name__r"><?php echo $e( 'pe_' . $n . '_r' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endfor; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
