<?php
/**
 * Title: Page: lodges
 * Slug: nohara-park/page-lodges
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Lodges: ledger of 10 / 4 / all year, inside a lodge, short breaks, lodge prices and the Book a lodge pill.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 's2' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_S2' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'lodges_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'lodges_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'lodges_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_lodge' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-ledgersec np-ledgersec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-ledgersec np-ledgersec--in"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'lodges_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger sp-stagger"><!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_l_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'lodges_c1_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_l_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'lodges_c2_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_l_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'lodges_c3_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-duos","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-duos"><!-- wp:group {"className":"np-duo","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-duo__pic"} -->
<figure class="wp-block-image size-full np-duo__pic"><img src="<?php echo nohara_park_img( 'l1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_L1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-duo__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo__txt"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_lead2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-prices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-prices"><!-- wp:group {"className":"np-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap"><!-- wp:group {"className":"np-headrule","layout":{"type":"default"}} -->
<div class="wp-block-group np-headrule"><!-- wp:heading {"className":"np-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'lodges_prices_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"np-h3"} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'lodges_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-pricelist","layout":{"type":"default"}} -->
<div class="wp-block-group np-pricelist"><!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_4_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_4_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_5_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_5_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_5_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_6_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_6_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_6_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_7_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_7_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_7_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-note"} -->
<p class="np-note"><?php echo esc_html( nohara_park_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-cta-row","layout":{"type":"default"}} -->
<div class="wp-block-group np-cta-row"><!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'pr_dates' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-duos","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-duos"><!-- wp:group {"className":"np-duo np-duo--flip","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo np-duo--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-duo__pic"} -->
<figure class="wp-block-image size-full np-duo__pic"><img src="<?php echo nohara_park_img( 'f1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_F1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-duo__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo__txt"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'lodges_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'lodges_s3_p2' ) ); ?></p>
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
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_lodge' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
