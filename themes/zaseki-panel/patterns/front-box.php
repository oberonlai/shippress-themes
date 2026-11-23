<?php
/**
 * Title: Home: what is in the box
 * Slug: zaseki-panel/front-box
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: Coloured tile directory: a wide photo tile, four flat tiles, a grey strip, a photo card and four link rows.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"box","className":"zp-sec zp-box","layout":{"type":"default"}} -->
<section id="box" class="wp-block-group zp-sec zp-box">
<!-- wp:group {"className":"zp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'box_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2"} -->
<h2 class="wp-block-heading zp-h2"><?php echo esc_html( zaseki_panel_t( 'box_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"zp-box__cols","layout":{"type":"default"}} -->
<div class="wp-block-group zp-box__cols">
<!-- wp:group {"className":"zp-tiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tiles sp-stagger">
<!-- wp:group {"className":"zp-tilewrap zp-tilewrap--wide zp-sw-a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-tilewrap--wide zp-sw-a sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-tile__bg"} -->
<figure class="wp-block-image size-full zp-tile__bg"><img src="<?php echo zaseki_panel_img( 'box-contents.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_x1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'box_x_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'box_x_o' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/panel/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'box_x_t' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-tiles__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tiles__grid sp-stagger">
<!-- wp:group {"className":"zp-tilewrap zp-sw-a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-sw-a sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--russet","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--russet">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'box_t1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'box_o1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/panel/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'box_t1' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-tilewrap zp-sw-b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-sw-b sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--sage","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--sage">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'box_t2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'box_o2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/panel/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'box_t2' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-tilewrap zp-sw-a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-sw-a sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--clay","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--clay">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'box_t3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'box_o3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/install/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'box_t3' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-tilewrap zp-sw-b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-sw-b sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--sand","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--sand">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'box_t4' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'box_o4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/install/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'box_t4' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-tilewrap zp-tilewrap--strip zp-sw-b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-tilewrap--strip zp-sw-b sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--strip","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--strip">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'box_s_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'box_s_o' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/panel/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'box_s_t' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-box__side","layout":{"type":"default"}} -->
<div class="wp-block-group zp-box__side">
<!-- wp:group {"className":"zp-card","layout":{"type":"default"}} -->
<div class="wp-block-group zp-card">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-card__img"} -->
<figure class="wp-block-image size-full zp-card__img"><img src="<?php echo zaseki_panel_img( 'tag-fit.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_x2' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"zp-card__t"} -->
<h3 class="wp-block-heading zp-card__t"><?php echo esc_html( zaseki_panel_t( 'box_c_t' ) ); ?></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-lrows","layout":{"type":"default"}} -->
<div class="wp-block-group zp-lrows">
<!-- wp:paragraph {"className":"zp-lrow"} -->
<p class="zp-lrow"><a href="/panel/"><?php echo esc_html( zaseki_panel_t( 'lr1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-lrow"} -->
<p class="zp-lrow"><a href="/install/"><?php echo esc_html( zaseki_panel_t( 'lr2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-lrow"} -->
<p class="zp-lrow"><a href="/pricing/"><?php echo esc_html( zaseki_panel_t( 'lr3' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-lrow"} -->
<p class="zp-lrow"><a href="/questions/"><?php echo esc_html( zaseki_panel_t( 'lr4' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
