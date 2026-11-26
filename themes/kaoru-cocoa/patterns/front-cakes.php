<?php
/**
 * Title: Home: cake orders with dotted accordion
 * Slug: kaoru-cocoa/front-cakes
 * Categories: kaoru-cocoa
 * Keywords: accordion, cakes, order, sticky
 * Viewport Width: 1440
 * Description: A sticky photograph beside the page word, an intro and four dotted accordion rows with solid disc chevrons that explain how a cake order is placed.
 */
?>
<!-- wp:group {"align":"full","anchor":"cakes","className":"kc-cakes","layout":{"type":"default"}} -->
<div id="cakes" class="wp-block-group alignfull kc-cakes"><!-- wp:group {"className":"kc-cakes__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cakes__grid"><!-- wp:group {"className":"kc-cakes__photo","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cakes__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-cakes__img"} -->
<figure class="wp-block-image size-full kc-cakes__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cake-box.webp' ) ); ?>" alt="<?php echo esc_attr( kaoru_cocoa_t( 'a27953a68' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-cakes__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-cakes__text"><!-- wp:heading {"level":2,"className":"kc-word"} -->
<h2 class="wp-block-heading kc-word"><?php echo wp_kses_post( kaoru_cocoa_t( 'k7481b149' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo wp_kses_post( kaoru_cocoa_t( 'kfae2fa1e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-acc sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-acc sp-stagger"><!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up","showContent":true} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up" open><summary><?php echo wp_kses_post( kaoru_cocoa_t( 'kdc474b6d' ) ); ?><br><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k2cab5599' ) ); ?></em></summary>
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaoru_cocoa_t( 'k4964ea78' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( kaoru_cocoa_t( 'k7f7dd091' ) ); ?><br><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k4ac2adfc' ) ); ?></em></summary>
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaoru_cocoa_t( 'kf9fec757' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( kaoru_cocoa_t( 'k2166cc23' ) ); ?><br><em><?php echo wp_kses_post( kaoru_cocoa_t( 'kfae04272' ) ); ?></em></summary>
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaoru_cocoa_t( 'k64884712' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kc-acc__row sp-reveal sp-reveal--up"} -->
<details class="wp-block-details kc-acc__row sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( kaoru_cocoa_t( 'ke7ca8519' ) ); ?><br><em><?php echo wp_kses_post( kaoru_cocoa_t( 'k7efba478' ) ); ?></em></summary>
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaoru_cocoa_t( 'k49751fca' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns"><!-- wp:button {"className":"kc-btn kc-btn--primary"} -->
<div class="wp-block-button kc-btn kc-btn--primary"><a class="wp-block-button__link wp-element-button" href="/cake-orders/"><?php echo wp_kses_post( kaoru_cocoa_t( 'k517d583c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"kc-link"} -->
<p class="kc-link"><a href="/cake-orders/#collection"><?php echo wp_kses_post( kaoru_cocoa_t( 'k8046ec14' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
