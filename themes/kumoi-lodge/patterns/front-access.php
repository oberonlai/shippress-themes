<?php
/**
 * Title: Home: getting here
 * Slug: kumoi-lodge/front-access
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: Two columns: the track, the gate car park and four hairline hour rows at the left, a 1.17:1 rounded photograph at the right.
 */
?>
<!-- wp:group {"className":"km-sec km-access","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"access"} -->
<section id="access" class="wp-block-group alignfull km-sec km-access"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:heading {"level":2,"className":"km-title"} -->
<h2 class="wp-block-heading km-title"><?php echo esc_html( kumoi_lodge_t( 'access_label' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"km-access__grid","layout":{"type":"default"}} -->
<div class="wp-block-group km-access__grid"><!-- wp:group {"className":"km-access__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group km-access__text sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kumoi_lodge_t( 'access_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php echo esc_html( kumoi_lodge_t( 'access_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"km-hours"} -->
<ul class="wp-block-list km-hours"><?php foreach ( kumoi_lodge_a( 'hours' ) as $row ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $row[0] ); ?><strong><?php echo esc_html( $row[1] ); ?></strong></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"km-photo km-photo--access sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group km-photo km-photo--access sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kumoi_lodge_img( 'kl-m1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_m1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
