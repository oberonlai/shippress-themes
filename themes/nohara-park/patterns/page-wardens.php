<?php
/**
 * Title: Page: the wardens
 * Slug: nohara-park/page-wardens
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: The wardens: a three-column ledger of the seven people, the team in words, and a note from the founder.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-phead"><!-- wp:group {"className":"np-phead__pic sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__pic sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-phead__img"} -->
<figure class="wp-block-image size-full np-phead__img"><img src="<?php echo nohara_park_img( 'tm' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_TM' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-phead__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-phead__txt"><!-- wp:paragraph {"className":"np-crumb"} -->
<p class="np-crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'ft_brand' ) ); ?></a> / <?php echo esc_html( nohara_park_t( 'wardens_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"np-h1"} -->
<h1 class="wp-block-heading np-h1"><?php echo esc_html( nohara_park_t( 'wardens_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-lead"} -->
<p class="np-lead"><?php echo esc_html( nohara_park_t( 'wardens_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-ledgersec np-ledgersec--in","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-ledgersec np-ledgersec--in"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'wardens_band' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-ledger sp-stagger np-ledger--people","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger sp-stagger np-ledger--people"><!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_1_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_2_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_3_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_4_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_5_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_5_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_6_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_6_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'ppl_7_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'ppl_7_r' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col np-ledger__col--empty","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col np-ledger__col--empty"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col np-ledger__col--empty","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col np-ledger__col--empty"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-duos","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-duos"><!-- wp:group {"className":"np-duo","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-duo__pic"} -->
<figure class="wp-block-image size-full np-duo__pic"><img src="<?php echo nohara_park_img( 'a1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_A1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-duo__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo__txt"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_lead2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'wardens_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_s1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_s1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-duos","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-duos"><!-- wp:group {"className":"np-duo np-duo--flip","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo np-duo--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-duo__pic"} -->
<figure class="wp-block-image size-full np-duo__pic"><img src="<?php echo nohara_park_img( 'n1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_N1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-duo__txt","layout":{"type":"default"}} -->
<div class="wp-block-group np-duo__txt"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'wardens_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_s2_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-splits","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-splits"><!-- wp:group {"className":"np-split","layout":{"type":"default"}} -->
<div class="wp-block-group np-split"><!-- wp:group {"className":"np-split__h","layout":{"type":"default"}} -->
<div class="wp-block-group np-split__h"><!-- wp:heading {"className":"np-h2 np-h2--l"} -->
<h2 class="wp-block-heading np-h2 np-h2--l"><?php echo esc_html( nohara_park_t( 'wardens_s3_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-split__b","layout":{"type":"default"}} -->
<div class="wp-block-group np-split__b"><!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'wardens_s3_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","className":"np-sec np-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-sec np-sec--tight"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:group {"className":"np-quote","layout":{"type":"default"}} -->
<div class="wp-block-group np-quote"><!-- wp:paragraph {"className":"np-quote__q"} -->
<p class="np-quote__q"><?php echo esc_html( nohara_park_t( 'wardens_note_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-quote__c"} -->
<p class="np-quote__c"><?php echo esc_html( nohara_park_t( 'wardens_note_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
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
