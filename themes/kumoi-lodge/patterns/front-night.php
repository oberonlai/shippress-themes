<?php
/**
 * Title: Home: how a night is held
 * Slug: kumoi-lodge/front-night
 * Categories: kumoi-lodge
 * Keywords: lodge, home
 * Viewport Width: 1440
 * Description: A 1 px bordered rounded box: text, three outline round icons and the six-line schedule on the left, a photograph to the edge on the right; two rounded squares below.
 */
?>
<!-- wp:group {"className":"km-sec km-night","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"night"} -->
<section id="night" class="wp-block-group alignfull km-sec km-night"><!-- wp:group {"className":"km-col","layout":{"type":"default"}} -->
<div class="wp-block-group km-col"><!-- wp:heading {"level":2,"className":"km-title"} -->
<h2 class="wp-block-heading km-title"><?php kumoi_lodge_e( 'night_label' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"km-box","layout":{"type":"default"}} -->
<div class="wp-block-group km-box"><!-- wp:group {"className":"km-box__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-box__text"><!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php kumoi_lodge_e( 'night_lead' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<ul class="km-icons">
<li><span class="km-icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="9" width="14" height="11" rx="1.5"/><path d="M9 20v-4h6v4M8 9V6h8v3M12 6V3"/></svg></span><span class="km-icons__cap"><?php kumoi_lodge_e( 'ic1' ); ?></span></li>
<li><span class="km-icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4h5v9l6 2.5c1.2.5 2 1.6 2 3V20H6z"/><path d="M6 17h13M11 8h-5"/></svg></span><span class="km-icons__cap"><?php kumoi_lodge_e( 'ic2' ); ?></span></li>
<li><span class="km-icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3h8l3 9H5zM12 12v7M8 20h8"/></svg></span><span class="km-icons__cap"><?php kumoi_lodge_e( 'ic3' ); ?></span></li>
</ul>
<!-- /wp:html -->
<!-- wp:list {"className":"km-sched"} -->
<ul class="wp-block-list km-sched"><?php for ( $i = 1; $i <= 6; $i++ ) : ?><!-- wp:list-item -->
<li><strong><?php kumoi_lodge_e( 'sch' . $i . '_t' ); ?></strong><?php kumoi_lodge_e( 'sch' . $i ); ?></li>
<!-- /wp:list-item --><?php endfor; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"km-box__photo"} -->
<figure class="wp-block-image size-full km-box__photo"><img src="<?php echo kumoi_lodge_img( 'kl-n1' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( 'alt_n1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"km-duo","layout":{"type":"default"}} -->
<div class="wp-block-group km-duo"><?php foreach ( array( 1 => array( 'kl-f1', 'alt_f1' ), 2 => array( 'kl-k1', 'alt_k1' ) ) as $n => $q ) : ?><!-- wp:group {"className":"km-sq","layout":{"type":"default"}} -->
<div class="wp-block-group km-sq"><!-- wp:group {"className":"km-photo km-photo--sq sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group km-photo km-photo--sq sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kumoi_lodge_img( $q[0] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>" alt="<?php echo esc_attr( kumoi_lodge_t( $q[1] ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"km-card-title"} -->
<h3 class="wp-block-heading km-card-title"><?php kumoi_lodge_e( 'sq' . $n . '_h' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"km-lead"} -->
<p class="km-lead"><?php kumoi_lodge_e( 'sq' . $n . '_p' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
