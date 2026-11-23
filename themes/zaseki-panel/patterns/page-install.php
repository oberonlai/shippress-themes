<?php
/**
 * Title: Page: Install
 * Slug: zaseki-panel/page-install
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The install page: the three install steps, survey band, install table, building tiles and care plan.
 */
?>
<!-- wp:group {"className":"zp-phead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-phead">
<!-- wp:group {"className":"zp-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__panel">
<!-- wp:group {"className":"zp-phead__grid zp-wipe sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__grid zp-wipe sp-reveal sp-reveal--wipe">
<!-- wp:html -->
<div class="zp-gridwrap" aria-hidden="true"><svg class="zp-grid" viewBox="0 0 768 512" preserveAspectRatio="xMidYMid slice" focusable="false"><rect x="133" y="133" width="118" height="118" fill="#C3D3C6"/><rect x="261" y="133" width="118" height="118" fill="#D9B3A4"/><rect x="389" y="261" width="118" height="118" fill="#CFCBC1"/><g stroke="#8C5648" stroke-width="10" fill="none"><path d="M0 0V512"/><path d="M128 0V512"/><path d="M256 0V512"/><path d="M384 0V512"/><path d="M512 0V512"/><path d="M640 0V512"/><path d="M768 0V512"/><path d="M0 0H768"/><path d="M0 128H768"/><path d="M0 256H768"/><path d="M0 384H768"/><path d="M0 512H768"/></g></svg></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__text">
<!-- wp:heading {"level":1,"className":"zp-phead__h1"} -->
<h1 class="wp-block-heading zp-phead__h1"><?php echo esc_html( zaseki_panel_t( 'pg_install_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-phead__lede"} -->
<p class="zp-phead__lede"><?php echo esc_html( zaseki_panel_t( 'pg_install_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-phead__img"} -->
<figure class="wp-block-image size-full zp-phead__img"><img src="<?php echo zaseki_panel_img( 'install-mount.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_i1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-hold","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-hold">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'install_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-rows sp-stagger">
<!-- wp:group {"className":"zp-row sp-reveal sp-reveal--up zp-row--text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-row sp-reveal sp-reveal--up zp-row--text">
<!-- wp:paragraph {"className":"zp-row__n"} -->
<p class="zp-row__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-row__t","layout":{"type":"default"}} -->
<div class="wp-block-group zp-row__t">
<!-- wp:heading {"level":3,"className":"zp-row__h"} -->
<h3 class="wp-block-heading zp-row__h"><?php echo esc_html( zaseki_panel_t( 'install_h1' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'install_b1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-row sp-reveal sp-reveal--up zp-row--text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-row sp-reveal sp-reveal--up zp-row--text">
<!-- wp:paragraph {"className":"zp-row__n"} -->
<p class="zp-row__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-row__t","layout":{"type":"default"}} -->
<div class="wp-block-group zp-row__t">
<!-- wp:heading {"level":3,"className":"zp-row__h"} -->
<h3 class="wp-block-heading zp-row__h"><?php echo esc_html( zaseki_panel_t( 'install_h2' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'install_b2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-row sp-reveal sp-reveal--up zp-row--text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-row sp-reveal sp-reveal--up zp-row--text">
<!-- wp:paragraph {"className":"zp-row__n"} -->
<p class="zp-row__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-row__t","layout":{"type":"default"}} -->
<div class="wp-block-group zp-row__t">
<!-- wp:heading {"level":3,"className":"zp-row__h"} -->
<h3 class="wp-block-heading zp-row__h"><?php echo esc_html( zaseki_panel_t( 'install_h3' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'install_b3_p1' ) ); ?></p>
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
<!-- wp:group {"className":"zp-band zp-band--inner sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-band zp-band--inner sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-band__img"} -->
<figure class="wp-block-image size-full zp-band__img"><img src="<?php echo zaseki_panel_img( 'survey.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"zp-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group zp-band__card">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'install_band_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-band__p"} -->
<p class="zp-band__p"><?php echo esc_html( zaseki_panel_t( 'install_band_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-includes","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-includes">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'install_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'install_t2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"zp-wipe sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wipe sp-reveal sp-reveal--wipe">
<!-- wp:table {"className":"zp-table zp-table--install"} -->
<figure class="wp-block-table zp-table zp-table--install"><table><thead><tr><th><?php echo esc_html( zaseki_panel_t( 'th_item' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_inc' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_when' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( zaseki_panel_t( 'ins_i1' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_d1' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_w1' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'ins_i2' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_d2' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_w2' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'ins_i3' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_d3' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_w3' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'ins_i4' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_d4' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_w4' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'ins_i5' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_d5' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'ins_w5' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-provides","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-provides">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'install_l3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'install_h4' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'install_b4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-ptiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-ptiles sp-stagger">
<!-- wp:group {"className":"zp-tilewrap zp-sw-a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-sw-a sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--russet","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--russet">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'it1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'it1_o' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/panel/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'it1_t' ) ); ?></span></a></p>
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
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'it2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'it2_o' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/panel/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'it2_t' ) ); ?></span></a></p>
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
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'it3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'it3_o' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/questions/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'it3_t' ) ); ?></span></a></p>
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
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'it4_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'it4_o' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/contact/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'it4_t' ) ); ?></span></a></p>
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
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-care","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-care">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'install_l4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'install_h5' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'install_b5_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-arrow"} -->
<p class="zp-arrow"><a href="/pricing/"><?php echo esc_html( zaseki_panel_t( 'install_price_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
