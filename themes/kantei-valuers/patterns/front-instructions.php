<?php
/**
 * Title: Home: two instruction panels and scope lists
 * Slug: kantei-valuers/front-instructions
 * Categories: kantei-valuers
 * Keywords: instructions, panels, lender, owner
 * Viewport Width: 1440
 * Description: Two full-photograph panels that touch with no gap, the right one to the window edge, half backed by the lead band, each with a line icon, sub-label, heading, text and a 44 px circle arrow; then two rule lists, what we value and what we do not.
 */
$e = 'kantei_valuers_e';
$a = 'kantei_valuers_a';
$i = 'kantei_valuers_img';
$ico = array(
	1 => '<svg class="kv-panel__ico" width="36" height="36" viewBox="0 0 36 36" aria-hidden="true" focusable="false"><path d="M4 14 18 5l14 9zM7 14v13M14 14v13M22 14v13M29 14v13M4 30h28M2 33h32" fill="none" stroke="#fff" stroke-width="1.5"/></svg>',
	2 => '<svg class="kv-panel__ico" width="36" height="36" viewBox="0 0 36 36" aria-hidden="true" focusable="false"><path d="M3 12h30l-2 7H5zM6 19v12h24V19M13 31V22h10v9M5 12 8 5h20l3 7" fill="none" stroke="#fff" stroke-width="1.5"/></svg>',
);
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"instructions","className":"kv-lead kv-ins","layout":{"type":"default"}} -->
<section id="instructions" class="wp-block-group alignfull kv-lead kv-ins"><!-- wp:group {"className":"kv-ins__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-ins__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kv-label kv-label--light"} -->
<p class="kv-label kv-label--light"><?php echo esc_html( kantei_valuers_t( 'ins_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kv-h2 kv-h2--light"} -->
<h2 class="wp-block-heading kv-h2 kv-h2--light"><?php echo esc_html( kantei_valuers_t( 'ins_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-panels","layout":{"type":"default"}} -->
<div class="wp-block-group kv-panels"><?php foreach ( array( 1 => 'h03-lender-desk.webp', 2 => 'h04-shop-owner.webp' ) as $n => $img ) : ?><!-- wp:cover {"url":"<?php echo $i( $img ); ?>","alt":"<?php echo $a( "alt_ins{$n}" ); ?>","dimRatio":0,"isDark":true,"className":"kv-panel kv-panel--<?php echo $n; ?> sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-cover is-dark kv-panel kv-panel--<?php echo $n; ?> sp-reveal sp-reveal--zoom"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo $a( "alt_ins{$n}" ); ?>" src="<?php echo $i( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:html -->
<?php echo $ico[ $n ]; ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"kv-label kv-label--white"} -->
<p class="kv-label kv-label--white"><?php echo $e( "ins{$n}_sub" ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kv-panel__title"} -->
<h3 class="wp-block-heading kv-panel__title"><?php echo $e( "ins{$n}_title" ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kv-panel__text"} -->
<p class="kv-panel__text"><?php echo $e( "ins{$n}_body" ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kv-circle kv-circle--light"} -->
<p class="kv-circle kv-circle--light"><a href="/instructions/" aria-label="<?php echo $a( "ins{$n}_title" ); ?>"><span class="kv-circle__ico" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"kv-sec kv-scope","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-sec kv-scope"><!-- wp:group {"className":"kv-scope__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kv-scope__grid"><!-- wp:group {"className":"kv-scope__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-scope__col sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kv-scope__h"} -->
<h3 class="wp-block-heading kv-scope__h"><?php echo esc_html( kantei_valuers_t( 'value_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kv-rules"} -->
<ul class="wp-block-list kv-rules"><?php for ( $n = 1; $n <= 5; $n++ ) : ?><!-- wp:list-item -->
<li><?php echo $e( "v{$n}" ); ?></li>
<!-- /wp:list-item -->

<?php endfor; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kv-scope__col kv-scope__col--no sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kv-scope__col kv-scope__col--no sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kv-scope__h"} -->
<h3 class="wp-block-heading kv-scope__h"><?php echo esc_html( kantei_valuers_t( 'novalue_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kv-rules"} -->
<ul class="wp-block-list kv-rules"><?php for ( $n = 1; $n <= 4; $n++ ) : ?><!-- wp:list-item -->
<li><?php echo $e( "n{$n}" ); ?></li>
<!-- /wp:list-item -->

<?php endfor; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
