<?php
/**
 * Title: Home: how a call-out is taken
 * Slug: hozen-facilities/front-callout
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Lockup, a prose walk-through of the five steps with the desk number and the four priorities, beside the help desk photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"callout","className":"hz-sec hz-callout","layout":{"type":"default"}} -->
<section id="callout" class="wp-block-group alignfull hz-sec hz-callout">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'co_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'co_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'co_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-co","layout":{"type":"default"}} -->
<div class="wp-block-group hz-co">
<!-- wp:group {"className":"hz-co__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-co__text">
<!-- wp:paragraph {"className":"hz-co__p"} -->
<p class="hz-co__p"><?php echo esc_html( hozen_facilities_t( 'co_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hz-phone","layout":{"type":"default"}} -->
<div class="wp-block-group hz-phone">
<!-- wp:paragraph {"className":"hz-phone__num"} -->
<p class="hz-phone__num"><a href="tel:+31105550198">+31 10 555 0198</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-phone__meta"} -->
<p class="hz-phone__meta"><?php echo esc_html( hozen_facilities_t( 'co_phone_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<dl class="hz-prio"><div class="hz-prio__row"><dt><span class="hz-prio__code">P1</span> <span class="hz-prio__name"><?php echo esc_html( hozen_facilities_t( 'prio1_n' ) ); ?></span></dt><dd><?php echo esc_html( hozen_facilities_t( 'prio1_t' ) ); ?></dd></div><div class="hz-prio__row"><dt><span class="hz-prio__code">P2</span> <span class="hz-prio__name"><?php echo esc_html( hozen_facilities_t( 'prio2_n' ) ); ?></span></dt><dd><?php echo esc_html( hozen_facilities_t( 'prio2_t' ) ); ?></dd></div><div class="hz-prio__row"><dt><span class="hz-prio__code">P3</span> <span class="hz-prio__name"><?php echo esc_html( hozen_facilities_t( 'prio3_n' ) ); ?></span></dt><dd><?php echo esc_html( hozen_facilities_t( 'prio3_t' ) ); ?></dd></div><div class="hz-prio__row"><dt><span class="hz-prio__code">P4</span> <span class="hz-prio__name"><?php echo esc_html( hozen_facilities_t( 'prio4_n' ) ); ?></span></dt><dd><?php echo esc_html( hozen_facilities_t( 'prio4_t' ) ); ?></dd></div></dl>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-co__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-co__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/c1-desk.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_c1' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
