<?php
/**
 * Title: Page: Diabetes
 * Slug: hisui-clinic/page-diabetes
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Diabetes page: mini window, department band with droplet medallion, ruled anchor tabs and four care sections.
 */
?>
<!-- wp:group {"className":"hc-window hc-window--mini sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--mini sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'C1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_C1' ) ); ?>" width="1568" height="330" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span><nav class="hc-index" aria-label="<?php echo esc_attr( hisui_clinic_t( 'idx_page' ) ); ?>"><ul><li><a href="<?php echo esc_url( home_url( '/diabetes/#s1' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_ix1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/diabetes/#s2' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_ix2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/diabetes/#s4' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_ix3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-band","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-band"><!-- wp:group {"className":"hc-wrap hc-wrap--mid hc-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid hc-band__in"><!-- wp:html -->
<span class="hc-medal"><?php echo hisui_clinic_icon( 'droplet' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-band__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hc-band__txt"><!-- wp:paragraph {"className":"hc-band__label"} -->
<p class="hc-band__label"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-band__title"} -->
<h2 class="wp-block-heading hc-band__title"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_band' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--cond","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--cond"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:html -->
<ul class="hc-tabs"><li><a href="#s1"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_tab1' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="#s2"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_tab2' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="#s3"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_tab3' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="#s4"><span><?php echo esc_html( hisui_clinic_t( 'p_diabetes_tab4' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s1","align":"full","layout":{"type":"default"}} -->
<div id="s1" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s2","align":"full","layout":{"type":"default"}} -->
<div id="s2" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split"><!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'P1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_P1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s3","align":"full","layout":{"type":"default"}} -->
<div id="s3" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s4","align":"full","layout":{"type":"default"}} -->
<div id="s4" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split hc-split--flip","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'S2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s4_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_s4_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'p_diabetes_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
