<?php
/**
 * Title: Page head: Morning sheet
 * Slug: misora-links/head-morning-sheet
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: T2 page head: cropped page word, vertical column, H1 and a ticket-notch photograph.
 */
?>
<!-- wp:group {"className":"ml-head","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-head"><!-- wp:paragraph {"className":"ml-word ml-head__word"} -->
<p class="ml-word ml-head__word"><?php echo esc_html( misora_links_t( 'in_morning_sheet_word' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-vert ml-head__vert"} -->
<p class="ml-vert ml-head__vert"><?php echo wp_kses_post( misora_links_t( 'in_morning_sheet_vert' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"ml-head__h1"} -->
<h1 class="wp-block-heading ml-head__h1"><?php echo esc_html( misora_links_t( 'in_morning_sheet_h1' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:group {"className":"ml-head__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ml-head__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-ticket ml-ticket--lg"} -->
<figure class="wp-block-image size-full ml-ticket ml-ticket--lg"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-four-ball.webp' ) ); ?>" alt="<?php echo esc_attr( misora_links_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
