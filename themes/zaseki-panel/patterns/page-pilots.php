<?php
/**
 * Title: Page: Pilot notes
 * Slug: zaseki-panel/page-pilots
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The pilot notes page: three pilot stories, each beside a photograph.
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
<h1 class="wp-block-heading zp-phead__h1"><?php echo esc_html( zaseki_panel_t( 'pg_pilots_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-phead__lede"} -->
<p class="zp-phead__lede"><?php echo esc_html( zaseki_panel_t( 'pg_pilots_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-phead__img"} -->
<figure class="wp-block-image size-full zp-phead__img"><img src="<?php echo zaseki_panel_img( 'pilot-quayside.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_l1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"quayside","className":"zp-sec zp-psec zp-story","layout":{"type":"default"}} -->
<section id="quayside" class="wp-block-group zp-sec zp-psec zp-story">
<!-- wp:group {"className":"zp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap">
<!-- wp:group {"className":"zp-split","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split">
<!-- wp:group {"className":"zp-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'floor-in-use.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_b1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split__text">
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pilots_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pilots_b1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"lindenhof","className":"zp-sec zp-psec zp-story","layout":{"type":"default"}} -->
<section id="lindenhof" class="wp-block-group zp-sec zp-psec zp-story">
<!-- wp:group {"className":"zp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap">
<!-- wp:group {"className":"zp-split zp-split--flip","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split zp-split--flip">
<!-- wp:group {"className":"zp-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'pilot-lindenhof.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_l2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split__text">
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pilots_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pilots_b2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"oriel","className":"zp-sec zp-psec zp-story","layout":{"type":"default"}} -->
<section id="oriel" class="wp-block-group zp-sec zp-psec zp-story">
<!-- wp:group {"className":"zp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap">
<!-- wp:group {"className":"zp-split","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split">
<!-- wp:group {"className":"zp-split__img","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split__img">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'pilot-oriel.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_l3' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-split__text">
<!-- wp:heading {"level":2,"className":"zp-h2 zp-h2--sub"} -->
<h2 class="wp-block-heading zp-h2 zp-h2--sub"><?php echo esc_html( zaseki_panel_t( 'pilots_h3' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'pilots_b3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
