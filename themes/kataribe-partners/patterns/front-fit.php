<?php
/**
 * Title: Home: brief-fit cells
 * Slug: kataribe-partners/front-fit
 * Categories: kataribe-partners
 * Keywords: public relations, agency
 * Viewport Width: 1440
 * Description: Heading, text, MORE pill and a 4:3 photograph at the left; nine label cells split by 1 px ticks at the right, one filled navy.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fit","className":"kp-sec kp-fit","layout":{"type":"default"}} -->
<section id="fit" class="wp-block-group alignfull kp-sec kp-fit"><!-- wp:group {"className":"kp-split kp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-split kp-wrap"><!-- wp:group {"className":"kp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group kp-split__text"><!-- wp:heading {"className":"kp-h2"} -->
<h2 class="wp-block-heading kp-h2"><?php echo esc_html( kataribe_partners_t( 'fit_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-subline"} -->
<p class="kp-subline"><?php echo esc_html( kataribe_partners_t( 'fit_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kataribe_partners_t( 'fit_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-more"} -->
<p class="kp-more"><a href="#retainers"><?php echo esc_html( kataribe_partners_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-cellwrap","layout":{"type":"default"}} -->
<div class="wp-block-group kp-cellwrap"><!-- wp:group {"className":"kp-cells sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kp-cells sp-stagger"><?php for ( $n = 1; $n <= 9; $n++ ) : ?><!-- wp:paragraph {"className":"kp-cell sp-reveal sp-reveal--up<?php echo 1 === $n ? ' is-active' : ''; ?>"} -->
<p class="kp-cell sp-reveal sp-reveal--up<?php echo 1 === $n ? ' is-active' : ''; ?>"><a href="#retainers"><span><?php echo $e( 'fit_' . $n ); ?></span></a></p>
<!-- /wp:paragraph -->

<?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kp-cells__note"} -->
<p class="kp-cells__note"><?php echo esc_html( kataribe_partners_t( 'fit_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-fit__img kp-wrap"} -->
<figure class="wp-block-image size-full kp-fit__img kp-wrap"><img src="<?php echo $i( 'h03-sorting-cards.webp' ); ?>" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_fit' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
