<?php
/**
 * Title: Page: Visiting the Clinic
 * Slug: seimyaku-clinic/page-visit
 * Categories: seimyaku-clinic
 * Viewport Width: 1440
 * Description: Inner page: photograph band, a sticky docked title on the left and address, hours, travel and what to bring on the right.
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-phead"><!-- wp:group {"className":"sz-phead__media sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo seimyaku_clinic_img( 'entrance-stairs.webp' ); ?>" alt="<?php echo esc_attr( seimyaku_clinic_t( 'a62444755' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-veil sz-veil--static","layout":{"type":"default"}} -->
<div class="wp-block-group sz-veil sz-veil--static"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-phead__text"><!-- wp:paragraph {"className":"is-style-sz-meta sz-crumbs"} -->
<p class="is-style-sz-meta sz-crumbs"><span><a href="/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k8cf04a97' ) ); ?></a></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'kda64d09f' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-phead__title"} -->
<h1 class="wp-block-heading sz-phead__title"><?php echo wp_kses_post( seimyaku_clinic_t( 'kda64d09f' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-lead"} -->
<p class="sz-lead"><?php echo wp_kses_post( seimyaku_clinic_t( 'k00e01349' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sz-dockpage","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sz-dockpage"><!-- wp:group {"className":"sz-dockpage__dock","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dockpage__dock"><!-- wp:paragraph {"className":"is-style-sz-chip"} -->
<p class="is-style-sz-chip"><?php echo wp_kses_post( seimyaku_clinic_t( 'k5e706a9b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sz-dock"} -->
<h2 class="wp-block-heading sz-dock"><?php echo wp_kses_post( seimyaku_clinic_t( 'k1fb581e1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-dock__sub"} -->
<p class="sz-dock__sub"><?php echo wp_kses_post( seimyaku_clinic_t( 'kaae9a66a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-dockpage__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dockpage__body sp-stagger"><!-- wp:group {"className":"sz-dp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'kdd7bf230' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k730c7bbf' ) ); ?> <a href="mailto:care@seimyaku-clinic.example"><?php echo wp_kses_post( seimyaku_clinic_t( 'kd21eb933' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-dp","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dp"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k80a0c205' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:table {"className":"sz-hours","hasFixedLayout":false} -->
<figure class="wp-block-table sz-hours"><table><thead><tr><th><?php echo wp_kses_post( seimyaku_clinic_t( 'k03727ac4' ) ); ?></th><th><?php echo wp_kses_post( seimyaku_clinic_t( 'k6a7e7316' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k6ea62973' ) ); ?></td><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k613edc53' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k8b705118' ) ); ?></td><td>09:00–12:30</td></tr><tr><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k2d5cd99e' ) ); ?></td><td><?php echo wp_kses_post( seimyaku_clinic_t( 'k03f4a478' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo wp_kses_post( seimyaku_clinic_t( 'k47df94d9' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-dp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dp sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sz-dp__photo"} -->
<figure class="wp-block-image size-full sz-dp__photo"><img src="<?php echo seimyaku_clinic_img( 'reception.webp' ); ?>" alt="<?php echo esc_attr( seimyaku_clinic_t( 'af9cecce8' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-dp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k8c265388' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k65e8ed25' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-dp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k90b77f74' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'kff9751f0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-dp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-dp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( seimyaku_clinic_t( 'k07e3e742' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( seimyaku_clinic_t( 'k36a7e1ea' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-sz-meta sz-facts"} -->
<p class="is-style-sz-meta sz-facts"><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k0bffb310' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'k0d847a70' ) ); ?></span><span><?php echo wp_kses_post( seimyaku_clinic_t( 'kadd3b2b1' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo wp_kses_post( seimyaku_clinic_t( 'k0669c01a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-visit__btns","layout":{"type":"default"}} -->
<div class="wp-block-group sz-visit__btns"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"sz-btn"} -->
<div class="wp-block-button sz-btn"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k43700e64' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( seimyaku_clinic_t( 'k69d9a05e' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
