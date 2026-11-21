<?php
/**
 * Title: Home: hold your dates
 * Slug: shimaya-villas/front-hold
 * Categories: shimaya-villas
 * Viewport Width: 1440
 * Description: Dark band with the four hold steps as prose rows, facts and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"hold","align":"full","backgroundColor":"dark","textColor":"on-dark","className":"sv-sec sv-hold","layout":{"type":"default"}} -->
<section id="hold" class="wp-block-group alignfull sv-sec sv-hold has-on-dark-color has-text-color has-dark-background-color has-background"><!-- wp:group {"className":"sv-hold__left sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sv-hold__left sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sv-eyebrow"} -->
<p class="sv-eyebrow"><?php echo wp_kses_post( shimaya_villas_t( 'k06b47245' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"className":"sv-h2 sv-h2--hold"} -->
<h2 class="wp-block-heading sv-h2 sv-h2--hold"><?php echo wp_kses_post( shimaya_villas_t( 'k1072fdea' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"sv-steps","layout":{"type":"default"}} -->
<div class="wp-block-group sv-steps"><!-- wp:group {"className":"sv-step","layout":{"type":"default"}} -->
<div class="wp-block-group sv-step"><!-- wp:paragraph {"className":"sv-step__n"} -->
<p class="sv-step__n">1</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-step__t"} -->
<p class="sv-step__t"><strong><?php echo wp_kses_post( shimaya_villas_t( 'ke4079c72' ) ); ?></strong> <?php echo wp_kses_post( shimaya_villas_t( 'k2e5326ca' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-step","layout":{"type":"default"}} -->
<div class="wp-block-group sv-step"><!-- wp:paragraph {"className":"sv-step__n"} -->
<p class="sv-step__n">2</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-step__t"} -->
<p class="sv-step__t"><strong><?php echo wp_kses_post( shimaya_villas_t( 'kcc74ac89' ) ); ?></strong> <?php echo wp_kses_post( shimaya_villas_t( 'ke6b155f0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-step","layout":{"type":"default"}} -->
<div class="wp-block-group sv-step"><!-- wp:paragraph {"className":"sv-step__n"} -->
<p class="sv-step__n">3</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-step__t"} -->
<p class="sv-step__t"><strong><?php echo wp_kses_post( shimaya_villas_t( 'k9b80877e' ) ); ?></strong> <?php echo wp_kses_post( shimaya_villas_t( 'kea8daab7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-step","layout":{"type":"default"}} -->
<div class="wp-block-group sv-step"><!-- wp:paragraph {"className":"sv-step__n"} -->
<p class="sv-step__n">4</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-step__t"} -->
<p class="sv-step__t"><strong><?php echo wp_kses_post( shimaya_villas_t( 'k9770e35f' ) ); ?></strong> <?php echo wp_kses_post( shimaya_villas_t( 'k2c63cd9f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-facts","layout":{"type":"default"}} -->
<div class="wp-block-group sv-facts"><!-- wp:paragraph {"className":"sv-fact"} -->
<p class="sv-fact"><?php echo wp_kses_post( shimaya_villas_t( 'k8f49cf20' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fact"} -->
<p class="sv-fact"><?php echo wp_kses_post( shimaya_villas_t( 'k04412989' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"sv-fact"} -->
<p class="sv-fact"><?php echo wp_kses_post( shimaya_villas_t( 'kb1a6681a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"sv-hold__form","layout":{"type":"default"}} -->
<div class="wp-block-group sv-hold__form">
<?php
ob_start(); ?>
<p class="sv-eyebrow sv-req__h"><?php echo wp_kses_post( shimaya_villas_t( 'k3583727d' ) ); ?></p>
<div class="sv-req"><p class="sv-req__row"><span class="sv-req__l"><?php echo wp_kses_post( shimaya_villas_t( 'k5f0ca3e8' ) ); ?></span><span class="sv-req__v"><?php echo wp_kses_post( shimaya_villas_t( 'k1dd86d9b' ) ); ?></span></p><p class="sv-req__row"><span class="sv-req__l"><?php echo wp_kses_post( shimaya_villas_t( 'kaebfe467' ) ); ?></span><span class="sv-req__v"><?php echo wp_kses_post( shimaya_villas_t( 'k7318bde8' ) ); ?></span></p><p class="sv-req__row"><span class="sv-req__l"><?php echo wp_kses_post( shimaya_villas_t( 'k4229e063' ) ); ?></span><span class="sv-req__v"><?php echo wp_kses_post( shimaya_villas_t( 'k42c95792' ) ); ?></span></p><p class="sv-req__row"><span class="sv-req__l"><?php echo wp_kses_post( shimaya_villas_t( 'k33fa00a6' ) ); ?></span><span class="sv-req__v"><?php echo wp_kses_post( shimaya_villas_t( 'k302eeb32' ) ); ?></span></p></div>
<a class="wp-element-button sv-mail" href="mailto:stay@shimayavillas.example?subject=<?php echo rawurlencode( shimaya_villas_t( 'hold_mail_subject' ) ); ?>"><?php echo esc_html( shimaya_villas_t( 'hold_email_button' ) ); ?></a>
<p class="sv-mail-note"><?php echo esc_html( shimaya_villas_t( 'forms_desk_line' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
