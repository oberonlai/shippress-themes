<?php
/**
 * Title: Page: Contact
 * Slug: nagare-workation/page-contact
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Plain page head, a ruled address and hours list, directions, a lake photograph and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-phead nw-phead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-phead nw-phead--plain"><!-- wp:group {"className":"nw-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__text"><!-- wp:paragraph {"className":"nw-label nw-phead__label"} -->
<p class="nw-label nw-phead__label"><?php echo esc_html( nagare_workation_t( 'nav_contact' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nw-phead__h"} -->
<h1 class="wp-block-heading nw-phead__h"><?php echo esc_html( nagare_workation_t( 'ct_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-phead__lede"} -->
<p class="nw-phead__lede"><?php echo esc_html( nagare_workation_t( 'ct_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'ct_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'ct_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-facts","layout":{"type":"default"}} -->
<div class="wp-block-group nw-facts"><!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'ct_f_addr' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'ct_f_addr_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'ct_f_tel' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><a href="tel:+00465550142"><?php echo esc_html( nagare_workation_t( 'ct_f_tel_v' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'ct_f_mail' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><a href="mailto:stay@nagare-hotel.example">stay@nagare-hotel.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'ct_f_desk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'ct_f_desk_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'ct_f_in' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'ct_f_in_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'ct_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'ct_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-photoband","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-photoband"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p09-lake-panorama.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"write","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section id="write" class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'ct_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">03</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'ct_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group nw-formcard"><?php
ob_start(); ?>
<a class="wp-element-button nw-mail" href="mailto:stay@nagare-hotel.example?subject=<?php echo esc_attr( rawurlencode( nagare_workation_t( 'contact_mail_subject' ) ) ); ?>"><?php echo esc_html( nagare_workation_t( 'contact_email_button' ) ); ?></a>
<p class="nw-mail__line"><?php echo esc_html( nagare_workation_t( 'forms_call_line' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
