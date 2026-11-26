<?php
/**
 * Title: Home: the ward band
 * Slug: shirogane-college/front-ward
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Full-width parallax cover of the teaching ward with a pointed pine panel carrying the statement.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"ward","align":"full","className":"sg-sec sg-sec--ward","layout":{"type":"default"}} -->
<section id="ward" class="wp-block-group alignfull sg-sec sg-sec--ward">
<!-- wp:cover {"url":"<?php echo shirogane_college_img( 'ward-wide.webp' ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"sg-wardband sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left sg-wardband sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shirogane_college_t( 'alt_p08' ) ); ?>" src="<?php echo shirogane_college_img( 'ward-wide.webp' ); ?>" data-object-fit="cover" loading="eager"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"sg-wardband__rev sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wardband__rev sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sg-wardband__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sg-wardband__panel">
<!-- wp:paragraph {"className":"sg-eyebrow sg-eyebrow--light"} -->
<p class="sg-eyebrow sg-eyebrow--light"><?php echo esc_html( shirogane_college_t( 'ward_eb' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"sg-wardband__h"} -->
<h2 class="wp-block-heading sg-wardband__h"><?php echo esc_html( shirogane_college_t( 'ward_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sg-wardband__p"} -->
<p class="sg-wardband__p"><?php echo esc_html( shirogane_college_t( 'ward_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="sg-ulink" href="/ward/"><?php echo esc_html( shirogane_college_t( 'ward_link' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
</section>
<!-- /wp:group -->