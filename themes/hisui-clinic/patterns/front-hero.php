<?php
/**
 * Title: Home: rule-split photo window
 * Slug: hisui-clinic/front-hero
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Full-bleed high-key photograph cut by one white rule, a frosted three-row index of conditions on it, a thin tracked caption, then a white half with the headline and lead.
 */
?>
<!-- wp:group {"className":"hc-window sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'H1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_H1' ) ); ?>" width="1568" height="672" decoding="async" fetchpriority="high"/></figure>
<span class="hc-window__rule" aria-hidden="true"></span>
<nav class="hc-index" aria-label="<?php echo esc_attr( hisui_clinic_t( 'idx_label' ) ); ?>"><ul><li><a href="<?php echo esc_url( home_url( '/diabetes/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'idx_1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/thyroid-pituitary/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'idx_2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/hormones/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'idx_3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul></nav>
<p class="hc-window__caption"><?php echo esc_html( hisui_clinic_t( 'hero_caption' ) ); ?></p>
<p class="hc-window__scroll" aria-hidden="true"><span><?php echo esc_html( hisui_clinic_t( 'hero_scroll' ) ); ?></span><i></i></p>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-lead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-lead"><!-- wp:group {"className":"hc-wrap hc-lead__in","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-lead__in"><!-- wp:group {"className":"hc-lead__h","layout":{"type":"default"}} -->
<div class="wp-block-group hc-lead__h"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-lead__side","layout":{"type":"default"}} -->
<div class="wp-block-group hc-lead__side"><!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/your-plan/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
