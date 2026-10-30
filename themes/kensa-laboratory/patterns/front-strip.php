<?php
/**
 * Title: Home: slide strip
 * Slug: kensa-laboratory/front-strip
 * Categories: kensa-laboratory
 * Keywords: materials testing, laboratory, concrete
 * Viewport Width: 1440
 * Description: Five documentary photographs in a row; the centre one carries the headline, the neighbours are cut by the viewport edges.
 */
?>
<!-- wp:group {"align":"full","className":"kl-strip-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kl-strip-wrap"><!-- wp:html -->
<section class="kl-strip" id="top">
<div class="kl-strip__window"><div class="kl-strip__track">
<div class="kl-slide kl-slide--side" aria-hidden="true"><div class="kl-slide__media"><img src="<?php echo kensa_laboratory_img( 'strip-slump.webp' ); ?>" alt="" width="2000" height="760"/></div></div>
<div class="kl-slide kl-slide--side" aria-hidden="true"><div class="kl-slide__media"><img src="<?php echo kensa_laboratory_img( 'strip-coring.webp' ); ?>" alt="" width="2000" height="760"/></div></div>
<div class="kl-slide kl-slide--c"><div class="kl-slide__media sp-parallax" style="--sp-par:6%"><img src="<?php echo kensa_laboratory_img( 'hero-compression.webp' ); ?>" alt="<?php echo esc_attr( kensa_laboratory_t( 'alt_P01' ) ); ?>" width="2000" height="760" fetchpriority="high"/></div><h1 class="kl-strip__h1"><?php echo esc_html( kensa_laboratory_t( 'h1_1' ) ); ?> <br><?php echo esc_html( kensa_laboratory_t( 'h1_2' ) ); ?></h1></div>
<div class="kl-slide kl-slide--side" aria-hidden="true"><div class="kl-slide__media"><img src="<?php echo kensa_laboratory_img( 'strip-rebar.webp' ); ?>" alt="" width="2000" height="760"/></div></div>
<div class="kl-slide kl-slide--side" aria-hidden="true"><div class="kl-slide__media"><img src="<?php echo kensa_laboratory_img( 'strip-curing.webp' ); ?>" alt="" width="2000" height="760"/></div></div>
</div></div>
<p class="kl-sr"><?php echo esc_html( kensa_laboratory_t( 'strip_sum' ) ); ?></p>
<div class="kl-ticks" aria-hidden="true"><span class="is-on"></span><span></span><span></span><span></span><span></span></div>
</section>
<!-- /wp:html --></div>
<!-- /wp:group -->
