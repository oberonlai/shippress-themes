<?php
/**
 * Title: Home: who handles your boxes
 * Slug: shoko-archives/front-people
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A ruled heading, a wide 21:9 team photograph, an intro and a two-column striped list of the six named people.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"sa-sec","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull sa-sec"><!-- wp:group {"className":"sa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap"><!-- wp:heading {"className":"sa-h2"} -->
<h2 class="wp-block-heading sa-h2"><?php echo esc_html( shoko_archives_t( 'pe_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-photo sa-photo--219"} -->
<figure class="wp-block-image size-full sa-photo sa-photo--219"><img src="<?php echo shoko_archives_img( 'people-team' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_people-team' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sa-intro sa-intro--wide"} -->
<p class="sa-intro sa-intro--wide"><?php echo esc_html( shoko_archives_t( 'pe_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-stripes sa-stripes--2 sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sa-stripes sa-stripes--2 sp-stagger"><!-- wp:paragraph {"className":"sa-li sp-reveal sp-reveal--up"} -->
<p class="sa-li sp-reveal sp-reveal--up"><strong><?php echo esc_html( shoko_archives_t( 'pe_n1' ) ); ?></strong> <?php echo esc_html( shoko_archives_t( 'pe_r1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-li sp-reveal sp-reveal--up"} -->
<p class="sa-li sp-reveal sp-reveal--up"><strong><?php echo esc_html( shoko_archives_t( 'pe_n2' ) ); ?></strong> <?php echo esc_html( shoko_archives_t( 'pe_r2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-li sp-reveal sp-reveal--up"} -->
<p class="sa-li sp-reveal sp-reveal--up"><strong><?php echo esc_html( shoko_archives_t( 'pe_n3' ) ); ?></strong> <?php echo esc_html( shoko_archives_t( 'pe_r3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-li sp-reveal sp-reveal--up"} -->
<p class="sa-li sp-reveal sp-reveal--up"><strong><?php echo esc_html( shoko_archives_t( 'pe_n4' ) ); ?></strong> <?php echo esc_html( shoko_archives_t( 'pe_r4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-li sp-reveal sp-reveal--up"} -->
<p class="sa-li sp-reveal sp-reveal--up"><strong><?php echo esc_html( shoko_archives_t( 'pe_n5' ) ); ?></strong> <?php echo esc_html( shoko_archives_t( 'pe_r5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-li sp-reveal sp-reveal--up"} -->
<p class="sa-li sp-reveal sp-reveal--up"><strong><?php echo esc_html( shoko_archives_t( 'pe_n6' ) ); ?></strong> <?php echo esc_html( shoko_archives_t( 'pe_r6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
