<?php
/**
 * Title: Page: Your plan
 * Slug: hisui-clinic/page-your-plan
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Your plan page: mini window, calendar band and tabs, five-part ledger, parallax morning photograph, count-up figures and the between-visits line.
 */
?>
<!-- wp:group {"className":"hc-window hc-window--mini sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--mini sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'M2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_M2' ) ); ?>" width="1568" height="330" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span><nav class="hc-index" aria-label="<?php echo esc_attr( hisui_clinic_t( 'idx_page' ) ); ?>"><ul><li><a href="<?php echo esc_url( home_url( '/your-plan/#s1' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_ix1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/your-plan/#s3' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_ix2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/your-plan/#s4' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_ix3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-band","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-band"><!-- wp:group {"className":"hc-wrap hc-wrap--mid hc-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid hc-band__in"><!-- wp:html -->
<span class="hc-medal"><?php echo hisui_clinic_icon( 'calendar' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-band__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hc-band__txt"><!-- wp:paragraph {"className":"hc-band__label"} -->
<p class="hc-band__label"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-band__title"} -->
<h2 class="wp-block-heading hc-band__title"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_band' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--cond","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-sec hc-sec--cond"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:html -->
<ul class="hc-tabs"><li><a href="#s1"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_tab1' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="#s2"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_tab2' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="#s3"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_tab3' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li><li><a href="#s4"><span><?php echo esc_html( hisui_clinic_t( 'p_your-plan_tab4' ) ); ?></span><svg class="hc-chev" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M2 4.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s1","align":"full","layout":{"type":"default"}} -->
<div id="s1" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-ledger-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-ledger-wrap"><!-- wp:group {"className":"hc-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-ledger"><!-- wp:details {"className":"hc-row","showContent":true} -->
<details class="wp-block-details hc-row" open><summary><span class="hc-num">01</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_1_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_1_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">02</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_2_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_2_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">03</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_3_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_3_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">04</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_4_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_4_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"hc-row"} -->
<details class="wp-block-details hc-row"><summary><span class="hc-num">05</span><span class="hc-row__h"><?php echo esc_html( hisui_clinic_t( 'met_5_h' ) ); ?></span></summary><!-- wp:paragraph -->
<p><?php echo esc_html( hisui_clinic_t( 'met_5_p' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s2","align":"full","layout":{"type":"default"}} -->
<div id="s2" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-inter sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-inter sp-parallax"><!-- wp:html -->
<figure class="hc-inter__pic"><img src="<?php echo hisui_clinic_img( 'M1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_M1' ) ); ?>" width="1800" height="700" decoding="async" loading="lazy"/></figure><div class="hc-inter__plate"><p><?php echo esc_html( hisui_clinic_t( 'p_your-plan_inter' ) ); ?></p></div>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s3","align":"full","layout":{"type":"default"}} -->
<div id="s3" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-read","layout":{"type":"default"}} -->
<div class="wp-block-group hc-read"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-figwrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-figwrap"><!-- wp:group {"className":"hc-figs","layout":{"type":"default"}} -->
<div class="wp-block-group hc-figs"><!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig"><!-- wp:paragraph {"className":"hc-fig__n sp-reveal sp-count"} -->
<p class="hc-fig__n sp-reveal sp-count">60</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo esc_html( hisui_clinic_t( 'fig_1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig"><!-- wp:paragraph {"className":"hc-fig__n sp-reveal sp-count"} -->
<p class="hc-fig__n sp-reveal sp-count">7</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo esc_html( hisui_clinic_t( 'fig_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig"><!-- wp:paragraph {"className":"hc-fig__n sp-reveal sp-count"} -->
<p class="hc-fig__n sp-reveal sp-count">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo esc_html( hisui_clinic_t( 'fig_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-fig","layout":{"type":"default"}} -->
<div class="wp-block-group hc-fig"><!-- wp:paragraph {"className":"hc-fig__n sp-reveal sp-count"} -->
<p class="hc-fig__n sp-reveal sp-count">1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fig__l"} -->
<p class="hc-fig__l"><?php echo esc_html( hisui_clinic_t( 'fig_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s4","align":"full","layout":{"type":"default"}} -->
<div id="s4" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split"><!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s4_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_your-plan_s4_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-fee__note"} -->
<p class="hc-fee__note"><?php echo esc_html( hisui_clinic_t( 'ft_emerg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'N1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_N1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
