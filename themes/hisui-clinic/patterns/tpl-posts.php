<?php
/**
 * Title: Template: news list
 * Slug: hisui-clinic/tpl-posts
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: News list: slim window, audience-tagged filter column and dated rows.
 * Inserter: no
 */
?>
<!-- wp:group {"className":"hc-window hc-window--slim sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--slim sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'M1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_M1' ) ); ?>" width="1568" height="220" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'tpl_news' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_news_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-news","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-news"><!-- wp:group {"className":"hc-news__side","layout":{"type":"default"}} -->
<div class="wp-block-group hc-news__side"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'new_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<nav class="hc-filter" aria-label="<?php echo esc_attr( hisui_clinic_t( 'new_h2' ) ); ?>"><ul><li class="hc-f-all"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class="hc-f-clinic-news"><a href="<?php echo esc_url( home_url( '/category/clinic-news/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class="hc-f-visits"><a href="<?php echo esc_url( home_url( '/category/visits/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class="hc-f-for-referring-clinicians"><a href="<?php echo esc_url( home_url( '/category/for-referring-clinicians/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f4' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li class="hc-f-hours"><a href="<?php echo esc_url( home_url( '/category/hours/' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'new_f5' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul><p class="hc-legend"><span><i class="is-pt"><?php echo hisui_clinic_icon( 'person' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i><?php echo esc_html( hisui_clinic_t( 'new_leg1' ) ); ?></span><span><i class="is-cl"><?php echo hisui_clinic_icon( 'steth' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></i><?php echo esc_html( hisui_clinic_t( 'new_leg2' ) ); ?></span></p></nav>
<!-- /wp:html -->

<!-- wp:buttons {"className":"hc-news__btn"} -->
<div class="wp-block-buttons hc-news__btn"><!-- wp:button {"className":"hc-block"} -->
<div class="wp-block-button hc-block"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'vis_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-news__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-news__main"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hc-posts"} -->
<div class="wp-block-query hc-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hc-postrow","layout":{"type":"default"}} -->
<div class="wp-block-group hc-postrow"><!-- wp:group {"className":"hc-postrow__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hc-postrow__meta"><!-- wp:post-date {"className":"hc-date"} /--><!-- wp:post-terms {"term":"category","className":"hc-pill-tag"} /--></div>
<!-- /wp:group --><!-- wp:post-title {"level":2,"isLink":true,"className":"hc-postrow__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'tpl_none' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:heading {"level":2,"className":"hc-h2 hc-h2--note"} -->
<h2 class="wp-block-heading hc-h2 hc-h2--note"><?php echo esc_html( hisui_clinic_t( 'p_news_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_news_s1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-h2 hc-h2--note"} -->
<h2 class="wp-block-heading hc-h2 hc-h2--note"><?php echo esc_html( hisui_clinic_t( 'p_news_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_news_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
