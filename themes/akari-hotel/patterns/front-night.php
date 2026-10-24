<?php
/**
 * Title: Home: 04 Night
 * Slug: akari-hotel/front-night
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Ink chapter: a centred column with the word Night, a small bedside photograph and the quiet-hours lines.
 */
?>
<!-- wp:group {"className":"ak-ch ak-ch--night","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section id="night" class="wp-block-group alignfull ak-ch ak-ch--night"><!-- wp:group {"className":"ak-night__col sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ak-night__col sp-stagger"><!-- wp:paragraph {"className":"ak-label sp-reveal sp-reveal--up"} -->
<p class="ak-label sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'label_04' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ak-word sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ak-word sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'night_word' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-night__photo sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full ak-night__photo sp-reveal sp-reveal--up"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-bedside.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"ak-night__p sp-reveal sp-reveal--up"} -->
<p class="ak-night__p sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'night_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ak-night__p sp-reveal sp-reveal--up"} -->
<p class="ak-night__p sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'night_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
