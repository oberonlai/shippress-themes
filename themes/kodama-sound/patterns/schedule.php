<?php
/**
 * Title: Home: solid sliver and three-zone row
 * Slug: kodama-sound/schedule
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: A solid mauve sliver, then a three-zone row: left thought and lede, a narrow tall photograph in the exact page centre, a right-flush stacked list.
 */
?>
<!-- wp:group {"tagName":"section","className":"kd-sec kd-sched kd-p","layout":{"type":"default"}} -->
<section class="wp-block-group kd-sec kd-sched kd-p"><!-- wp:group {"className":"kd-sliver kd-sliver--solid","layout":{"type":"default"}} -->
<div class="wp-block-group kd-sliver kd-sliver--solid"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-row3","layout":{"type":"default"}} -->
<div class="wp-block-group kd-row3"><!-- wp:group {"className":"kd-z kd-z--l","layout":{"type":"default"}} -->
<div class="wp-block-group kd-z kd-z--l"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--sched"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--sched"><?php echo kodama_sound_lines( 'sd_h2' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-lede2"} -->
<p class="kd-lede2"><?php echo esc_html( kodama_sound_t( 'sd_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-tx kd-p--s"} -->
<p class="kd-tx kd-p--s"><?php echo esc_html( kodama_sound_t( 'sd_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-more"} -->
<p class="kd-more"><a href="/process/"><?php echo esc_html( kodama_sound_t( 'sd_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-sliver kd-sliver--photo sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kd-sliver kd-sliver--photo sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sliver-cable-reel.webp' ) ); ?>" alt="<?php echo esc_attr( kodama_sound_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kd-z kd-z--r kd-list sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kd-z kd-z--r kd-list sp-stagger"><!-- wp:paragraph {"className":"kd-li sp-reveal sp-reveal--up"} -->
<p class="kd-li sp-reveal sp-reveal--up"><?php echo esc_html( kodama_sound_t( 'sd_li1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-li sp-reveal sp-reveal--up"} -->
<p class="kd-li sp-reveal sp-reveal--up"><?php echo esc_html( kodama_sound_t( 'sd_li2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-li sp-reveal sp-reveal--up"} -->
<p class="kd-li sp-reveal sp-reveal--up"><?php echo esc_html( kodama_sound_t( 'sd_li3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-li sp-reveal sp-reveal--up"} -->
<p class="kd-li sp-reveal sp-reveal--up"><?php echo esc_html( kodama_sound_t( 'sd_li4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-li sp-reveal sp-reveal--up"} -->
<p class="kd-li sp-reveal sp-reveal--up"><?php echo esc_html( kodama_sound_t( 'sd_li5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
