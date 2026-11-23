<?php
/**
 * Title: Page: Pre-order
 * Slug: zaseki-panel/page-pre-order
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The pre-order page: intro, what happens next tiles, price summary and the form slot with an email fallback.
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
<h1 class="wp-block-heading zp-phead__h1"><?php echo esc_html( zaseki_panel_t( 'pg_pre_order_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-phead__lede"} -->
<p class="zp-phead__lede"><?php echo esc_html( zaseki_panel_t( 'pg_pre_order_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-phead__img"} -->
<figure class="wp-block-image size-full zp-phead__img"><img src="<?php echo zaseki_panel_img( 'hero-reception-panel.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-pre-intro","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-pre-intro">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'pre_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pre_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pre_b1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-next","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-next">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'pre_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pre_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pre_b2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-ptiles sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-ptiles sp-stagger">
<!-- wp:group {"className":"zp-tilewrap zp-sw-a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tilewrap zp-sw-a sp-reveal sp-reveal--up">
<!-- wp:group {"className":"zp-tile zp-tile--russet","layout":{"type":"default"}} -->
<div class="wp-block-group zp-tile zp-tile--russet">
<!-- wp:heading {"level":3,"className":"zp-tile__t"} -->
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'pf1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'flow1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="#pre-form"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'pf1_t' ) ); ?></span></a></p>
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
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'pf2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'flow2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="#pre-form"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'pf2_t' ) ); ?></span></a></p>
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
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'pf3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'flow3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/install/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'pf3_t' ) ); ?></span></a></p>
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
<h3 class="wp-block-heading zp-tile__t"><?php echo esc_html( zaseki_panel_t( 'pf4_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-tile__o"} -->
<p class="zp-tile__o"><?php echo esc_html( zaseki_panel_t( 'flow4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-tile__f"} -->
<p class="zp-tile__f"><a href="/install/"><span class="screen-reader-text"><?php echo esc_html( zaseki_panel_t( 'pf4_t' ) ); ?></span></a></p>
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
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-price","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-price">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'pre_l3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pre_h3' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pre_b3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"zp-table zp-table--price"} -->
<figure class="wp-block-table zp-table zp-table--price"><table><thead><tr><th><?php echo esc_html( zaseki_panel_t( 'th_item' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_covers' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( zaseki_panel_t( 'pr_i1' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_d1' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_p1' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'pr_i2' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_d2' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_p2' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'pr_i3' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_d3' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_p3' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'pr_i4' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_d4' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_p4' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'pr_i5' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_d5' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( zaseki_panel_t( 'pr_i6' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_d6' ) ); ?></td><td><?php echo esc_html( zaseki_panel_t( 'pr_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"zp-note"} -->
<p class="zp-note"><?php echo esc_html( zaseki_panel_t( 'price_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"pre-form","className":"zp-sec zp-psec zp-form","layout":{"type":"default"}} -->
<section id="pre-form" class="wp-block-group zp-sec zp-psec zp-form">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'pre_l4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pre_h4' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pre_b4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group zp-formbox">
<?php ob_start(); ?>
<!-- wp:buttons {"className":"zp-cta"} -->
<div class="wp-block-buttons zp-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@zaseki-panel.example?subject=<?php echo rawurlencode( zaseki_panel_t( 'preorder_mail_subject' ) ); ?>"><?php echo esc_html( zaseki_panel_t( 'preorder_email_button' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"zp-note"} -->
<p class="zp-note"><?php echo esc_html( zaseki_panel_t( 'preorder_note' ) ); ?></p>
<!-- /wp:paragraph -->
<?php
$zp_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $zp_fallback ) );
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
