<?php
/**
 * Title: Home: declarations masonry
 * Slug: shirushi-customs/front-declarations
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: Four declaration types as an uneven two-column masonry, the right column starting lower.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-dec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-dec"><!-- wp:paragraph {"className":"sc-gutter"} -->
<p class="sc-gutter"><?php echo esc_html( sc_t( 'dec_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-head","layout":{"type":"default"}} -->
<div class="wp-block-group sc-head"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2"><?php echo esc_html( sc_t( 'dec_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-lead"} -->
<p class="sc-lead"><?php echo esc_html( sc_t( 'dec_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-dec__cols","layout":{"type":"default"}} -->
<div class="wp-block-group sc-dec__cols"><!-- wp:group {"className":"sc-dec__col sc-dec__col--a sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sc-dec__col sc-dec__col--a sp-stagger"><?php
$sc_items = array( 1 => array( 'd1', 'r45' ), 3 => array( 'd3', 'r32' ), 2 => array( 'd2', 'r32' ), 4 => array( 'd4', 'r45' ) );
foreach ( array( 'a' => array( 1, 3 ), 'b' => array( 2, 4 ) ) as $col => $ids ) :
	if ( 'b' === $col ) :
		?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-dec__col sc-dec__col--b sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sc-dec__col sc-dec__col--b sp-stagger"><?php
	endif;
	foreach ( $ids as $n ) :
		list( $file, $ratio ) = $sc_items[ $n ];
		?>

<!-- wp:group {"className":"sc-dec__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-dec__item sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-ph sc-ph--<?php echo esc_attr( $ratio ); ?>"} -->
<figure class="wp-block-image size-full sc-ph sc-ph--<?php echo esc_attr( $ratio ); ?>"><img src="<?php echo esc_url( $img . $file . '.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'alt_' . $file ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sc-num"} -->
<p class="sc-num">( 0<?php echo (int) $n; ?> )</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sc-h3"} -->
<h3 class="wp-block-heading sc-h3"><?php echo esc_html( sc_t( 'dec' . $n . '_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'dec' . $n . '_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-more"} -->
<p class="sc-more"><a href="/services/"><?php echo esc_html( sc_t( 'dec_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php
	endforeach;
endforeach;
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
