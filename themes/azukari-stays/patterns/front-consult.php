<?php
/**
 * Title: Home: book an owner consultation
 * Slug: azukari-stays/front-consult
 * Categories: azukari-stays
 * Keywords: holiday let, property management, owners
 * Viewport Width: 1440
 * Description: Dark closing band with three prose steps and the contact form slot.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"consult","align":"full","className":"az-consult","backgroundColor":"dark","textColor":"white"} -->
<section id="consult" class="wp-block-group alignfull az-consult has-white-color has-dark-background-color has-text-color has-background"><!-- wp:group {"className":"az-consult-grid"} -->
<div class="wp-block-group az-consult-grid"><!-- wp:group {"className":"az-consult__text"} -->
<div class="wp-block-group az-consult__text"><!-- wp:group {"className":"az-consult__head sp-reveal sp-reveal--up"} -->
<div class="wp-block-group az-consult__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"az-lab az-lab--dark"} -->
<p class="az-lab az-lab--dark"><?php echo esc_html( azukari_stays_t( 'cons_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"az-h2 az-h2--huge"} -->
<h2 class="wp-block-heading az-h2 az-h2--huge"><?php echo esc_html( azukari_stays_t( 'cons_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-body"} -->
<p class="az-body"><?php echo esc_html( azukari_stays_t( 'cons_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-steps"} -->
<div class="wp-block-group az-steps"><!-- wp:group {"className":"az-step"} -->
<div class="wp-block-group az-step"><!-- wp:paragraph {"className":"az-step__n"} -->
<p class="az-step__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-step__t"} -->
<p class="az-step__t"><?php echo esc_html( azukari_stays_t( 'cstep1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-step"} -->
<div class="wp-block-group az-step"><!-- wp:paragraph {"className":"az-step__n"} -->
<p class="az-step__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-step__t"} -->
<p class="az-step__t"><?php echo esc_html( azukari_stays_t( 'cstep2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-step"} -->
<div class="wp-block-group az-step"><!-- wp:paragraph {"className":"az-step__n"} -->
<p class="az-step__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"az-step__t"} -->
<p class="az-step__t"><?php echo esc_html( azukari_stays_t( 'cstep3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"az-small az-facts"} -->
<p class="az-small az-facts"><?php echo esc_html( azukari_stays_t( 'cons_facts' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-consult__form"} -->
<div class="wp-block-group az-consult__form"><!-- wp:heading {"level":3,"className":"az-panel__h"} -->
<h3 class="wp-block-heading az-panel__h"><?php echo esc_html( azukari_stays_t( 'cons_panel_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"az-small"} -->
<p class="az-small"><?php echo esc_html( azukari_stays_t( 'cons_panel_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:separator {"className":"az-panel__rule is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity az-panel__rule is-style-wide"/>
<!-- /wp:separator -->
<?php ob_start(); ?>
<!-- wp:buttons {"className":"az-btnrow"} -->
<div class="wp-block-buttons az-btnrow"><!-- wp:button {"className":"az-mail"} -->
<div class="wp-block-button az-mail"><a class="wp-block-button__link wp-element-button" href="mailto:owners@azukaristays.example?subject=<?php echo rawurlencode( azukari_stays_t( 'consult_mail_subject' ) ); ?>"><?php echo esc_html( azukari_stays_t( 'consult_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"az-small"} -->
<p class="az-small"><?php echo esc_html( azukari_stays_t( 'forms_phone_line' ) ); ?></p>
<!-- /wp:paragraph -->
<?php $fallback = ob_get_clean(); ?>
<?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?>
<!-- wp:list {"className":"az-panel__list"} -->
<ul class="az-panel__list"><!-- wp:list-item -->
<li><strong><?php echo esc_html( azukari_stays_t( 'cons_panel_k1' ) ); ?></strong><?php echo esc_html( azukari_stays_t( 'cons_panel_v1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><strong><?php echo esc_html( azukari_stays_t( 'cons_panel_k2' ) ); ?></strong><?php echo esc_html( azukari_stays_t( 'cons_panel_v2' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
