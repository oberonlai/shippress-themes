<?php
/**
 * Title: Home: notes from the round
 * Slug: shikii-mats/front-notes
 * Categories: shikii-mats
 * Viewport Width: 1440
 * Description: Three short customer notes with names and sites; the first card carries a photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sm-sec sm-sec--band sm-sec--notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sm-sec sm-sec--band sm-sec--notes">
<!-- wp:group {"className":"sm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap">
<!-- wp:heading {"level":2,"className":"sm-h2"} -->
<h2 class="wp-block-heading sm-h2"><?php echo esc_html( shikii_mats_t( 'notes_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"sm-notes","layout":{"type":"default"}} -->
<div class="wp-block-group sm-notes">
<!-- wp:group {"className":"sm-note sm-note--photo","layout":{"type":"default"}} -->
<div class="wp-block-group sm-note sm-note--photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sm-note__img","aspectRatio":"3/2","scale":"cover"} -->
<figure class="wp-block-image size-full sm-note__img"><img src="<?php echo shikii_mats_img( 'story-bakery.webp' ); ?>" alt="<?php echo shikii_mats_a( 'alt_p12' ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"sm-note__p"} -->
<p class="sm-note__p"><?php echo esc_html( shikii_mats_t( 'n2_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-note__who"} -->
<p class="sm-note__who"><strong><?php echo esc_html( shikii_mats_t( 'n2_who' ) ); ?></strong> · <?php echo esc_html( shikii_mats_t( 'n2_role' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-notes__col","layout":{"type":"default"}} -->
<div class="wp-block-group sm-notes__col">
<!-- wp:group {"className":"sm-note","layout":{"type":"default"}} -->
<div class="wp-block-group sm-note">
<!-- wp:paragraph {"className":"sm-note__p"} -->
<p class="sm-note__p"><?php echo esc_html( shikii_mats_t( 'n1_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-note__who"} -->
<p class="sm-note__who"><strong><?php echo esc_html( shikii_mats_t( 'n1_who' ) ); ?></strong> · <?php echo esc_html( shikii_mats_t( 'n1_role' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sm-note","layout":{"type":"default"}} -->
<div class="wp-block-group sm-note">
<!-- wp:paragraph {"className":"sm-note__p"} -->
<p class="sm-note__p"><?php echo esc_html( shikii_mats_t( 'n3_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-note__who"} -->
<p class="sm-note__who"><strong><?php echo esc_html( shikii_mats_t( 'n3_who' ) ); ?></strong> · <?php echo esc_html( shikii_mats_t( 'n3_role' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
