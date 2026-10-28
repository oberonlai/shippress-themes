<?php
/**
 * Title: Home: intro strip
 * Slug: hatake-greens/front-intro
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Sage-white strip with two paragraphs and one tall portrait photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"intro","className":"hg-sec hg-intro","layout":{"type":"default"}} -->
<section id="intro" class="wp-block-group alignfull hg-sec hg-intro">
<!-- wp:group {"className":"hg-wrap hg-intro__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap hg-intro__in">
<!-- wp:group {"className":"hg-intro__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-intro__txt">
<!-- wp:paragraph {"className":"hg-label sp-reveal sp-reveal--up"} -->
<p class="hg-label sp-reveal sp-reveal--up"><?php echo esc_html( hatake_greens_t( 'intro_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hg-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hg-h2 sp-reveal sp-reveal--up"><?php echo esc_html( hatake_greens_t( 'intro_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-prose sp-reveal sp-reveal--up"} -->
<p class="hg-prose sp-reveal sp-reveal--up"><?php echo esc_html( hatake_greens_t( 'intro_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-prose sp-reveal sp-reveal--up"} -->
<p class="hg-prose sp-reveal sp-reveal--up"><?php echo esc_html( hatake_greens_t( 'intro_p2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-intro__img"} -->
<figure class="wp-block-image size-full hg-intro__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hk-02.webp' ) ); ?>" alt="<?php echo esc_attr( hatake_greens_t( 'alt_hk-02' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
