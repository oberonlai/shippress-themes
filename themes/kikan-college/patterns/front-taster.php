<?php
/**
 * Title: Home: taster Saturday band
 * Slug: kikan-college/front-taster
 * Categories: kikan-college
 * Viewport Width: 1440
 * Description: Tinted band with white hatching, circles, a date tile and two edge photographs.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"taster","align":"full","className":"kc-sec kc-tas","layout":{"type":"default"}} -->
<section id="taster" class="wp-block-group alignfull kc-sec kc-tas">
<!-- wp:group {"className":"kc-tas__ph kc-tas__ph--l sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group kc-tas__ph kc-tas__ph--l sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--11"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--11"><img src="<?php echo kikan_college_img( 'open-tools.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_tas1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-tas__mid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-tas__mid">
<!-- wp:group {"className":"kc-head sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-head sp-reveal sp-reveal--wipe">
<!-- wp:paragraph {"className":"kc-head__n"} -->
<p class="kc-head__n"><?php echo esc_html( kikan_college_t( 'tas_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-head__h"} -->
<h2 class="wp-block-heading kc-head__h"><?php echo esc_html( kikan_college_t( 'tas_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="kc-rule" aria-hidden="true"></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-ticks-list","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ticks-list">
<!-- wp:paragraph {"className":"kc-tickrow"} -->
<p class="kc-tickrow"><svg class="kc-tickbox" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><rect width="20" height="20" rx="3" fill="#B8683A"/><path d="M5 10.5l3.2 3.2L15 7" fill="none" stroke="#fff" stroke-width="2"/></svg><span><?php echo esc_html( kikan_college_t( 'tas_t1' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-tickrow"} -->
<p class="kc-tickrow"><svg class="kc-tickbox" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><rect width="20" height="20" rx="3" fill="#B8683A"/><path d="M5 10.5l3.2 3.2L15 7" fill="none" stroke="#fff" stroke-width="2"/></svg><span><?php echo esc_html( kikan_college_t( 'tas_t2' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="kc-hair"><span class="kc-hair__l" aria-hidden="true"></span><p class="kc-hair__t"><?php echo esc_html( kikan_college_t( 'tas_next' ) ); ?></p><span class="kc-hair__l" aria-hidden="true"></span></div>
<!-- /wp:html -->
<!-- wp:group {"className":"kc-date","layout":{"type":"default"}} -->
<div class="wp-block-group kc-date">
<!-- wp:paragraph {"className":"kc-date__a"} -->
<p class="kc-date__a"><?php echo kikan_college_lines( 'tas_d1' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-date__b"} -->
<p class="kc-date__b"><?php echo esc_html( kikan_college_t( 'tas_d2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-date__c"} -->
<p class="kc-date__c"><?php echo esc_html( kikan_college_t( 'tas_d3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-small kc-small--c"} -->
<p class="kc-small kc-small--c"><?php echo esc_html( kikan_college_t( 'tas_when' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns">
<!-- wp:button {"className":"kc-pill kc-pill--solid"} -->
<div class="wp-block-button kc-pill kc-pill--solid"><a class="wp-block-button__link wp-element-button" href="/open-days/"><?php echo esc_html( kikan_college_t( 'tas_btn' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-tas__ph kc-tas__ph--r sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group kc-tas__ph kc-tas__ph--r sp-reveal sp-reveal--zoom">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-ph kc-ph--32"} -->
<figure class="wp-block-image size-full kc-ph kc-ph--32"><img src="<?php echo kikan_college_img( 'contact-yard.webp' ); ?>" alt="<?php echo kikan_college_a( 'alt_tas2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
