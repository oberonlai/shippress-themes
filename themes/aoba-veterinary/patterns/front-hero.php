<?php
/**
 * Title: Home: framed statement box on a full-bleed photo
 * Slug: aoba-veterinary/front-hero
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: A full-bleed consult-room photograph with a 2 px outlined translucent statement box at the lower right, and a white info bar with one filled booking button.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p01-consult-room.webp' ); ?>","alt":"Vet kneeling beside a golden mixed-breed dog in a bright consult room","dimRatio":0,"focalPoint":{"x":0.35,"y":0.4},"minHeight":560,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Vet kneeling beside a golden mixed-breed dog in a bright consult room" src="<?php echo esc_url( $av . 'p01-consult-room.webp' ); ?>" style="object-position:35% 40%" data-object-fit="cover" data-object-position="35% 40%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:heading {"textAlign":"center","level":1,"className":"av-box__title"} -->
<h1 class="wp-block-heading has-text-align-center av-box__title">Calm, careful medicine <br>for the dogs and cats you love.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line">General practice · Surgery · Dentistry — Fairhaven since 2014</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"av-info","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull av-info"><!-- wp:group {"align":"wide","className":"av-info__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-info__in"><!-- wp:group {"className":"av-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell"><!-- wp:paragraph {"className":"av-info__k"} -->
<p class="av-info__k">Hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-info__v"} -->
<p class="av-info__v">Mon–Fri 9:00–12:30 · 15:30–19:00<br>Sat 9:00–12:30 · 15:30–17:00 · Sun closed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell"><!-- wp:paragraph {"className":"av-info__k"} -->
<p class="av-info__k">Find us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-info__v"} -->
<p class="av-info__v">214 Alder Street, Fairhaven</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell"><!-- wp:paragraph {"className":"av-info__k"} -->
<p class="av-info__k">Dogs &amp; cats</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-info__v"} -->
<p class="av-info__v">By appointment, with urgent same-day slots</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-info__cell av-info__cell--cta","layout":{"type":"default"}} -->
<div class="wp-block-group av-info__cell av-info__cell--cta"><!-- wp:buttons {"className":"av-book"} -->
<div class="wp-block-buttons av-book"><!-- wp:button {"className":"av-book__btn"} -->
<div class="wp-block-button av-book__btn"><a class="wp-block-button__link wp-element-button" href="/book/">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
