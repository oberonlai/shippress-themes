<?php
/**
 * Title: Page: Book
 * Slug: kaze-clinic/page-book
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Booking page: contact details and a booking form slot (the mailto button when no form plugin is active), then what happens next.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"kz-phead sp-parallax","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull kz-phead sp-parallax"><!-- wp:group {"className":"kz-phead__frame","layout":{"type":"default"}} -->
<div class="wp-block-group kz-phead__frame"><!-- wp:group {"className":"sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-phead__img"} -->
<figure class="wp-block-image size-full kz-phead__img"><img src="<?php echo kaze_clinic_img( 'visit-reception' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_visit-reception' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-phead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kz-phead__copy"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'bk_hl' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h1","level":1} -->
<h1 class="wp-block-heading kz-h1"><?php echo esc_html( kaze_clinic_t( 'bk_ht' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-phead__lead"} -->
<p class="kz-phead__lead"><?php echo esc_html( kaze_clinic_t( 'bk_hp' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-book-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-book-sec"><!-- wp:group {"className":"kz-wrap kz-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--page"><!-- wp:group {"className":"kz-book","layout":{"type":"default"}} -->
<div class="wp-block-group kz-book"><!-- wp:group {"className":"kz-book__info","layout":{"type":"default"}} -->
<div class="wp-block-group kz-book__info"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'bk_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kaze_clinic_t( 'bk_h_contact' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-intro"} -->
<p class="kz-intro"><?php echo esc_html( kaze_clinic_t( 'bk_p_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-clinic__addr"} -->
<p class="kz-clinic__addr"><?php echo esc_html( kaze_clinic_t( 'bk_addr' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'bk_phone' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'bk_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-clinic__note"} -->
<p class="kz-clinic__note"><?php echo esc_html( kaze_clinic_t( 'bk_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-book__form","layout":{"type":"default"}} -->
<div class="wp-block-group kz-book__form"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kz-btn"} -->
<div class="wp-block-button kz-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@kazeclinic.example?subject=<?php echo rawurlencode( kaze_clinic_t( 'forms_booking_subject' ) ); ?>"><?php echo esc_html( kaze_clinic_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec"><!-- wp:group {"className":"kz-wrap kz-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--page"><!-- wp:group {"className":"kz-rrs","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rrs"><!-- wp:group {"className":"kz-rr sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rr sp-reveal sp-reveal--up"><!-- wp:group {"className":"kz-rr__t","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rr__t"><!-- wp:heading {"className":"kz-pair","level":3} -->
<h3 class="wp-block-heading kz-pair"><?php echo esc_html( kaze_clinic_t( 'bk_r1t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'bk_r1s' ) ); ?></em></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-rr__b","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rr__b"><!-- wp:paragraph {"className":"kz-rr__p"} -->
<p class="kz-rr__p"><?php echo esc_html( kaze_clinic_t( 'bk_r1p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-rr sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rr sp-reveal sp-reveal--up"><!-- wp:group {"className":"kz-rr__t","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rr__t"><!-- wp:heading {"className":"kz-pair","level":3} -->
<h3 class="wp-block-heading kz-pair"><?php echo esc_html( kaze_clinic_t( 'bk_r2t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'bk_r2s' ) ); ?></em></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-rr__b","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rr__b"><!-- wp:paragraph {"className":"kz-rr__p"} -->
<p class="kz-rr__p"><?php echo esc_html( kaze_clinic_t( 'bk_r2p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
