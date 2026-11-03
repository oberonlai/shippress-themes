<?php
/**
 * Title: About: harbour story, three dates and why the marina stays small
 * Slug: tomari-marina/inner-about
 * Categories: tomari-marina
 * Keywords: inner
 * Viewport Width: 1440
 * Description: The About page: a page head with numeral 08 and the harbour master portrait crop, a hairline row of three dates, a parallax dawn band and three paragraphs on why the marina stays small.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-t1__panel tm-head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-t1__panel tm-head"><!-- wp:group {"className":"tm-t1__tl","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__tl"><!-- wp:html -->
<svg class="tm-pennant" width="48" height="38" viewBox="0 0 48 38" aria-hidden="true" focusable="false"><path d="M2 0h4v38H2z M6 3l40 11L6 25z" fill="#C30D23"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tm-t1__label"} -->
<p class="tm-t1__label"><?php echo wp_kses_post( tomari_marina_t( 'in_about_13' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-t1__word"} -->
<p class="tm-t1__word"><?php echo wp_kses_post( tomari_marina_t( 'in_about_14' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-t1__num"} -->
<p class="tm-t1__num"><?php echo wp_kses_post( tomari_marina_t( 'in_about_15' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"0.52","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-t1__portrait tm-op-74"} -->
<figure class="wp-block-image size-large tm-t1__portrait tm-op-74"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-pontoon-master.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'in_about_16' ) ); ?>" style="aspect-ratio:0.52;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"tm-t1__statement"} -->
<h1 class="wp-block-heading tm-t1__statement"><?php echo wp_kses_post( tomari_marina_t( 'in_about_17' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"tm-t1__side","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__side"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_18' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line-inner"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tm-board tm-board--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-board tm-board--inner"><!-- wp:paragraph {"className":"tm-board__title"} -->
<p class="tm-board__title"><?php echo wp_kses_post( tomari_marina_t( 'in_about_19' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'in_about_01' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:heading {"level":4,"className":"tm-cell__name"} -->
<h4 class="wp-block-heading tm-cell__name"><?php echo wp_kses_post( tomari_marina_t( 'in_about_02' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:heading {"level":4,"className":"tm-cell__name"} -->
<h4 class="wp-block-heading tm-cell__name"><?php echo wp_kses_post( tomari_marina_t( 'in_about_04' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:heading {"level":4,"className":"tm-cell__name"} -->
<h4 class="wp-block-heading tm-cell__name"><?php echo wp_kses_post( tomari_marina_t( 'in_about_06' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:cover {"alt":"<?php echo substr( wp_json_encode( tomari_marina_t( 'in_about_20' ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ), 1, -1 ); ?>","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-dawn-panorama.webp' ) ); ?>","dimRatio":20,"overlayColor":"ink","minHeight":480,"minHeightUnit":"px","focalPoint":{"x":0.5,"y":0.5},"contentPosition":"bottom left","align":"full","className":"tm-dawn tm-dawn--inner sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left tm-dawn tm-dawn--inner sp-parallax" style="min-height:480px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tomari_marina_t( 'in_about_20' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-dawn-panorama.webp' ) ); ?>" data-object-fit="cover" data-object-position="50% 50%" style="object-position:50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"tm-dawn__cap"} -->
<p class="tm-dawn__cap"><?php echo wp_kses_post( tomari_marina_t( 'in_about_21' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","align":"full","className":"tm-about__small tm-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-about__small tm-section"><!-- wp:heading {"level":2,"className":"tm-h2 sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'in_about_08' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'in_about_09' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tm-about__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tm-about__cols"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_10' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_11' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_about_12' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->