<?php
/**
 * Title: Home: crew photo strip and names
 * Slug: daichi-landscapes/front-people
 * Categories: daichi-landscapes
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"dl-sec dl-people","tagName":"section","align":"full","layout":{"type":"default"},"anchor":"people"} -->
<section id="people" class="wp-block-group alignfull dl-sec dl-people">
<!-- wp:group {"className":"dl-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group dl-wrap">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-briefing.webp' ) ); ?>","dimRatio":0,"minHeight":420,"minHeightUnit":"px","isDark":false,"className":"dl-cover dl-cover--crew sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light dl-cover dl-cover--crew sp-parallax" style="min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( daichi_landscapes_t( 'alt_p12' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-briefing.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->
<!-- wp:html -->
<ul class="dl-people-list"><li class="dl-person"><span class="dl-person__n"><?php echo esc_html( daichi_landscapes_t( 'pe1_n' ) ); ?></span><span class="dl-person__r"><?php echo esc_html( daichi_landscapes_t( 'pe1_r' ) ); ?></span></li><li class="dl-person"><span class="dl-person__n"><?php echo esc_html( daichi_landscapes_t( 'pe2_n' ) ); ?></span><span class="dl-person__r"><?php echo esc_html( daichi_landscapes_t( 'pe2_r' ) ); ?></span></li><li class="dl-person"><span class="dl-person__n"><?php echo esc_html( daichi_landscapes_t( 'pe3_n' ) ); ?></span><span class="dl-person__r"><?php echo esc_html( daichi_landscapes_t( 'pe3_r' ) ); ?></span></li><li class="dl-person"><span class="dl-person__n"><?php echo esc_html( daichi_landscapes_t( 'pe4_n' ) ); ?></span><span class="dl-person__r"><?php echo esc_html( daichi_landscapes_t( 'pe4_r' ) ); ?></span></li><li class="dl-person"><span class="dl-person__n"><?php echo esc_html( daichi_landscapes_t( 'pe5_n' ) ); ?></span><span class="dl-person__r"><?php echo esc_html( daichi_landscapes_t( 'pe5_r' ) ); ?></span></li><li class="dl-person"><span class="dl-person__n"><?php echo esc_html( daichi_landscapes_t( 'pe6_n' ) ); ?></span><span class="dl-person__r"><?php echo esc_html( daichi_landscapes_t( 'pe6_r' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:group {"className":"dl-people__body sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group dl-people__body sp-reveal sp-reveal--up">
<!-- wp:group {"className":"dl-people__text","layout":{"type":"default"}} -->
<div class="wp-block-group dl-people__text">
<!-- wp:paragraph {"className":"dl-label"} -->
<p class="dl-label"><?php echo esc_html( daichi_landscapes_t( 'pe_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"dl-h2"} -->
<h2 class="wp-block-heading dl-h2"><?php echo esc_html( daichi_landscapes_t( 'pe_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( daichi_landscapes_t( 'pe_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
