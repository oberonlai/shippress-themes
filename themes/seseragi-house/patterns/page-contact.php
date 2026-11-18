<?php
/**
 * Title: Page: Contact
 * Slug: seseragi-house/page-contact
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: Contact: a quiet mist window, the contact form slot with a mailto fallback, the address, phone and hours, and how to arrive.
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-hero sese-hero--mist","layout":{"type":"default"}} -->
<section class="wp-block-group sese-hero sese-hero--mist">
<!-- wp:group {"className":"sese-win sese-win--mist","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sese-win--mist">
<!-- wp:group {"className":"sese-win__fg sese-win__fg--mist","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg sese-win__fg--mist">
<!-- wp:heading {"level":1,"className":"sese-h1 sese-h1--page"} -->
<h1 class="wp-block-heading sese-h1 sese-h1--page"><?php echo seseragi_house_lines( 'contact_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'contact_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in sese-in--first","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in sese-in--first">
<!-- wp:group {"className":"sese-ask__grid sese-ask__grid--in","layout":{"type":"default"}} -->
<div class="wp-block-group sese-ask__grid sese-ask__grid--in">
<!-- wp:group {"className":"sese-ask__text","layout":{"type":"default"}} -->
<div class="wp-block-group sese-ask__text">
<!-- wp:paragraph {"className":"sese-crumb"} -->
<p class="sese-crumb"><a href="/"><?php echo esc_html( seseragi_house_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( seseragi_house_t( 'crumb_contact' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'contact_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'contact_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'contact_s1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php
ob_start(); ?>
<!-- wp:buttons {"className":"sese-btn-wrap"} -->
<div class="wp-block-buttons sese-btn-wrap"><!-- wp:button {"className":"sese-btn"} -->
<div class="wp-block-button sese-btn"><a class="wp-block-button__link wp-element-button" href="mailto:stay@seseragihouse.example?subject=<?php echo esc_attr( rawurlencode( seseragi_house_t( 'contact_subject' ) ) ); ?>"><?php echo esc_html( seseragi_house_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-hrs sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hrs sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-eyebrow"} -->
<p class="sese-eyebrow"><?php echo esc_html( seseragi_house_t( 'hrs_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l1' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l2' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l3' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l4' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v4' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'side_phone_l' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'side_phone_v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'side_email_l' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'side_email_v' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in">
<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up ">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'contact_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'contact_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'contact_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'contact_s3_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
