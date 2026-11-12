<?php
/**
 * Title: Page: Contact
 * Slug: hisui-clinic/page-contact
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Contact page: mini window, booking form slot with a mailto fallback, address and hours, and six questions as ledger rows.
 */
?>
<?php
ob_start(); ?>
<div class="wp-block-buttons"><div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="mailto:hello@hisui-clinic.example?subject=<?php echo rawurlencode( hisui_clinic_t( 'contact_subject' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'contact_email' ) ); ?></a></div></div>
<?php
$fallback = ob_get_clean(); ?>
<!-- wp:group {"className":"hc-window hc-window--mini sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--mini sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'E1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_E1' ) ); ?>" width="1568" height="330" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span><nav class="hc-index" aria-label="<?php echo esc_attr( hisui_clinic_t( 'idx_page' ) ); ?>"><ul><li><a href="<?php echo esc_url( home_url( '/contact/#book' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_contact_ix1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/contact/#find' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_contact_ix2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/contact/#faq' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_contact_ix3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'p_contact_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"book","align":"full","layout":{"type":"default"}} -->
<div id="book" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-read hc-form-sec","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read hc-form-sec"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_contact_book_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_contact_book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hc-contact__form"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"find","align":"full","layout":{"type":"default"}} -->
<div id="find" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-split hc-split--flip sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--flip sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'A2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_A2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_contact_find_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-visit__a"} -->
<p class="hc-visit__a"><?php echo esc_html( hisui_clinic_t( 'p_contact_find_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_contact_find_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_contact_find_tel' ) ); ?> · <a href="mailto:hello@hisui-clinic.example"><?php echo esc_html( hisui_clinic_t( 'vis_mail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"faq","align":"full","layout":{"type":"default"}} -->
<div id="faq" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_contact_faq_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-ledger"><!-- wp:details {"className":"hc-row","showContent":true} -->
<details class="wp-block-details hc-row" open><summary><span class="hc-num">01</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'p_contact_q1' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'p_contact_a1' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">02</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'p_contact_q2' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'p_contact_a2' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">03</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'p_contact_q3' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'p_contact_a3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">04</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'p_contact_q4' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'p_contact_a4' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">05</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'p_contact_q5' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'p_contact_a5' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">06</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'p_contact_q6' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'p_contact_a6' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
