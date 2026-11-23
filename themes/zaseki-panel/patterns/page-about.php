<?php
/**
 * Title: Page: About
 * Slug: zaseki-panel/page-about
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The about page: founding, the five staff as list rows, workshop band, a day and visits.
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
<h1 class="wp-block-heading zp-phead__h1"><?php echo esc_html( zaseki_panel_t( 'pg_about_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-phead__lede"} -->
<p class="zp-phead__lede"><?php echo esc_html( zaseki_panel_t( 'pg_about_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-phead__img"} -->
<figure class="wp-block-image size-full zp-phead__img"><img src="<?php echo zaseki_panel_img( 'team-table.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_a1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-about1","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-about1">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'about_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'about_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'about_b1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-team","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-team">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'about_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'about_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'about_b2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-staff sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group zp-staff sp-stagger">
<!-- wp:group {"className":"zp-staff__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-staff__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-staff__n"} -->
<p class="zp-staff__n"><?php echo esc_html( zaseki_panel_t( 'staff1_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__r"} -->
<p class="zp-staff__r"><?php echo esc_html( zaseki_panel_t( 'staff1_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__l"} -->
<p class="zp-staff__l"><?php echo esc_html( zaseki_panel_t( 'staff1_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-staff__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-staff__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-staff__n"} -->
<p class="zp-staff__n"><?php echo esc_html( zaseki_panel_t( 'staff2_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__r"} -->
<p class="zp-staff__r"><?php echo esc_html( zaseki_panel_t( 'staff2_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__l"} -->
<p class="zp-staff__l"><?php echo esc_html( zaseki_panel_t( 'staff2_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-staff__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-staff__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-staff__n"} -->
<p class="zp-staff__n"><?php echo esc_html( zaseki_panel_t( 'staff3_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__r"} -->
<p class="zp-staff__r"><?php echo esc_html( zaseki_panel_t( 'staff3_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__l"} -->
<p class="zp-staff__l"><?php echo esc_html( zaseki_panel_t( 'staff3_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-staff__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-staff__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-staff__n"} -->
<p class="zp-staff__n"><?php echo esc_html( zaseki_panel_t( 'staff4_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__r"} -->
<p class="zp-staff__r"><?php echo esc_html( zaseki_panel_t( 'staff4_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__l"} -->
<p class="zp-staff__l"><?php echo esc_html( zaseki_panel_t( 'staff4_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-staff__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group zp-staff__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"zp-staff__n"} -->
<p class="zp-staff__n"><?php echo esc_html( zaseki_panel_t( 'staff5_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__r"} -->
<p class="zp-staff__r"><?php echo esc_html( zaseki_panel_t( 'staff5_r' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-staff__l"} -->
<p class="zp-staff__l"><?php echo esc_html( zaseki_panel_t( 'staff5_l' ) ); ?></p>
<!-- /wp:paragraph -->
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
<figure class="wp-block-image size-full zp-band__img"><img src="<?php echo zaseki_panel_img( 'workshop.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_w1' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"zp-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group zp-band__card">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'about_band_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-band__p"} -->
<p class="zp-band__p"><?php echo esc_html( zaseki_panel_t( 'about_band_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-day","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-day">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'about_l3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'about_h3' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'about_b3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-visit","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-visit">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'about_l4' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'about_h4' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'about_b4_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-arrow"} -->
<p class="zp-arrow"><a href="/contact/"><?php echo esc_html( zaseki_panel_t( 'about_contact_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
