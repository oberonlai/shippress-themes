<?php
/**
 * Title: Home: question 01, budget
 * Slug: futari-journeys/front-budget
 * Categories: futari-journeys
 * Viewport Width: 1440
 * Description: Budget question with a notebook photo, three answers and the six-row planning fee table.
 */
?>
<!-- wp:group {"className":"fj-section fj-q fj-qbudget","layout":{"type":"default"},"anchor":"budget","align":"full"} -->
<div id="budget" class="wp-block-group alignfull fj-section fj-q fj-qbudget"><!-- wp:group {"className":"fj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group fj-narrow"><!-- wp:group {"className":"fj-eyebrow-row","layout":{"type":"default"}} -->
<div class="wp-block-group fj-eyebrow-row"><!-- wp:paragraph {"className":"fj-eyebrow"} -->
<p class="fj-eyebrow"><?php echo wp_kses_post( futari_journeys_t( 'kedb6a383' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"fj-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity fj-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"fj-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading fj-h2 sp-reveal sp-reveal--up"><?php echo wp_kses_post( futari_journeys_t( 'k76b0303a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"fj-budget__cols"} -->
<div class="wp-block-columns fj-budget__cols"><!-- wp:column {"width":"41.667%"} -->
<div class="wp-block-column" style="flex-basis:41.667%"><!-- wp:group {"className":"fj-budget__photo","layout":{"type":"default"}} -->
<div class="wp-block-group fj-budget__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"fj-ph fj-ph--45 sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full fj-ph fj-ph--45 sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/planning-hands.webp' ) ); ?>" alt="<?php echo esc_attr( futari_journeys_t( 'af8487f91' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"fj-cap"} -->
<p class="fj-cap"><?php echo wp_kses_post( futari_journeys_t( 'k9fda1652' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58.333%"} -->
<div class="wp-block-column" style="flex-basis:58.333%"><!-- wp:group {"className":"fj-qas sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group fj-qas sp-reveal sp-reveal--up"><!-- wp:details {"className":"fj-qa"} -->
<details class="wp-block-details fj-qa"><summary><?php echo wp_kses_post( futari_journeys_t( 'kdf9accaa' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( futari_journeys_t( 'k240157ed' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"fj-qa"} -->
<details class="wp-block-details fj-qa"><summary><?php echo wp_kses_post( futari_journeys_t( 'kb2083102' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( futari_journeys_t( 'kcd8d4a30' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"fj-qa"} -->
<details class="wp-block-details fj-qa"><summary><?php echo wp_kses_post( futari_journeys_t( 'k7e5304dc' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( futari_journeys_t( 'k1cd71020' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"fj-dash fj-dash--fees","layout":{"type":"default"}} -->
<div class="wp-block-group fj-dash fj-dash--fees"><!-- wp:separator {"className":"fj-dash__line"} -->
<hr class="wp-block-separator has-alpha-channel-opacity fj-dash__line"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3,"className":"fj-dash__t"} -->
<h3 class="wp-block-heading fj-dash__t"><?php echo wp_kses_post( futari_journeys_t( 'kfa918d1d' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"fj-dash__line"} -->
<hr class="wp-block-separator has-alpha-channel-opacity fj-dash__line"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"fj-fees-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fj-fees-wrap"><!-- wp:table {"className":"fj-fees"} -->
<figure class="wp-block-table fj-fees"><table class="has-fixed-layout"><thead><tr><th><?php echo wp_kses_post( futari_journeys_t( 'k0b6cbdf7' ) ); ?></th><th><?php echo wp_kses_post( futari_journeys_t( 'kd61ac03a' ) ); ?></th><th><?php echo wp_kses_post( futari_journeys_t( 'kcfd5ab32' ) ); ?></th></tr></thead><tbody><tr><td><strong><?php echo wp_kses_post( futari_journeys_t( 'k3c77aa5e' ) ); ?></strong><br><span class="fj-note"><?php echo wp_kses_post( futari_journeys_t( 'kd9501bfe' ) ); ?></span></td><td><?php echo wp_kses_post( futari_journeys_t( 'kb2d4e8a2' ) ); ?></td><td><?php echo wp_kses_post( futari_journeys_t( 'kb24ce0cd' ) ); ?></td></tr><tr><td><strong><?php echo wp_kses_post( futari_journeys_t( 'ka767db9e' ) ); ?></strong><br><span class="fj-note"><?php echo wp_kses_post( futari_journeys_t( 'k9d18b923' ) ); ?></span></td><td><?php echo wp_kses_post( futari_journeys_t( 'k1f8eeb86' ) ); ?></td><td>€290</td></tr><tr><td><strong><?php echo wp_kses_post( futari_journeys_t( 'k70a13b17' ) ); ?></strong><br><span class="fj-note"><?php echo wp_kses_post( futari_journeys_t( 'kb91f7432' ) ); ?></span></td><td><?php echo wp_kses_post( futari_journeys_t( 'k93ea2ea8' ) ); ?></td><td>€450</td></tr><tr><td><strong><?php echo wp_kses_post( futari_journeys_t( 'k24c0905b' ) ); ?></strong><br><span class="fj-note"><?php echo wp_kses_post( futari_journeys_t( 'k8e516ebe' ) ); ?></span></td><td><?php echo wp_kses_post( futari_journeys_t( 'k17c56d4f' ) ); ?></td><td>€780</td></tr><tr><td><strong><?php echo wp_kses_post( futari_journeys_t( 'k2b5209c5' ) ); ?></strong><br><span class="fj-note"><?php echo wp_kses_post( futari_journeys_t( 'k72b3bfeb' ) ); ?></span></td><td><?php echo wp_kses_post( futari_journeys_t( 'k8112d6a2' ) ); ?></td><td>€1,150</td></tr><tr><td><strong><?php echo wp_kses_post( futari_journeys_t( 'k6e109ec7' ) ); ?></strong><br><span class="fj-note"><?php echo wp_kses_post( futari_journeys_t( 'k6c59ed9e' ) ); ?></span></td><td><?php echo wp_kses_post( futari_journeys_t( 'k33ec5fa6' ) ); ?></td><td>+€120</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"fj-fine"} -->
<p class="fj-fine"><?php echo wp_kses_post( futari_journeys_t( 'k339d7007' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
