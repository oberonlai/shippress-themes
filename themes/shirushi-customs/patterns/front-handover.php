<?php
/**
 * Title: Home: handover dossier strip
 * Slug: shirushi-customs/front-handover
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: Five dossier cards where a photograph and its text panel are one unit, in a horizontally scrolling strip with a progress line and two round arrows.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"handover","className":"sc-sec sc-band sc-handover","layout":{"type":"default"}} -->
<section id="handover" class="wp-block-group alignfull sc-sec sc-band sc-handover"><!-- wp:group {"className":"sc-in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in"><!-- wp:group {"className":"sc-head","layout":{"type":"default"}} -->
<div class="wp-block-group sc-head"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2"><?php echo esc_html( sc_t( 'ho_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-lead"} -->
<p class="sc-lead"><?php echo esc_html( sc_t( 'ho_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-strip-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sc-strip-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"sc-strip","layout":{"type":"default"}} -->
<div class="wp-block-group sc-strip"><?php for ( $i = 1; $i <= 5; $i++ ) : ?>

<!-- wp:group {"className":"sc-card","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sc-card__ph"} -->
<figure class="wp-block-image size-full sc-card__ph"><img src="<?php echo esc_url( $img . 's' . $i . '.webp' ); ?>" alt="<?php echo esc_attr( sc_t( 'alt_s' . $i ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sc-card__txt"><!-- wp:heading {"level":3,"className":"sc-h3"} -->
<h3 class="wp-block-heading sc-h3"><?php echo esc_html( sc_t( 'st' . $i ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-card__p"} -->
<p class="sc-card__p"><?php echo esc_html( sc_t( 'ho' . $i . '_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/process/#stage-<?php echo (int) $i; ?>"><?php echo esc_html( sc_t( 'ho_more' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-tag"} -->
<p class="sc-tag">( 0<?php echo (int) $i; ?> / 05 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><?php endfor; ?></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sc-ctl"><button type="button" class="sc-ctl__btn sc-ctl__btn--prev" aria-label="<?php echo esc_attr( sc_t( 'ho_prev' ) ); ?>"></button><span class="sc-ctl__line" aria-hidden="true"><span class="sc-ctl__fill"></span></span><button type="button" class="sc-ctl__btn sc-ctl__btn--next" aria-label="<?php echo esc_attr( sc_t( 'ho_next' ) ); ?>"></button></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
