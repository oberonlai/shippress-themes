<?php
/**
 * Title: Page: stays
 * Slug: nohara-park/page-stays
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Stays: split head, ledger of 36 / 16 / 14 under a straddling title, four caption-panel cards and the arrival notes.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 's1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_S1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'stays_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'stays_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'stays_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-ledgersec np-ledgersec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-ledgersec np-ledgersec--in"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'stays_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger sp-stagger"><!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_s_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'stays_c1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/pitches/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'led_1_l' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_s_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'stays_c2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/pitches/#grass' ) ); ?>"><?php echo esc_html( nohara_park_t( 'led_1_l' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_s_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'stays_c3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/lodges/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'led_2_l' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_lead2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-stays","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-stays"><!-- wp:group {"className":"np-wrap np-wrap--cards","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--cards"><!-- wp:group {"className":"np-headrule","layout":{"type":"default"}} -->
<div class="wp-block-group np-headrule"><!-- wp:heading {"className":"np-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'stays_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-cards sp-stagger np-cards--2","layout":{"type":"default"}} -->
<div class="wp-block-group np-cards sp-stagger np-cards--2"><!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 'p1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_P1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'card_1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'card_1_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="<?php echo esc_url( home_url( '/pitches/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'card_1_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 's3' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_S3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'card_3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'card_3_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="<?php echo esc_url( home_url( '/pitches/#grass' ) ); ?>"><?php echo esc_html( nohara_park_t( 'card_3_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 's2' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_S2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'card_2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'card_2_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="<?php echo esc_url( home_url( '/lodges/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'card_2_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-card sp-reveal sp-reveal--zoom","layout":{"type":"default"}} -->
<div class="wp-block-group np-card sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-card__pic"} -->
<figure class="wp-block-image size-full np-card__pic"><img src="<?php echo nohara_park_img( 'l1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_L1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__panel"><!-- wp:paragraph {"className":"np-badge"} -->
<p class="np-badge"><?php echo esc_html( nohara_park_t( 'card_4_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-card__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-card__txt"><!-- wp:paragraph {"className":"np-card__line"} -->
<p class="np-card__line"><?php echo esc_html( nohara_park_t( 'card_4_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"np-card__title"} -->
<h3 class="wp-block-heading np-card__title"><a href="<?php echo esc_url( home_url( '/lodges/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'card_4_t' ) ); ?></a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-splits","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-splits"><!-- wp:group {"className":"np-split","layout":{"type":"default"}} -->
<div class="wp-block-group np-split"><!-- wp:group {"className":"np-split__h","layout":{"type":"default"}} -->
<div class="wp-block-group np-split__h"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'stays_s3_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-split__b","layout":{"type":"default"}} -->
<div class="wp-block-group np-split__b"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'stays_s3_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'stays_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--close"><!-- wp:group {"className":"np-wrap np-closing","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-closing"><!-- wp:heading {"className":"np-closing__h"} -->
<h2 class="wp-block-heading np-closing__h"><?php echo esc_html( nohara_park_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
