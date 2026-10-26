<?php
/**
 * Title: Home: the people
 * Slug: kasane-venue/front-people
 * Categories: kasane-venue
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","className":"kv-people kv-room--right","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kv-people kv-room--right">
<!-- wp:group {"className":"kv-room__in kv-people__in","layout":{"type":"default"}} -->
<div class="wp-block-group kv-room__in kv-people__in">
<!-- wp:group {"className":"kv-people__text","layout":{"type":"default"}} -->
<div class="wp-block-group kv-people__text">
<!-- wp:heading {"className":"kv-h2"} -->
<h2 class="wp-block-heading kv-h2"><?php echo wp_kses_post( kasane_venue_t( 'people_label' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kv-body sp-reveal sp-reveal--up"} -->
<p class="kv-body sp-reveal sp-reveal--up"><?php echo wp_kses_post( kasane_venue_t( 'people_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="kv-names sp-stagger"><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Ines Varga</span> — <?php echo wp_kses_post( kasane_venue_t( 'p1' ) ); ?></li><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Tomas Achterberg</span> — <?php echo wp_kses_post( kasane_venue_t( 'p2' ) ); ?></li><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Amara Okonjo</span> — <?php echo wp_kses_post( kasane_venue_t( 'p3' ) ); ?></li><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Priya Nair</span> — <?php echo wp_kses_post( kasane_venue_t( 'p4' ) ); ?></li><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Lucien Marchetti</span> — <?php echo wp_kses_post( kasane_venue_t( 'p5' ) ); ?></li><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Hana Kowalczyk</span> — <?php echo wp_kses_post( kasane_venue_t( 'p6' ) ); ?></li><li class="sp-reveal sp-reveal--up"><span class="kv-names__n">Rafael Duarte</span> — <?php echo wp_kses_post( kasane_venue_t( 'p7' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kv-blob kv-blob--d kv-room__fig kv-ratio-14 sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full kv-blob kv-blob--d kv-room__fig kv-ratio-14 sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k11.webp' ) ); ?>" alt="<?php echo esc_attr( kasane_venue_t( 'alt_k11' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
