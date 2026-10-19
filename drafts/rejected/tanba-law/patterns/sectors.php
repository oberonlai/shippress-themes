<?php
/**
 * Title: Home: sectors
 * Slug: tanba-law/sectors
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: Sectors served as a plain serif text list beside a low-key meeting room photograph.
 */
?>
<!-- wp:group {"tagName":"section","className":"tb-sc","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tb-sc">
<!-- wp:html -->
<figure class="tb-sc__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_meeting' ) ); ?>" loading="lazy"/></figure>
<!-- /wp:html --><!-- wp:group {"className":"tb-sc__col","layout":{"type":"default"}} -->
<div class="wp-block-group tb-sc__col"><!-- wp:paragraph {"className":"tb-label"} -->
<p class="tb-label"><?php echo esc_html( tanba_law_t( 'sc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tb-sec__title"} -->
<h2 class="wp-block-heading tb-sec__title"><?php echo esc_html( tanba_law_t( 'sc_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tb-sc__lead"} -->
<p class="tb-sc__lead"><?php echo esc_html( tanba_law_t( 'sc_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="tb-sc__list"><li>Shipping and logistics</li><li>Software and data</li><li>Hotels and restaurants</li><li>Construction</li><li>Healthcare practices</li><li>Retail and e-commerce</li><li>Family-owned manufacturers</li><li>Schools and charities</li><li>Architects and engineers</li><li>Start-ups and their investors</li><li>Property owners</li><li>Private clients</li></ul>
<!-- /wp:html --></div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
