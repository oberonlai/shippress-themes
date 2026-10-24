<?php
/**
 * Title: Home: contact band
 * Slug: hayate-cycles/front-contact
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Full-bleed ink contact band in three columns with a booking link, phone and hours.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-contact","layout":{"type":"default"},"anchor":"contact"} -->
<section id="contact" class="wp-block-group alignfull hc-contact">
<!-- wp:group {"className":"hc-contact__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-contact__grid">
<!-- wp:group {"className":"hc-contact__a","layout":{"type":"default"}} -->
<div class="wp-block-group hc-contact__a">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'ct_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'ct_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-contact__b","layout":{"type":"default"}} -->
<div class="wp-block-group hc-contact__b">
<!-- wp:paragraph {"className":"hc-contact__line"} -->
<p class="hc-contact__line"><?php echo esc_html( hayate_cycles_t( 'ct_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-contact__line"} -->
<p class="hc-contact__line"><?php echo esc_html( hayate_cycles_t( 'ct_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-contact__line"} -->
<p class="hc-contact__line"><?php echo esc_html( hayate_cycles_t( 'ct_l3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-contact__c","layout":{"type":"default"}} -->
<div class="wp-block-group hc-contact__c">
<!-- wp:paragraph {"className":"hc-contact__book"} -->
<p class="hc-contact__book"><a href="<?php echo esc_url( home_url( '/visit/#book' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'ct_book' ) ); ?></a><a class="hc-circle" href="<?php echo esc_url( home_url( '/visit/#book' ) ); ?>" aria-label="<?php echo esc_attr( hayate_cycles_t( 'ct_book' ) ); ?>">→</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-contact__small"} -->
<p class="hc-contact__small"><?php echo esc_html( hayate_cycles_t( 'ct_call' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-contact__phone"} -->
<p class="hc-contact__phone"><a href="tel:+3295550127"><?php echo esc_html( hayate_cycles_t( 'ct_phone' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-contact__small"} -->
<p class="hc-contact__small"><a href="mailto:hello@hayate-cycles.example"><?php echo esc_html( hayate_cycles_t( 'ct_hours' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
