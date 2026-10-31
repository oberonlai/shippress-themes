<?php
/**
 * Title: Home: request
 * Slug: hashira-partners/front-request
 * Categories: hashira-partners
 * Keywords: warehouse, leasing, brokerage
 * Viewport Width: 1440
 * Description: Black ruled close with the request form.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"request","align":"full","className":"hp-request","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group alignfull hp-request">
<!-- wp:group {"className":"hp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hp-wrap">
<!-- wp:heading {"level":2,"className":"hp-h1 hp-h1--close"} -->
<h2 class="wp-block-heading hp-h1 hp-h1--close"><span class="hp-line hp-line--1"><span class="hp-line__t"><?php echo wp_kses_post( hashira_partners_t( 'kf9cc1b0c' ) ); ?></span></span> <span class="hp-line hp-line--2"><span class="hp-line__t"><?php echo wp_kses_post( hashira_partners_t( 'k3caf95cd' ) ); ?></span></span></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hp-split hp-split--req","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split hp-split--req">
<!-- wp:group {"className":"hp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__text">
<!-- wp:paragraph {"className":"hp-label"} -->
<p class="hp-label"><?php echo wp_kses_post( hashira_partners_t( 'k6f69fe82' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","aspectRatio":"4/3","scale":"cover","className":"hp-photo43"} -->
<figure class="wp-block-image size-full hp-photo43"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/r1-key-hand.webp' ) ); ?>" alt="<?php echo esc_attr( hashira_partners_t( 'aff327cb0' ) ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-split__form","layout":{"type":"default"}} -->
<div class="wp-block-group hp-split__form">
<!-- wp:paragraph {"className":"hp-lead"} -->
<p class="hp-lead"><?php echo wp_kses_post( hashira_partners_t( 'kaf69ec86' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="hp-form" action="/thanks/" method="get"><p class="hp-field"><label for="hp-name"><?php echo wp_kses_post( hashira_partners_t( 'k49ee3087' ) ); ?></label><input id="hp-name" name="name" type="text" autocomplete="name" required></p><p class="hp-field"><label for="hp-email"><?php echo wp_kses_post( hashira_partners_t( 'kce8ae9da' ) ); ?></label><input id="hp-email" name="email" type="email" autocomplete="email" required></p><p class="hp-field"><label for="hp-size"><?php echo wp_kses_post( hashira_partners_t( 'k1540f001' ) ); ?></label><input id="hp-size" name="size" type="text" inputmode="numeric" placeholder="<?php echo esc_attr( hashira_partners_t( 'a2670b92d' ) ); ?>"></p><p class="hp-field"><label for="hp-district"><?php echo wp_kses_post( hashira_partners_t( 'ke0bb2f66' ) ); ?></label><select id="hp-district" name="district"><option><?php echo wp_kses_post( hashira_partners_t( 'ke04d7395' ) ); ?></option><option><?php echo wp_kses_post( hashira_partners_t( 'k335fdb83' ) ); ?></option><option><?php echo wp_kses_post( hashira_partners_t( 'k3f18092c' ) ); ?></option><option><?php echo wp_kses_post( hashira_partners_t( 'kfa2ea83a' ) ); ?></option></select></p><p class="hp-field hp-field--go"><button type="submit" class="hp-submit"><?php echo wp_kses_post( hashira_partners_t( 'kc71b3327' ) ); ?></button></p></form>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
