<?php
/**
 * Title: Page: Reserve
 * Slug: sumibi-yakiniku/page-reserve
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Reserve inner page: opener band, tab strip, the three steps, the contact form slot with a mailto fallback and the booking policies.
 */
?>
<?php
ob_start(); ?>
<a class="wp-element-button" href="mailto:table@sumibi.example?subject=<?php echo rawurlencode( sumibi_yakiniku_t( 'forms_reserve_subject' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'forms_reserve_cta' ) ); ?></a>
<?php
$fallback = ob_get_clean();
?>
<!-- wp:group {"tagName":"section","className":"sy-open","layout":{"type":"default"}} -->
<section class="wp-block-group sy-open"><!-- wp:paragraph {"className":"sy-label sy-label--l"} -->
<p class="sy-label sy-label--l"><?php echo esc_html( sumibi_yakiniku_t( 're_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p04-coals-basket.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.55},"contentPosition":"center left","className":"sy-band sy-band--page sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sy-band--page sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p04' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p04-coals-basket.webp' ); ?>" style="object-position:50% 55%" data-object-fit="cover" data-object-position="50% 55%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"className":"sy-open__h","level":1} -->
<h1 class="wp-block-heading sy-open__h"><?php echo esc_html( sumibi_yakiniku_t( 're_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-open__k"} -->
<p class="sy-open__k"><?php echo esc_html( sumibi_yakiniku_t( 're_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","className":"sy-tabs","layout":{"type":"default"}} -->
<nav class="wp-block-group sy-tabs" aria-label="<?php echo sumibi_yakiniku_a( 'tabs_label' ); ?>"><!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_courses' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/cuts-and-drinks/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_cuts' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab"} -->
<p class="sy-tab"><a href="<?php echo esc_url( home_url( '/groups/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_groups' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-tab sy-tab--on"} -->
<p class="sy-tab sy-tab--on"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'tab_reserve' ) ); ?></a></p>
<!-- /wp:paragraph --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg"><!-- wp:paragraph {"className":"sy-lede"} -->
<p class="sy-lede"><?php echo esc_html( sumibi_yakiniku_t( 're_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-pg__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__in sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 're_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 're_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"ordered":true,"className":"sy-steps"} -->
<ol class="wp-block-list sy-steps"><!-- wp:list-item -->
<li><?php echo esc_html( sumibi_yakiniku_t( 'reserve_s1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( sumibi_yakiniku_t( 'reserve_s2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( sumibi_yakiniku_t( 'reserve_s3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:group {"className":"sy-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group sy-formbox"><?php echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sy-reserve__line"} -->
<p class="sy-reserve__line"><?php echo esc_html( sumibi_yakiniku_t( 'reserve_line' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-pg sy-pg--white","layout":{"type":"default"}} -->
<section class="wp-block-group sy-pg sy-pg--white"><!-- wp:group {"className":"sy-pg__in sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-pg__in sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 're_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-pg__p"} -->
<p class="sy-pg__p"><?php echo esc_html( sumibi_yakiniku_t( 're_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
