<?php
/**
 * Title: Page: prices and dates
 * Slug: nohara-park/page-prices
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Prices and dates: ledger of the three season dates, the full eight-row price list, arrival and departure times.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 'g1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_G1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'prices_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'prices_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'prices_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-ledgersec np-ledgersec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-ledgersec np-ledgersec--in"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'prices_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger sp-stagger"><!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_d_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'prices_c1_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_d_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'prices_c2_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_d_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'prices_c3_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_lead2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight np-prices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight np-prices"><!-- wp:group {"className":"np-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap"><!-- wp:group {"className":"np-headrule","layout":{"type":"default"}} -->
<div class="wp-block-group np-headrule"><!-- wp:heading {"className":"np-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'prices_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"np-pricelist","layout":{"type":"default"}} -->
<div class="wp-block-group np-pricelist"><!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_1_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_1_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_2_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_2_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_3_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_3_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
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
<!-- /wp:group -->

<!-- wp:group {"className":"np-price","layout":{"type":"default"}} -->
<div class="wp-block-group np-price"><!-- wp:paragraph {"className":"np-price__i"} -->
<p class="np-price__i"><?php echo esc_html( nohara_park_t( 'pr_8_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__u"} -->
<p class="np-price__u"><?php echo esc_html( nohara_park_t( 'pr_8_u' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-price__p"} -->
<p class="np-price__p"><?php echo esc_html( nohara_park_t( 'pr_8_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-note"} -->
<p class="np-note"><?php echo esc_html( nohara_park_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap"><!-- wp:group {"className":"np-headrule","layout":{"type":"default"}} -->
<div class="wp-block-group np-headrule"><!-- wp:heading {"className":"np-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'times_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-timeslist","layout":{"type":"default"}} -->
<div class="wp-block-group np-timeslist"><!-- wp:group {"className":"np-times np-times--head","layout":{"type":"default"}} -->
<div class="wp-block-group np-times np-times--head"><!-- wp:paragraph {"className":"np-times__i"} -->
<p class="np-times__i"><?php echo esc_html( nohara_park_t( 'times_col1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__a"} -->
<p class="np-times__a"><?php echo esc_html( nohara_park_t( 'times_col2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__d"} -->
<p class="np-times__d"><?php echo esc_html( nohara_park_t( 'times_col3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-times","layout":{"type":"default"}} -->
<div class="wp-block-group np-times"><!-- wp:paragraph {"className":"np-times__i"} -->
<p class="np-times__i"><?php echo esc_html( nohara_park_t( 'times_1_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__a"} -->
<p class="np-times__a"><?php echo esc_html( nohara_park_t( 'times_1_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__d"} -->
<p class="np-times__d"><?php echo esc_html( nohara_park_t( 'times_1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-times","layout":{"type":"default"}} -->
<div class="wp-block-group np-times"><!-- wp:paragraph {"className":"np-times__i"} -->
<p class="np-times__i"><?php echo esc_html( nohara_park_t( 'times_2_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__a"} -->
<p class="np-times__a"><?php echo esc_html( nohara_park_t( 'times_2_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__d"} -->
<p class="np-times__d"><?php echo esc_html( nohara_park_t( 'times_2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-times","layout":{"type":"default"}} -->
<div class="wp-block-group np-times"><!-- wp:paragraph {"className":"np-times__i"} -->
<p class="np-times__i"><?php echo esc_html( nohara_park_t( 'times_3_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__a"} -->
<p class="np-times__a"><?php echo esc_html( nohara_park_t( 'times_3_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__d"} -->
<p class="np-times__d"><?php echo esc_html( nohara_park_t( 'times_3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-times","layout":{"type":"default"}} -->
<div class="wp-block-group np-times"><!-- wp:paragraph {"className":"np-times__i"} -->
<p class="np-times__i"><?php echo esc_html( nohara_park_t( 'times_4_i' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__a"} -->
<p class="np-times__a"><?php echo esc_html( nohara_park_t( 'times_4_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-times__d"} -->
<p class="np-times__d"><?php echo esc_html( nohara_park_t( 'times_4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-duos","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-duos"><!-- wp:group {"className":"np-duo","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-duo__pic"} -->
<figure class="wp-block-image size-full np-duo__pic"><img src="<?php echo nohara_park_img( 'b1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_B1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-duo__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo__txt"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'prices_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'prices_s3_p2' ) ); ?></p>
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
