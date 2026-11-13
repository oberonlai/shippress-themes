<?php
/**
 * Title: Page: Contact
 * Slug: hojo-brokers/page-contact
 * Categories: hojo-brokers
 * Keywords: contact,form
 * Viewport Width: 1440
 * Description: Contact page: address, hours, a compact three-step band and the contact form slot with the mailto fallback.
 */
?>
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"hb-cta-row"} -->
<div class="wp-block-buttons hb-cta-row"><!-- wp:button {"className":"hb-cta"} -->
<div class="wp-block-button hb-cta"><a class="wp-block-button__link wp-element-button" href="mailto:review@hojobrokers.example?subject=<?php echo rawurlencode( hojo_brokers_t( 'contact_subject' ) ); ?>"><?php echo esc_html( hojo_brokers_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$hb_fallback = ob_get_clean();
?>
<!-- wp:group {"align":"full","className":"hb-headband hb-headband--inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hb-headband hb-headband--inner"><!-- wp:html -->
<span class="hb-wedge hb-wedge--a" aria-hidden="true"></span><span class="hb-wedge hb-wedge--b" aria-hidden="true"></span>
<!-- /wp:html -->
<!-- wp:group {"className":"hb-wrap hb-headband__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-headband__in"><!-- wp:paragraph {"className":"hb-label"} -->
<p class="hb-label"><?php echo wp_kses_post( hojo_brokers_t( 'kc0241eae' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"hb-h1 hb-h1--inner"} -->
<h1 class="wp-block-heading hb-h1 hb-h1--inner"><?php echo wp_kses_post( hojo_brokers_t( 'k2d0024c3' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hb-pband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hb-pband sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hb-pos-55"} -->
<figure class="wp-block-image size-full hb-pos-55"><img src="<?php echo hojo_brokers_img( 'about-mezzanine-office.webp' ); ?>" alt="<?php echo esc_attr( hojo_brokers_t( 'ac4377353' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"hb-wrap hb-pband__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-pband__text"><!-- wp:paragraph {"className":"hb-pband__s"} -->
<p class="hb-pband__s"><?php echo wp_kses_post( hojo_brokers_t( 'kbceed0c1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-inner hb-introsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-sec hb-inner hb-introsec"><!-- wp:group {"className":"hb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap"><!-- wp:paragraph {"className":"hb-lead hb-lead--inner"} -->
<p class="hb-lead hb-lead--inner"><?php echo wp_kses_post( hojo_brokers_t( 'k83402cf5' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hb-contact","layout":{"type":"default"}} -->
<div class="wp-block-group hb-contact"><!-- wp:group {"className":"hb-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group hb-contact__text"><!-- wp:heading {"className":"hb-h2 hb-h2--m"} -->
<h2 class="wp-block-heading hb-h2 hb-h2--m"><?php echo wp_kses_post( hojo_brokers_t( 'k689ec59c' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'kab949360' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"hb-h2 hb-h2--m"} -->
<h2 class="wp-block-heading hb-h2 hb-h2--m"><?php echo wp_kses_post( hojo_brokers_t( 'k11289024' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'kb0704e6c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hb-contact__form","layout":{"type":"default"}} -->
<div class="wp-block-group hb-contact__form"><!-- wp:group {"className":"hb-formcard","layout":{"type":"default"}} -->
<div class="wp-block-group hb-formcard"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $hb_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-inner hb-steps hb-mist","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-sec hb-inner hb-steps hb-mist"><!-- wp:group {"className":"hb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap"><!-- wp:group {"className":"hb-row","layout":{"type":"default"}} -->
<div class="wp-block-group hb-row"><!-- wp:group {"className":"hb-rowhead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hb-rowhead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"hb-label"} -->
<p class="hb-label"><?php echo wp_kses_post( hojo_brokers_t( 'k47559fb8' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"hb-h2 hb-h2--m"} -->
<h2 class="wp-block-heading hb-h2 hb-h2--m"><?php echo wp_kses_post( hojo_brokers_t( 'k906bb5b3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hb-rowbody","layout":{"type":"default"}} -->
<div class="wp-block-group hb-rowbody"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hojo_brokers_t( 'k447f7eff' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hb-steprow sp-stagger hb-steprow--compact","layout":{"type":"default"}} -->
<div class="wp-block-group hb-steprow sp-stagger hb-steprow--compact"><!-- wp:group {"className":"hb-step hb-step--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-step hb-step--1 sp-reveal sp-reveal--up"><!-- wp:group {"className":"hb-step__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-step__in"><!-- wp:paragraph {"className":"hb-step__n"} -->
<p class="hb-step__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hb-step__h"} -->
<h3 class="wp-block-heading hb-step__h"><?php echo wp_kses_post( hojo_brokers_t( 'k091ce55f' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hb-step__meta"} -->
<p class="hb-step__meta"><?php echo wp_kses_post( hojo_brokers_t( 'k8e49b85d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hb-step hb-step--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-step hb-step--2 sp-reveal sp-reveal--up"><!-- wp:group {"className":"hb-step__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-step__in"><!-- wp:paragraph {"className":"hb-step__n"} -->
<p class="hb-step__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hb-step__h"} -->
<h3 class="wp-block-heading hb-step__h"><?php echo wp_kses_post( hojo_brokers_t( 'kc69366df' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hb-step__meta"} -->
<p class="hb-step__meta"><?php echo wp_kses_post( hojo_brokers_t( 'k6017fe9a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hb-step hb-step--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hb-step hb-step--3 sp-reveal sp-reveal--up"><!-- wp:group {"className":"hb-step__in","layout":{"type":"default"}} -->
<div class="wp-block-group hb-step__in"><!-- wp:paragraph {"className":"hb-step__n"} -->
<p class="hb-step__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hb-step__h"} -->
<h3 class="wp-block-heading hb-step__h"><?php echo wp_kses_post( hojo_brokers_t( 'k6dc5e693' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hb-step__meta"} -->
<p class="hb-step__meta"><?php echo wp_kses_post( hojo_brokers_t( 'kd62b5d69' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
