<?php
/**
 * Title: Home: hero
 * Slug: yukisaki-route/front-hero
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Full-bleed dimmed dawn-yard photograph with a drawn red route line, a two-line headline, three sub lines, the chevron-tail CTA and a frosted three-cell info bar.
 */
?>
<!-- wp:group {"className":"yr-hero sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-hero sp-parallax">
<!-- wp:html -->
<div class="sp-parallax__layer yr-hero__layer"><div class="yr-hero__plate"><img src="<?php echo yukisaki_route_img( 'p01-yard-dawn.webp' ); ?>" alt="<?php echo esc_attr( yukisaki_route_t( 'alt_P01' ) ); ?>" fetchpriority="high" decoding="async"/><span class="yr-hero__shade" aria-hidden="true"></span><svg class="yr-route" viewBox="0 0 1600 1000" aria-hidden="true" focusable="false"><path class="yr-route__line" pathLength="1" d="M1156 722C1110 712 1075 700 1044 691C1010 683 988 662 958 646C928 630 905 618 884 608" fill="none" stroke="#E6172C" stroke-width="2.4" stroke-linecap="round"/><g class="yr-route__stop" style="animation-delay:.85s"><circle cx="1044" cy="691" r="22" fill="#fff" fill-opacity=".18"/><circle cx="1044" cy="691" r="5" fill="#fff"/><circle cx="1044" cy="691" r="3" fill="#E6172C"/></g><g class="yr-route__stop" style="animation-delay:1.45s"><circle cx="958" cy="646" r="22" fill="#fff" fill-opacity=".18"/><circle cx="958" cy="646" r="5" fill="#fff"/><circle cx="958" cy="646" r="3" fill="#E6172C"/></g><g class="yr-route__stop" style="animation-delay:2s"><circle cx="884" cy="608" r="22" fill="#fff" fill-opacity=".18"/><circle cx="884" cy="608" r="5" fill="#fff"/><circle cx="884" cy="608" r="3" fill="#E6172C"/></g></svg></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"yr-hero__fg","layout":{"type":"default"}} -->
<div class="wp-block-group yr-hero__fg">
<!-- wp:heading {"level":1,"className":"yr-hero__h1"} -->
<h1 class="wp-block-heading yr-hero__h1"><?php echo yukisaki_route_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-hero__sub"} -->
<p class="yr-hero__sub"><?php echo yukisaki_route_lines( 'hero_sub' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yr-btns yr-hero__cta"} -->
<div class="wp-block-buttons yr-btns yr-hero__cta"><!-- wp:button {"className":"is-style-yr-tail"} -->
<div class="wp-block-button is-style-yr-tail"><a class="wp-block-button__link wp-element-button" href="/trial/#start"><?php echo esc_html( yukisaki_route_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="yr-info"><div class="yr-info__cell"><strong><?php echo esc_html( yukisaki_route_t( 'info_v0' ) ); ?></strong><span><?php echo esc_html( yukisaki_route_t( 'info_l0' ) ); ?></span></div><div class="yr-info__cell"><strong><?php echo esc_html( yukisaki_route_t( 'info_v1' ) ); ?></strong><span><?php echo esc_html( yukisaki_route_t( 'info_l1' ) ); ?></span></div><div class="yr-info__cell"><strong><?php echo esc_html( yukisaki_route_t( 'info_v2' ) ); ?></strong><span><?php echo esc_html( yukisaki_route_t( 'info_l2' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
