<?php
/**
 * Title: Home: the people
 * Slug: katachi-ergonomics/people
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: A mirrored offset photograph row with a white notch, then a two-column ruled list of the seven names.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"ke-sec ke-people","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull ke-sec ke-people"><!-- wp:group {"className":"ke-offset ke-offset--b","layout":{"type":"default"}} -->
<div class="wp-block-group ke-offset ke-offset--b"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ke-offset__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ke-offset__photo sp-reveal sp-reveal--zoom"><img src="<?php echo katachi_ergonomics_img( 'team-bench.webp' ); ?>" alt="<?php echo esc_attr( katachi_ergonomics_t( 'alt_t01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ke-offset__notch" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ke-offset__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ke-offset__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ke-label"} -->
<p class="ke-label"><?php echo esc_html( katachi_ergonomics_t( 'pe_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ke-offset__t"} -->
<h3 class="wp-block-heading ke-offset__t"><?php echo esc_html( katachi_ergonomics_t( 'pe_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-offset__p"} -->
<p class="ke-offset__p"><?php echo esc_html( katachi_ergonomics_t( 'pe_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ke-more ke-more--only"} -->
<p class="ke-more ke-more--only"><a href="<?php echo katachi_ergonomics_url( '/about/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'pe_a' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ke-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ke-wrap"><!-- wp:html -->
<ul class="ke-names"><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm1_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm1_r' ) ); ?></span></li><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm2_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm2_r' ) ); ?></span></li><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm3_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm3_r' ) ); ?></span></li><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm4_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm4_r' ) ); ?></span></li><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm5_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm5_r' ) ); ?></span></li><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm6_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm6_r' ) ); ?></span></li><li><span class="ke-names__n"><?php echo esc_html( katachi_ergonomics_t( 'nm7_n' ) ); ?></span><span class="ke-names__r"><?php echo esc_html( katachi_ergonomics_t( 'nm7_r' ) ); ?></span></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
