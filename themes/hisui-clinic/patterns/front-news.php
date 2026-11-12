<?php
/**
 * Title: Home: news and notices with audience-tagged rows
 * Slug: hisui-clinic/front-news
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: A 360px filter column (active row tinted with a deep edge, legend, block button) beside dated rows with outline pills and audience icons.
 */
?>
<!-- wp:group {"className":"hc-sec hc-sec--news","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--news"><!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-news"><!-- wp:group {"className":"hc-news__side","layout":{"type":"default"}} -->
<div class="wp-block-group hc-news__side"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'new_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<nav class="hc-filter" aria-label="<?php echo esc_attr( hisui_clinic_t( 'new_h2' ) ); ?>"><ul><li class="is-active"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" aria-current="true"><span><?php echo esc_html( hisui_clinic_t( 'new_f1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/category/clinic-news/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/category/visits/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/category/for-referring-clinicians/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f4' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/category/hours/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f5' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul>
<p class="hc-legend"><span><i class="is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i><?php echo esc_html( hisui_clinic_t( 'new_leg1' ) ); ?></span><span><i class="is-cl"><?php echo hisui_clinic_icon( 'steth' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i><?php echo esc_html( hisui_clinic_t( 'new_leg2' ) ); ?></span></p></nav>
<!-- /wp:html -->

<!-- wp:buttons {"className":"hc-news__btn"} -->
<div class="wp-block-buttons hc-news__btn"><!-- wp:button {"className":"hc-block"} -->
<div class="wp-block-button hc-block"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hc-nrows sp-stagger"><div class="hc-nrow sp-reveal sp-reveal--up"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'new_1_d' ) ); ?></span><a class="hc-tagpill" href="<?php echo esc_url( home_url( '/category/visits/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_1_c' ) ); ?></a></p><p class="hc-nrow__t"><a href="<?php echo esc_url( home_url( '/first-consultation-what-to-bring/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_1_t' ) ); ?></a></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow sp-reveal sp-reveal--up"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'new_2_d' ) ); ?></span><a class="hc-tagpill" href="<?php echo esc_url( home_url( '/category/visits/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_2_c' ) ); ?></a></p><p class="hc-nrow__t"><a href="<?php echo esc_url( home_url( '/fasting-blood-tests/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_2_t' ) ); ?></a></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow sp-reveal sp-reveal--up"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'new_3_d' ) ); ?></span><a class="hc-tagpill" href="<?php echo esc_url( home_url( '/category/clinic-news/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_3_c' ) ); ?></a></p><p class="hc-nrow__t"><a href="<?php echo esc_url( home_url( '/sensor-start-saturdays/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_3_t' ) ); ?></a></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow sp-reveal sp-reveal--up"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'new_4_d' ) ); ?></span><a class="hc-tagpill" href="<?php echo esc_url( home_url( '/category/for-referring-clinicians/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_4_c' ) ); ?></a></p><p class="hc-nrow__t"><a href="<?php echo esc_url( home_url( '/referral-pathways/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'new_4_t' ) ); ?></a></p></div><span class="hc-aud is-cl"><?php echo hisui_clinic_icon( 'steth' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
