<?php
/**
 * Title: Page: Stories
 * Slug: hisui-clinic/page-stories
 * Categories: hisui-clinic
 * Viewport Width: 1440
 * Description: Stories page: mini window and four patient stories with photographs, each under a two-tone heading rule.
 */
?>
<!-- wp:group {"className":"hc-window hc-window--mini sp-parallax","align":"full","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-window hc-window--mini sp-parallax"><!-- wp:html -->
<figure class="hc-window__pic"><img src="<?php echo hisui_clinic_img( 'D1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_D1' ) ); ?>" width="1568" height="330" decoding="async" fetchpriority="high"/></figure><span class="hc-window__rule" aria-hidden="true"></span><nav class="hc-index" aria-label="<?php echo esc_attr( hisui_clinic_t( 'idx_page' ) ); ?>"><ul><li><a href="<?php echo esc_url( home_url( '/stories/#s1' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_stories_ix1' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/stories/#s3' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_stories_ix2' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li><li><a href="<?php echo esc_url( home_url( '/stories/#s4' ) ); ?>"><span><?php echo esc_html( hisui_clinic_t( 'p_stories_ix3' ) ); ?></span><?php echo hisui_clinic_icon( 'arrow' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></li></ul></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-pagehead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:heading {"level":1,"className":"hc-h1"} -->
<h1 class="wp-block-heading hc-h1"><?php echo esc_html( hisui_clinic_t( 'p_stories_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-lead__p"} -->
<p class="hc-lead__p"><?php echo esc_html( hisui_clinic_t( 'p_stories_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s1","align":"full","layout":{"type":"default"}} -->
<div id="s1" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split hc-split--story","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--story"><!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_stories_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_stories_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'S1' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s2","align":"full","layout":{"type":"default"}} -->
<div id="s2" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split hc-split--story hc-split--flip","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--story hc-split--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'S2' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_stories_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_stories_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s3","align":"full","layout":{"type":"default"}} -->
<div id="s3" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split hc-split--story","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--story"><!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_stories_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_stories_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'S3' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"s4","align":"full","layout":{"type":"default"}} -->
<div id="s4" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:group {"className":"hc-secbody sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-secbody sp-reveal sp-reveal--up"><!-- wp:group {"className":"hc-split hc-split--story hc-split--flip","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split hc-split--story hc-split--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-split__pic"} -->
<figure class="wp-block-image size-full hc-split__pic"><img src="<?php echo hisui_clinic_img( 'S4' ); ?>" alt="<?php echo esc_attr( hisui_clinic_t( 'alt_S4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hc-split__t","layout":{"type":"default"}} -->
<div class="wp-block-group hc-split__t"><!-- wp:heading {"level":2,"className":"hc-h2"} -->
<h2 class="wp-block-heading hc-h2"><?php echo esc_html( hisui_clinic_t( 'p_stories_s4_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-prose"} -->
<p class="hc-prose"><?php echo esc_html( hisui_clinic_t( 'p_stories_s4_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-sec hc-sec--page","anchor":"more","align":"full","layout":{"type":"default"}} -->
<div id="more" class="wp-block-group alignfull hc-sec hc-sec--page"><!-- wp:group {"className":"hc-wrap hc-wrap--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap hc-wrap--mid"><!-- wp:paragraph {"className":"hc-textlink"} -->
<p class="hc-textlink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'p_stories_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
