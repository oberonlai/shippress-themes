<?php
/**
 * Title: Page: consultation
 * Slug: shitsurae-interiors/page-consultation
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Consultation page: the single way to book, the facts in ruled lines, what happens in the 90 minutes, and the contact form slot with its email fallback.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p04-marlow-hall.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'consultation_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_consultation' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'consultation_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_consult_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_consult_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-facts","layout":{"type":"default"}} -->
<div class="wp-block-group si-facts"><!-- wp:paragraph {"className":"si-fact"} -->
<p class="si-fact"><?php echo esc_html( shitsurae_interiors_t( 'fact_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-fact"} -->
<p class="si-fact"><?php echo esc_html( shitsurae_interiors_t( 'fact_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-fact"} -->
<p class="si-fact"><?php echo esc_html( shitsurae_interiors_t( 'fact_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-fact"} -->
<p class="si-fact"><?php echo esc_html( shitsurae_interiors_t( 'fact_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--txt","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--txt"><!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'consultation_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'consultation_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'consultation_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'consultation_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-form","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-form"><!-- wp:heading {"level":3,"className":"si-form__h"} -->
<h3 class="wp-block-heading si-form__h"><?php echo esc_html( shitsurae_interiors_t( 'consult_form_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"si-form__w","layout":{"type":"default"}} -->
<div class="wp-block-group si-form__w"><?php
ob_start(); ?>
<div class="wp-block-buttons si-fb"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button si-btn-ink" href="mailto:studio@shitsurae.example?subject=<?php echo rawurlencode( shitsurae_interiors_t( 'consult_mail_subject' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'consult_email_button' ) ); ?></a></div><p class="si-fb__note"><?php echo esc_html( shitsurae_interiors_t( 'fb_note' ) ); ?></p></div>
<?php $fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->
