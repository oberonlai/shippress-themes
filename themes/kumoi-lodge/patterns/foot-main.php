<?php
/**
 * Title: Footer: night close
 * Slug: kumoi-lodge/foot-main
 * Categories: kumoi-lodge
 * Keywords: lodge, footer, close
 * Viewport Width: 1440
 * Description: Full-bleed dusk photograph with a slow parallax, the postal line at the bottom left, a wide-tracked index row, the languages and an ember ring.
 */
?>
<!-- wp:group {"className":"km-close sp-parallax","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull km-close sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"km-close__img"} -->
<figure class="wp-block-image size-full km-close__img"><img src="<?php echo kumoi_lodge_img( 'kl-d1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_d1' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"km-close__body","layout":{"type":"default"}} -->
<div class="wp-block-group km-close__body"><!-- wp:group {"className":"km-close__top","layout":{"type":"default"}} -->
<div class="wp-block-group km-close__top"><!-- wp:paragraph {"className":"km-close__name"} -->
<p class="km-close__name"><?php echo esc_html( kumoi_lodge_t( 'close_name' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"km-close__addr"} -->
<p class="km-close__addr"><?php echo esc_html( kumoi_lodge_t( 'close_addr' ) ); ?><br><?php echo esc_html( kumoi_lodge_t( 'close_seasons' ) ); ?><br><a href="mailto:<?php echo esc_attr( kumoi_lodge_t( 'foot_email' ) ); ?>"><?php echo esc_html( kumoi_lodge_t( 'foot_email' ) ); ?></a> · <?php echo esc_html( kumoi_lodge_t( 'foot_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="km-index" aria-label="<?php echo esc_attr( kumoi_lodge_t( 'close_name' ) ); ?>"><?php foreach ( kumoi_lodge_a( 'idx' ) as $item ) : ?><a href="<?php echo esc_url( home_url( $item[1] ) ); ?>"><?php echo esc_html( $item[0] ); ?></a><?php endforeach; ?></nav>
<!-- /wp:html -->
<!-- wp:group {"className":"km-close__base","layout":{"type":"default"}} -->
<div class="wp-block-group km-close__base"><!-- wp:paragraph {"className":"km-close__legal"} -->
<p class="km-close__legal"><?php echo esc_html( kumoi_lodge_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="km-langs"><?php foreach ( kumoi_lodge_a( 'langs' ) as $i => $l ) : ?><span<?php echo 0 === $i ? ' aria-current="true"' : ''; ?>><?php echo esc_html( $l ); ?></span><?php endforeach; ?></p>
<!-- /wp:html -->
<!-- wp:html -->
<a class="km-ring km-ring--close" href="<?php echo esc_url( home_url( '/rates-and-booking/' ) ); ?>"><?php echo implode( '<br>', array_map( 'esc_html', explode( '|', kumoi_lodge_t( 'ring' ) ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
