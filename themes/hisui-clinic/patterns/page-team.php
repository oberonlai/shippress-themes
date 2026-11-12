<?php
/**
 * Title: Page: Team
 * Slug: hisui-clinic/page-team
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Team page: mini window, audience-tagged filter column and seven people as dated-row style rows.
 */
?>
<!-- wp:group {"className":"hc-window hc-window--mini sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--mini sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'TM' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_TM' ) ); ?>" width="1568" height="330" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span><nav class="hc-index" aria-label="<?php echo esc_attr( hisui_clinic_t( 'idx_page' ) ); ?>"><ul><li><a href="<?php echo esc_url( home_url( '/team/#s1' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_ix1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/team/#s2' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_ix2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/team/#s3' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_ix3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'p_team_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_team_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-news","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-news"><!-- wp:group {"className":"hc-news__side","layout":{"type":"default"}} -->
<div class="wp-block-group hc-news__side"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_team_side' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<nav class="hc-filter" aria-label="<?php echo esc_attr( hisui_clinic_t( 'p_team_side' ) ); ?>"><ul><li class="is-active"><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_f1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class=""><a href="<?php echo esc_url( home_url( '/team/#s1' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_f2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class=""><a href="<?php echo esc_url( home_url( '/team/#s2' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_f3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class=""><a href="<?php echo esc_url( home_url( '/team/#s3' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_f4' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class=""><a href="<?php echo esc_url( home_url( '/team/#s3' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_team_f5' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul><p class="hc-legend"><span><i class="is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i><?php echo esc_html( hisui_clinic_t( 'new_leg1' ) ); ?></span><span><i class="is-cl"><?php echo hisui_clinic_icon( 'steth' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i><?php echo esc_html( hisui_clinic_t( 'new_leg2' ) ); ?></span></p></nav>
<!-- /wp:html -->

<!-- wp:buttons {"className":"hc-news__btn"} -->
<div class="wp-block-buttons hc-news__btn"><!-- wp:button {"className":"hc-block"} -->
<div class="wp-block-button hc-block"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'vis_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-news__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-news__main"><!-- wp:group {"className":"hc-teamsec sp-reveal sp-reveal--up","anchor":"s1","layout":{"type":"default"}} -->
<div id="s1" class="wp-block-group hc-teamsec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_team_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_team_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="hc-nrows"><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p1_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p1_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p1_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p2_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p2_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p2_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p3_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p3_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p3_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-teamsec sp-reveal sp-reveal--up","anchor":"s2","layout":{"type":"default"}} -->
<div id="s2" class="wp-block-group hc-teamsec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_team_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_team_s2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic hc-teampic"} -->
<figure class="wp-block-image size-full hc-split__pic hc-teampic"><img src="<?php echo hisui_clinic_img( 'N1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_N1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="hc-nrows"><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p4_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p4_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p4_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p5_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p5_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p5_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-teamsec sp-reveal sp-reveal--up","anchor":"s3","layout":{"type":"default"}} -->
<div id="s3" class="wp-block-group hc-teamsec sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_team_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_team_s3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic hc-teampic"} -->
<figure class="wp-block-image size-full hc-split__pic hc-teampic"><img src="<?php echo hisui_clinic_img( 'P1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_P1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="hc-nrows"><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p6_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p6_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p6_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div><div class="hc-nrow"><div class="hc-nrow__body"><p class="hc-nrow__meta"><span class="hc-date"><?php echo esc_html( hisui_clinic_t( 'p_team_p7_n' ) ); ?></span><span class="hc-tagpill"><?php echo esc_html( hisui_clinic_t( 'p_team_p7_r' ) ); ?></span></p><p class="hc-nrow__t"><?php echo esc_html( hisui_clinic_t( 'p_team_p7_l' ) ); ?></p></div><span class="hc-aud is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
