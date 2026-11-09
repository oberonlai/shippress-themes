<?php
/**
 * Title: Home: cover with docked card
 * Slug: kataribe-partners/front-hero
 * Categories: kataribe-partners
 * Keywords: public relations, hero, agency
 * Viewport Width: 1440
 * Description: Full-bleed photograph with a three-line left statement and a white card row docked over its foot, with a Brief / Week pill toggle.
 */
$e = 'kataribe_partners_e';
$a = 'kataribe_partners_a';
$i = 'kataribe_partners_img';
?>
<!-- wp:cover {"url":"<?php echo $i( 'h01-press-list-table.webp' ); ?>","alt":"<?php echo esc_attr( kataribe_partners_t( 'alt_hero' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","tagName":"section","anchor":"top","className":"kp-hero sp-parallax","layout":{"type":"default"}} -->
<section id="top" class="wp-block-cover alignfull is-light kp-hero sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_hero' ) ); ?>" src="<?php echo $i( 'h01-press-list-table.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"kp-hero__title"} -->
<h1 class="wp-block-heading kp-hero__title"><?php echo kataribe_partners_lines( 'hero_title' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kp-hero__cap"} -->
<p class="kp-hero__cap"><?php echo esc_html( kataribe_partners_t( 'hero_cap' ) ); ?></p>
<!-- /wp:paragraph --></div></section>
<!-- /wp:cover -->

<!-- wp:group {"className":"kp-dock","layout":{"type":"default"}} -->
<div class="wp-block-group kp-dock"><!-- wp:group {"className":"kp-dock__l","layout":{"type":"default"}} -->
<div class="wp-block-group kp-dock__l"><!-- wp:html -->
<input type="radio" name="kp-tab" id="kp-tab-brief" class="kp-tab__in" checked><input type="radio" name="kp-tab" id="kp-tab-week" class="kp-tab__in"><div class="kp-tab"><label for="kp-tab-brief"><?php echo esc_html( kataribe_partners_t( 'tab_brief' ) ); ?></label><label for="kp-tab-week"><?php echo esc_html( kataribe_partners_t( 'tab_week' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:buttons {"className":"kp-dock__cta"} -->
<div class="wp-block-buttons kp-dock__cta"><!-- wp:button {"className":"kp-pill"} -->
<div class="wp-block-button kp-pill"><a class="wp-block-button__link wp-element-button" href="#request"><?php echo esc_html( kataribe_partners_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-dock__r","layout":{"type":"default"}} -->
<div class="wp-block-group kp-dock__r"><!-- wp:group {"className":"kp-panel kp-panel--brief","layout":{"type":"default"}} -->
<div class="wp-block-group kp-panel kp-panel--brief"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kp-panel__thumb"} -->
<figure class="wp-block-image size-full kp-panel__thumb"><img src="<?php echo $i( 'h15-reading-briefing.webp' ); ?>" alt="<?php echo esc_attr( kataribe_partners_t( 'alt_dock' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kp-panel__body","layout":{"type":"default"}} -->
<div class="wp-block-group kp-panel__body"><!-- wp:paragraph {"className":"kp-panel__meta"} -->
<p class="kp-panel__meta"><span class="kp-panel__date"><?php echo esc_html( kataribe_partners_t( 'dock_date' ) ); ?></span> <span class="kp-label"><?php echo esc_html( kataribe_partners_t( 'dock_label' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"kp-panel__title"} -->
<h3 class="wp-block-heading kp-panel__title"><a href="/coverage-weeks-for-2027-are-open/"><?php echo esc_html( kataribe_partners_t( 'dock_title' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kp-circle"} -->
<p class="kp-circle"><a href="/coverage-weeks-for-2027-are-open/" aria-label="<?php echo esc_attr( kataribe_partners_t( 'dock_title' ) ); ?>"> </a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kp-panel kp-panel--week","layout":{"type":"default"}} -->
<div class="wp-block-group kp-panel kp-panel--week"><!-- wp:paragraph {"className":"kp-panel__days"} -->
<p class="kp-panel__days"><?php echo esc_html( kataribe_partners_t( 'dock_week' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kp-more"} -->
<p class="kp-more"><a href="#week"><?php echo esc_html( kataribe_partners_t( 'dock_week_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
