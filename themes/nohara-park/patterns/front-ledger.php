<?php
/**
 * Title: Home: three ways to stay (ledger)
 * Slug: nohara-park/front-ledger
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Pale band with the section title straddling its lower edge, then three equal columns split by 1px ink hairlines: figure, dash, serif title; the third column is faded.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-ledgersec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-ledgersec"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'led_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-ledger sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger sp-stagger"><!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_1_fig' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'led_1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/pitches/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'led_1_l' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_2_fig' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'led_2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/lodges/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'led_2_l' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__col sp-reveal sp-reveal--down np-ledger__col--faded"><!-- wp:group {"className":"np-ledger__in","layout":{"type":"default"}} -->
<div class="wp-block-group np-ledger__in"><!-- wp:paragraph {"className":"np-fig"} -->
<p class="np-fig"><?php echo esc_html( nohara_park_t( 'led_3_fig' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="np-dash" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"np-lt"} -->
<p class="np-lt"><?php echo esc_html( nohara_park_t( 'led_3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/out-of-season/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'led_3_l' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-ledger__intro"} -->
<p class="np-ledger__intro"><?php echo esc_html( nohara_park_t( 'led_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
