<?php
/**
 * Title: Page: Book a site measure
 * Slug: makido-shutters/page-contact
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact and booking page: lens head, form slot with mailto fallback, address and hours, two notice boxes and a photograph.
 */
?>
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"mk-cta"} -->
<div class="wp-block-buttons mk-cta"><!-- wp:button {"className":"mk-pill"} -->
<div class="wp-block-button mk-pill"><a class="wp-block-button__link wp-element-button" href="mailto:quotes@makido-shutters.example?subject=<?php echo rawurlencode( makido_shutters_t( 'measure_subject' ) ); ?>"><?php echo esc_html( makido_shutters_t( 'measure_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$mk_fallback = ob_get_clean();
?>
<!-- wp:group {"align":"full","className":"mk-lens mk-lens--head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-lens mk-lens--head">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:paragraph {"className":"mk-crumb"} -->
<p class="mk-crumb"><a href="/"><?php echo esc_html( makido_shutters_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( makido_shutters_t( 'contact_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textAlign":"center","className":"mk-h1"} -->
<h1 class="wp-block-heading has-text-align-center mk-h1"><?php echo esc_html( makido_shutters_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-lens__p mk-lens__p--c"} -->
<p class="mk-lens__p mk-lens__p--c"><?php echo esc_html( makido_shutters_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mk-sec mk-sec--contact","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mk-sec mk-sec--contact">
<!-- wp:group {"className":"mk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap">
<!-- wp:group {"className":"mk-contact","layout":{"type":"default"}} -->
<div class="wp-block-group mk-contact">
<!-- wp:group {"className":"mk-contact__a","layout":{"type":"default"}} -->
<div class="wp-block-group mk-contact__a">
<!-- wp:heading {"level":2,"className":"mk-h2 mk-h2--left"} -->
<h2 class="wp-block-heading mk-h2 mk-h2--left"><?php echo esc_html( makido_shutters_t( 'contact_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'contact_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'contact_s1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $mk_fallback ) ); ?>
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-contact__b","layout":{"type":"default"}} -->
<div class="wp-block-group mk-contact__b">
<!-- wp:group {"className":"mk-contact__info","layout":{"type":"default"}} -->
<div class="wp-block-group mk-contact__info">
<!-- wp:heading {"level":3,"className":"mk-h3"} -->
<h3 class="wp-block-heading mk-h3"><?php echo esc_html( makido_shutters_t( 'contact_h2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-contact__addr"} -->
<p class="mk-contact__addr"><?php echo esc_html( makido_shutters_t( 'contact_addr' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-contact__line"} -->
<p class="mk-contact__line"><?php echo esc_html( makido_shutters_t( 'contact_phone_l' ) ); ?> <a href="tel:+0214801948"><?php echo esc_html( makido_shutters_t( 'hd_phone' ) ); ?></a><br><?php echo esc_html( makido_shutters_t( 'contact_email_l' ) ); ?> <a href="mailto:quotes@makido-shutters.example">quotes@makido-shutters.example</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'contact_hours' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-notes","layout":{"type":"default"}} -->
<div class="wp-block-group mk-notes">
<!-- wp:paragraph {"className":"mk-note"} -->
<p class="mk-note"><a href="/how-it-works/"><strong class="mk-note__t"><?php echo esc_html( makido_shutters_t( 'contact_nt1_t' ) ); ?></strong><?php echo esc_html( makido_shutters_t( 'contact_nt1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-note","anchor":"emergency"} -->
<p id="emergency" class="mk-note"><a href="tel:+0214801948"><strong class="mk-note__t"><?php echo esc_html( makido_shutters_t( 'contact_nt2_t' ) ); ?></strong><?php echo esc_html( makido_shutters_t( 'contact_nt2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mk-contact__ph"} -->
<figure class="wp-block-image size-full mk-contact__ph"><img src="<?php echo makido_shutters_img( 'img-18.webp' ); ?>" alt="<?php echo makido_shutters_a( 'alt_p18' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
