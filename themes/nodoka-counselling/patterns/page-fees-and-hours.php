<?php
/**
 * Title: Page: fees-and-hours
 * Slug: nodoka-counselling/page-fees-and-hours
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Inner page fees-and-hours (compact split hero, ruled openers, quiet rows).
 */
?>
<!-- wp:group {"className":"nc-hero nc-hero--page","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-hero nc-hero--page"><!-- wp:group {"className":"nc-hero__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__wrap"><!-- wp:group {"className":"nc-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__stage"><!-- wp:group {"className":"nc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-hero__fig"} -->
<figure class="wp-block-image size-full nc-hero__fig"><img fetchpriority="high" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-clock-shelf.webp' ) ); ?>" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-hero__pt","layout":{"type":"default"}} -->
<div class="wp-block-group nc-hero__pt"><!-- wp:paragraph {"className":"nc-hero__eye"} -->
<p class="nc-hero__eye"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_85' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nc-hero__title"} -->
<h1 class="wp-block-heading nc-hero__title"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_86' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:html -->
<nav class="nc-tabs" aria-label="Ways to begin"><a class="nc-tab" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab1' ) ); ?></a><a class="nc-tab" href="mailto:<?php echo esc_attr( nodoka_counselling_t( 'foot_email' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab2' ) ); ?></a><a class="nc-tab" href="<?php echo esc_url( home_url( '/online-sessions/' ) ); ?>"><?php echo esc_html( nodoka_counselling_t( 'tab3' ) ); ?></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="nc-hero__rule" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in nc-in--first nc-fee nc-fee--page","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"fees"} -->
<section id="fees" class="wp-block-group alignfull nc-sec nc-in nc-in--first nc-fee nc-fee--page"><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_87' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_88' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_89' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<table class="nc-fees"><tbody><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n1' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d1' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p1' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n2' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d2' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p2' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n3' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d3' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p3' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n4' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d4' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p4' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n5' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d5' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p5' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n6' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d6' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p6' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'fee_n7' ) ); ?></th><td class="nc-fees__d"><?php echo esc_html( nodoka_counselling_t( 'fee_d7' ) ); ?></td><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'fee_p7' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:group {"className":"nc-fee__foot nc-fee__foot--one","layout":{"type":"default"}} -->
<div class="wp-block-group nc-fee__foot nc-fee__foot--one"><!-- wp:group {"className":"nc-fee__c","layout":{"type":"default"}} -->
<div class="wp-block-group nc-fee__c"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_90' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nc-fee__t"} -->
<p class="nc-fee__t"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_91' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in ","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in "><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-open","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open"><!-- wp:group {"className":"nc-open__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-open__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"nc-open__title"} -->
<h2 class="wp-block-heading nc-open__title"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_92' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nc-open__sub"} -->
<p class="nc-open__sub"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_93' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"nc-open__lead sp-reveal sp-reveal--up"} -->
<p class="nc-open__lead sp-reveal sp-reveal--up"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_94' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<table class="nc-fees nc-fees--hours"><tbody><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_95' ) ); ?></th><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_96' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_97' ) ); ?></th><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_98' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_99' ) ); ?></th><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_100' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_101' ) ); ?></th><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_102' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_103' ) ); ?></th><td class="nc-fees__p"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_104' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-sec nc-in ","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull nc-sec nc-in "><!-- wp:group {"className":"nc-inner","layout":{"type":"default"}} -->
<div class="wp-block-group nc-inner"><!-- wp:group {"className":"nc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group nc-rows"><!-- wp:group {"className":"nc-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"nc-row__l","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__l"><!-- wp:heading {"level":3,"className":"nc-row__h"} -->
<h3 class="wp-block-heading nc-row__h"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_105' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"nc-row__r","layout":{"type":"default"}} -->
<div class="wp-block-group nc-row__r"><!-- wp:paragraph {"className":"nc-row__p"} -->
<p class="nc-row__p"><?php echo esc_html( nodoka_counselling_t( 'ip_fees_106' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->