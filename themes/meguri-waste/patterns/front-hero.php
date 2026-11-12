<?php
/**
 * Title: Home: dock panorama pan-strip
 * Slug: meguri-waste/front-hero
 * Categories: meguri-waste
 * Viewport Width: 1440
 * Description: Full-bleed watercolour panorama of a loading dock inside a sideways scroll-snap strip, a pale headline panel, five hanging day tags and one repeated call to action.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-hero sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-hero sp-parallax"><!-- wp:html -->
<div class="mw-hero__strip" tabindex="0" role="region" aria-label="<?php echo esc_attr( meguri_waste_t( 'hero_strip_label' ) ); ?>"><div class="mw-hero__track"><span class="mw-hero__start" id="mw-pan-start"></span><div class="mw-hero__scene"><figure class="mw-hero__pic sp-parallax__layer"><img src="<?php echo meguri_waste_img( 'p01' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p01' ) ); ?>" width="1390" height="704" decoding="async" fetchpriority="high"/></figure><ol class="mw-tags"><li class="mw-tag mw-tag--1"><b><?php echo esc_html( meguri_waste_t( 'tag_mon' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_mon_s' ) ); ?></span></li><li class="mw-tag mw-tag--2"><b><?php echo esc_html( meguri_waste_t( 'tag_tue' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_tue_s' ) ); ?></span></li><li class="mw-tag mw-tag--3"><b><?php echo esc_html( meguri_waste_t( 'tag_wed' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_wed_s' ) ); ?></span></li><li class="mw-tag mw-tag--4"><b><?php echo esc_html( meguri_waste_t( 'tag_thu' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_thu_s' ) ); ?></span></li><li class="mw-tag mw-tag--5"><b><?php echo esc_html( meguri_waste_t( 'tag_fri' ) ); ?></b><span><?php echo esc_html( meguri_waste_t( 'tag_fri_s' ) ); ?></span></li></ol><span class="mw-hero__end" id="mw-pan-end"></span></div></div></div>
<div class="mw-hero__ctrl"><a class="mw-hero__btn" href="#mw-pan-start" aria-label="<?php echo esc_attr( meguri_waste_t( 'hero_prev' ) ); ?>">&#8592;</a><a class="mw-hero__btn" href="#mw-pan-end" aria-label="<?php echo esc_attr( meguri_waste_t( 'hero_next' ) ); ?>">&#8594;</a></div>
<!-- /wp:html -->

<!-- wp:group {"className":"mw-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group mw-hero__in"><!-- wp:group {"className":"mw-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group mw-hero__panel"><!-- wp:heading {"level":1,"className":"mw-hero__h1"} -->
<h1 class="wp-block-heading mw-hero__h1"><?php echo esc_html( meguri_waste_t( 'hero_h1a' ) ); ?><br><strong><?php echo esc_html( meguri_waste_t( 'hero_h1b' ) ); ?></strong></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mw-hero__lead"} -->
<p class="mw-hero__lead"><?php echo esc_html( meguri_waste_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"mw-hero__cta"} -->
<div class="wp-block-buttons mw-hero__cta"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="#schedule"><?php echo esc_html( meguri_waste_t( 'cta' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline mw-textlink"} -->
<div class="wp-block-button is-style-outline mw-textlink"><a class="wp-block-button__link wp-element-button" href="#streams"><?php echo esc_html( meguri_waste_t( 'hero_week' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="mw-chips" aria-label="<?php echo esc_attr( meguri_waste_t( 'hero_chips' ) ); ?>"><li><b><?php echo esc_html( meguri_waste_t( 'tag_mon' ) ); ?></b> <?php echo esc_html( meguri_waste_t( 'tag_mon_s' ) ); ?></li><li><b><?php echo esc_html( meguri_waste_t( 'tag_tue' ) ); ?></b> <?php echo esc_html( meguri_waste_t( 'tag_tue_s' ) ); ?></li><li><b><?php echo esc_html( meguri_waste_t( 'tag_wed' ) ); ?></b> <?php echo esc_html( meguri_waste_t( 'tag_wed_s' ) ); ?></li><li><b><?php echo esc_html( meguri_waste_t( 'tag_thu' ) ); ?></b> <?php echo esc_html( meguri_waste_t( 'tag_thu_s' ) ); ?></li><li><b><?php echo esc_html( meguri_waste_t( 'tag_fri' ) ); ?></b> <?php echo esc_html( meguri_waste_t( 'tag_fri_s' ) ); ?></li></ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
