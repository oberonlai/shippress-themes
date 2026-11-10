<?php
/**
 * Title: Home: three recent instructions
 * Slug: kantei-valuers/front-cases
 * Categories: kantei-valuers
 * Keywords: cases, recent, posts
 * Viewport Width: 1440
 * Description: Pale band with a sub-label, a two-line heading and three case cards: photograph, black chip with an accent date, title, text and a circle arrow.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
$l = 'kantei_valuers_lines';
$cases = array(
	1 => array( 'h16-corner-shop.webp', '/corner-shop-flat-above-refinance/' ),
	2 => array( 'h15-office.webp', '/two-floors-in-kilkenny/' ),
	3 => array( 'h14-warehouse.webp', '/warehouse-lease-renewal-in-naas/' ),
);
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"cases","className":"kv-sec kv-cases","layout":{"type":"default"}} -->
<section id="cases" class="wp-block-group alignfull kv-sec kv-cases"><!-- wp:group {"className":"kv-cases__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-cases__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label"} -->
<p class="kv-label"><?php echo esc_html( kantei_valuers_t( 'cases_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo $l( 'cases_title' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kv-cards sp-stagger"><?php foreach ( $cases as $n => $c ) : ?><!-- wp:group {"className":"kv-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-card sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"kv-card__img"} -->
<figure class="wp-block-image size-large kv-card__img"><img src="<?php echo $i( $c[0] ); ?>" alt="<?php echo $a( "alt_c{$n}" ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kv-card__meta"} -->
<p class="kv-card__meta"><span class="kv-chip"><?php echo $e( "c{$n}_chip" ); ?></span> <span class="kv-date"><?php echo $e( "c{$n}_date" ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kv-card__title"} -->
<h3 class="wp-block-heading kv-card__title"><a href="<?php echo esc_attr( $c[1] ); ?>"><?php echo $e( "c{$n}_title" ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-card__text"} -->
<p class="kv-card__text"><?php echo $e( "c{$n}_body" ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-circle"} -->
<p class="kv-circle"><a href="<?php echo esc_attr( $c[1] ); ?>" aria-label="<?php echo $a( "c{$n}_title" ); ?>"><span class="kv-circle__ico" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
