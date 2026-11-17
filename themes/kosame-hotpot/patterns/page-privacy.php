<?php
/**
 * Title: Page: Privacy
 * Slug: kosame-hotpot/page-privacy
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: One photograph on the stage, a page head and three plain-text sections without motion.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n1"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'room-four.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--a"} -->
<p class="ks-stage__phrase ks-stage__phrase--a"><?php echo esc_html( kosame_hotpot_t( 'phrase_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--b"} -->
<p class="ks-stage__phrase ks-stage__phrase--b"><?php echo esc_html( kosame_hotpot_t( 'phrase_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-col ks-col--inner","layout":{"type":"default"}} -->
<div class="wp-block-group ks-col ks-col--inner"><!-- wp:group {"anchor":"top","className":"ks-pagehead","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group ks-pagehead"><!-- wp:paragraph {"className":"ks-pagehead__kicker"} -->
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'priv_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-pagehead__h1"} -->
<h1 class="wp-block-heading ks-pagehead__h1"><?php echo esc_html( kosame_hotpot_t( 'priv_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-pagehead__lead"} -->
<p class="ks-pagehead__lead"><?php echo esc_html( kosame_hotpot_t( 'priv_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-priv","layout":{"type":"default"}} -->
<div class="wp-block-group ks-priv"><!-- wp:heading {"level":2,"className":"ks-priv__h"} -->
<h2 class="wp-block-heading ks-priv__h"><?php echo esc_html( kosame_hotpot_t( 'priv_h0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-priv__p"} -->
<p class="ks-priv__p"><?php echo esc_html( kosame_hotpot_t( 'priv_p0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-priv__h"} -->
<h2 class="wp-block-heading ks-priv__h"><?php echo esc_html( kosame_hotpot_t( 'priv_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-priv__p"} -->
<p class="ks-priv__p"><?php echo esc_html( kosame_hotpot_t( 'priv_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ks-priv__h"} -->
<h2 class="wp-block-heading ks-priv__h"><?php echo esc_html( kosame_hotpot_t( 'priv_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-priv__p"} -->
<p class="ks-priv__p"><?php echo esc_html( kosame_hotpot_t( 'priv_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
