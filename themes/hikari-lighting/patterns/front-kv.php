<?php
/**
 * Title: Home: lights-on cover
 * Slug: hikari-lighting/front-kv
 * Categories: hikari-lighting
 * Keywords: cover, hero, lighting
 * Viewport Width: 1440
 * Description: Low-key full-bleed photo under a warm-black curtain that lifts, a stencil wordmark, a mono caption, a caps line, a running thin-caps statement and a light info bar.
 */
$img = esc_url( get_theme_file_uri( 'assets/images/demo/hl-01-bay.webp' ) );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":0,"minHeight":100,"minHeightUnit":"svh","contentPosition":"top left","align":"full","className":"hl-kv sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-top-left hl-kv sp-parallax" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100svh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Woman in a dark coat turning on a linen floor lamp in a stone showroom." src="<?php echo $img; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:html -->
<span class="hl-kv__scrim" aria-hidden="true"></span><span class="hl-kv__curtain" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:html -->
<?php echo hikari_lighting_wordmark( 'hl-kv__mark' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:group {"className":"hl-kv__capline","layout":{"type":"default"}} -->
<div class="wp-block-group hl-kv__capline"><!-- wp:paragraph {"className":"hl-kv__cap"} -->
<p class="hl-kv__cap">An independent lighting showroom<br>for homes and small dining rooms.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-kv__link hl-arrow"} -->
<p class="hl-kv__link hl-arrow"><a href="/visit/">Showroom ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"hl-kv__h1"} -->
<h1 class="wp-block-heading hl-kv__h1">Lamps, fittings and light plans. Rotterdam.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hl-kv__one"} -->
<p class="hl-kv__one">Quiet on the surface. Every lamp is chosen for one room.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","className":"hl-marq hl-kv__marq sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hl-marq hl-kv__marq sp-marquee"><!-- wp:group {"className":"hl-marq__run","layout":{"type":"default"}} -->
<div class="wp-block-group hl-marq__run"><!-- wp:paragraph -->
<p>Light is the quietest furniture in the room — Light is the quietest furniture in the room —</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-marq__run","layout":{"type":"default"}} -->
<div class="wp-block-group hl-marq__run" aria-hidden="true"><!-- wp:paragraph -->
<p>Light is the quietest furniture in the room — Light is the quietest furniture in the room —</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hl-kv__bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hl-kv__bar"><!-- wp:paragraph {"className":"hl-kv__bar-label"} -->
<p class="hl-kv__bar-label">Open today :</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-kv__bar-hours"} -->
<p class="hl-kv__bar-hours"><span class="hl-dot" aria-hidden="true"></span>Wed–Sat 11:00–18:00, Sun 12:00–17:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-kv__bar-addr"} -->
<p class="hl-kv__bar-addr">Steenkade 14, Rotterdam</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-kv__bar-floor hl-arrow"} -->
<p class="hl-kv__bar-floor hl-arrow"><a href="/lamps/">On the floor: 6 pieces, November ↗</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-kv__bar-book hl-arrow"} -->
<p class="hl-kv__bar-book hl-arrow"><a href="/visit/">Book a visit ↗</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
