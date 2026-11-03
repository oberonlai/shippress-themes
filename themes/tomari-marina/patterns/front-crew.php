<?php
/**
 * Title: Home: who walks the pontoons (two portraits and a roster)
 * Slug: tomari-marina/front-crew
 * Categories: tomari-marina
 * Keywords: home, crew
 * Viewport Width: 1440
 * Description: On the ink-teal ground: two offset 4:5 portraits, a two-line heading, a quote from the harbour master and a plain roster with hairlines.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-crew tm-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-crew tm-section"><!-- wp:group {"className":"tm-crew__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tm-crew__grid"><!-- wp:group {"className":"tm-crew__photos","layout":{"type":"default"}} -->
<div class="wp-block-group tm-crew__photos"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-crew__p1"} -->
<figure class="wp-block-image size-large tm-crew__p1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-portrait-ines.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_crew_01' ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-crew__p2"} -->
<figure class="wp-block-image size-large tm-crew__p2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-portrait-henrik.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_crew_02' ) ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-crew__text","layout":{"type":"default"}} -->
<div class="wp-block-group tm-crew__text"><!-- wp:heading {"level":2,"className":"tm-h2 sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_crew_18' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_crew_19' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_crew_20' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-crew__quote"} -->
<p class="tm-crew__quote"><em><?php echo wp_kses_post( tomari_marina_t( 'front_crew_21' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"tm-roster"} -->
<ul class="wp-block-list tm-roster"><li><strong><?php echo wp_kses_post( tomari_marina_t( 'front_crew_03' ) ); ?></strong><span><?php echo wp_kses_post( tomari_marina_t( 'front_crew_04' ) ); ?></span> <?php echo wp_kses_post( tomari_marina_t( 'front_crew_05' ) ); ?></li><li><strong><?php echo wp_kses_post( tomari_marina_t( 'front_crew_06' ) ); ?></strong><span><?php echo wp_kses_post( tomari_marina_t( 'front_crew_07' ) ); ?></span> <?php echo wp_kses_post( tomari_marina_t( 'front_crew_08' ) ); ?></li><li><strong><?php echo wp_kses_post( tomari_marina_t( 'front_crew_09' ) ); ?></strong><span><?php echo wp_kses_post( tomari_marina_t( 'front_crew_10' ) ); ?></span> <?php echo wp_kses_post( tomari_marina_t( 'front_crew_11' ) ); ?></li><li><strong><?php echo wp_kses_post( tomari_marina_t( 'front_crew_12' ) ); ?></strong><span><?php echo wp_kses_post( tomari_marina_t( 'front_crew_13' ) ); ?></span> <?php echo wp_kses_post( tomari_marina_t( 'front_crew_14' ) ); ?></li><li><strong><?php echo wp_kses_post( tomari_marina_t( 'front_crew_15' ) ); ?></strong><span><?php echo wp_kses_post( tomari_marina_t( 'front_crew_16' ) ); ?></span> <?php echo wp_kses_post( tomari_marina_t( 'front_crew_17' ) ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->