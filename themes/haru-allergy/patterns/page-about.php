<?php
/**
 * Title: Page: About: the clinic
 * Slug: haru-allergy/page-about
 * Categories: haru-allergy
 * Keywords: page-about
 * Viewport Width: 1440
 * Description: Inner page: About: the clinic.
 */
?>
<!-- wp:group {"className":"ha-kv ha-kv--page ha-head","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-kv ha-kv--page ha-head"><!-- wp:cover {"url":"<?php echo haru_allergy_img( 'p16-reception' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":70,"minHeightUnit":"svh","className":"ha-kv__stage sp-parallax"} -->
<div class="wp-block-cover ha-kv__stage sp-parallax" style="min-height:70svh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p16' ) ); ?>" src="<?php echo haru_allergy_img( 'p16-reception' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"ha-head__kicker"} -->
<p class="ha-head__kicker"><?php echo esc_html( haru_allergy_t( 'head_kicker' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"ha-kv__veil ha-kv__veil--page","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ha-kv__veil ha-kv__veil--page"><!-- wp:group {"className":"ha-kv__veil-in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-kv__veil-in"><!-- wp:heading {"level":1,"className":"ha-head__title"} -->
<h1 class="wp-block-heading ha-head__title"><?php echo haru_allergy_lines( 'h_about' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ha-poem sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-poem sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'ab_i1' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo haru_allergy_lines( 'ab_i2' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-problem ha-problem--page","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-problem ha-problem--page"><!-- wp:group {"className":"ha-problem__row1","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__row1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__a"} -->
<figure class="wp-block-image size-full ha-problem__a"><img src="<?php echo haru_allergy_img( 'p01-skin-prick' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"ha-problem__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-problem__h sp-reveal sp-reveal--mask"><?php echo haru_allergy_lines( 'ab_edge' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__b"} -->
<figure class="wp-block-image size-full ha-problem__b"><img src="<?php echo haru_allergy_img( 'p05-history' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-problem__row2","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__row2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ha-problem__c"} -->
<figure class="wp-block-image size-full ha-problem__c"><img src="<?php echo haru_allergy_img( 'p04-curtain' ); ?>" alt="<?php echo esc_attr( haru_allergy_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ha-problem__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-problem__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'ab_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'ab_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'ab_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-prose ha-prose--team","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-prose ha-prose--team"><!-- wp:group {"className":"ha-prose__in ha-prose__in--wide","layout":{"type":"default"}} -->
<div class="wp-block-group ha-prose__in ha-prose__in--wide"><!-- wp:heading {"level":2,"className":"ha-prose__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-prose__h sp-reveal sp-reveal--mask"><?php echo esc_html( haru_allergy_t( 'ab_team_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'ab_team_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ha-people","layout":{"type":"default"}} -->
<div class="wp-block-group ha-people"><!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-person","layout":{"type":"default"}} -->
<div class="wp-block-group ha-person"><!-- wp:paragraph {"className":"ha-person__n"} -->
<p class="ha-person__n"><?php echo esc_html( haru_allergy_t( 'ab_n7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__r"} -->
<p class="ha-person__r"><?php echo esc_html( haru_allergy_t( 'ab_r7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ha-person__s"} -->
<p class="ha-person__s"><?php echo esc_html( haru_allergy_t( 'ab_s7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-prose","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-prose"><!-- wp:group {"className":"ha-prose__in","layout":{"type":"default"}} -->
<div class="wp-block-group ha-prose__in"><!-- wp:heading {"level":2,"className":"ha-prose__h sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading ha-prose__h sp-reveal sp-reveal--mask"><?php echo esc_html( haru_allergy_t( 'ab_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ha-prose__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ha-prose__body sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( haru_allergy_t( 'ab_p4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"ha-close","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ha-close"><!-- wp:paragraph {"className":"ha-close__line"} -->
<p class="ha-close__line"><a href="/contact/"><?php echo esc_html( haru_allergy_t( 'close_line' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
