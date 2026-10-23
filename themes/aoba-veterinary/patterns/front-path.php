<?php
/**
 * Title: Home: three numbered panels on photo cards over a blurred band
 * Slug: aoba-veterinary/front-path
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: Symptoms, method and recovery: three 0.96:1 photo cards with inset translucent numbered panels overlapping the lower edge of a blurred photo band.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-path","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-path"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>","alt":"Bright empty waiting area with an oak bench and green plants","dimRatio":60,"overlayColor":"ground","minHeight":600,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","align":"full","className":"av-path__band","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-center av-path__band" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Bright empty waiting area with an oak bench and green plants" src="<?php echo esc_url( $av . 'p03-waiting.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">Symptoms · Method · Recovery</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","className":"av-path__cards sp-stagger","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide av-path__cards sp-stagger">
<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p09-paw.webp' ); ?>","alt":"Close-up of hands checking a dog’s paw in the clinic","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Close-up of hands checking a dog’s paw in the clinic" src="<?php echo esc_url( $av . 'p09-paw.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/services/">Symptoms</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">A limp, a quiet cat, or a day without food is reason enough to come in.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p10-listening.webp' ); ?>","alt":"Vet listening to a cat’s chest with a stethoscope as the owner holds it","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Vet listening to a cat’s chest with a stethoscope as the owner holds it" src="<?php echo esc_url( $av . 'p10-listening.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/first-visit/">Method</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">We examine, show you what we find, and write an estimate before any treatment.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( $av . 'p11-recovery.webp' ); ?>","alt":"Dog resting on a soft blanket in a recovery kennel with the door open","dimRatio":0,"minHeight":0,"minHeightUnit":"px","isDark":false,"contentPosition":"top center","className":"av-card sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center av-card sp-reveal" style="min-height:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Dog resting on a soft blanket in a recovery kennel with the door open" src="<?php echo esc_url( $av . 'p11-recovery.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"av-panel","layout":{"type":"default"}} -->
<div class="wp-block-group av-panel"><!-- wp:paragraph {"align":"center","className":"av-panel__num"} -->
<p class="has-text-align-center av-panel__num">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"av-panel__title"} -->
<h3 class="wp-block-heading has-text-align-center av-panel__title"><a href="/stories/">Recovery</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-panel__text"} -->
<p class="has-text-align-center av-panel__text">Rest, pain relief and a nurse’s call within 48 hours of going home.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
