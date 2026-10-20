<?php
/**
 * Title: Home: an interview with the chief engineer
 * Slug: hagane-machinery/front-voice
 * Categories: hagane-machinery
 * Keywords: home, machinery
 * Viewport Width: 1440
 * Description: A quotation from the chief engineer across the width, then her portrait beside two questions and answers and a short note on her.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-fp hm-voice","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-fp hm-voice"><!-- wp:group {"className":"hm-fp__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-fp__in"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hm-voice__quote"} -->
<p class="hm-voice__quote"><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"hm-voice__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-voice__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-voice__photo"} -->
<figure class="wp-block-image size-large hm-voice__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/engineer-portrait.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'front_voice_03' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"hm-voice__qa","layout":{"type":"default"}} -->
<div class="wp-block-group hm-voice__qa"><!-- wp:heading {"level":3,"className":"hm-voice__q"} -->
<h3 class="wp-block-heading hm-voice__q"><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_04' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_05' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"hm-voice__q"} -->
<h3 class="wp-block-heading hm-voice__q"><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_06' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_07' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hm-small"} -->
<p class="hm-small"><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_08' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/engineers/"><?php echo wp_kses_post( hagane_machinery_t( 'front_voice_09' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
