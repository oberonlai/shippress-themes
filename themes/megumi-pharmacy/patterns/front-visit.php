<?php
/**
 * Title: Home: visit
 * Slug: megumi-pharmacy/front-visit
 * Categories: megumi-pharmacy
 * Keywords: visit, address, hours
 * Viewport Width: 1440
 * Description: Address, hours and phone as white text directly on a second parallax photograph, the shopfront.
 */
$img = get_theme_file_uri( 'assets/images/p09-shopfront.webp' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":40,"customOverlayColor":"#383736","minHeight":680,"minHeightUnit":"px","isDark":true,"align":"full","className":"mp-visit sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull mp-visit sp-parallax" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#383736"></span><img class="wp-block-cover__image-background" alt="Pharmacy shopfront on a high street in early morning, with a bench and bicycle." src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mp-visit__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-visit__col sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker">Visit</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2">1184 Queen Street East,<br>near the streetcar stop.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-hours"} -->
<p class="mp-hours">Mon–Fri 8:30–19:00<br>Sat 9:00–17:00<br>Sun 10:00–14:00<br>Statutory holidays closed</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-hours"} -->
<p class="mp-hours">Call <a href="tel:+14165550148">(416) 555-0148</a> or email counter@megumipharmacy.example. A pharmacist is at the counter through those hours.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mp-btn mp-btn--light"} -->
<div class="wp-block-button mp-btn mp-btn--light"><a class="wp-block-button__link wp-element-button" href="/visit/">Plan your visit →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
