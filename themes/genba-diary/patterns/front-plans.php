<?php
/**
 * Title: Home: plans table
 * Slug: genba-diary/front-plans
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Grey band with label, heading, a six-row plans table (stacked on phones) and the request button.
 */
?>
<!-- wp:group {"className":"gd-plans","layout":{"type":"default"},"tagName":"section","anchor":"plans","align":"full"} -->
<section id="plans" class="wp-block-group alignfull gd-plans"><!-- wp:group {"className":"gd-wide","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wide"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_plans' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'plans_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"gd-table"} -->
<figure class="wp-block-table gd-table"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( genba_diary_t( 'th1' ) ); ?></th><th><?php echo esc_html( genba_diary_t( 'th2' ) ); ?></th><th><?php echo esc_html( genba_diary_t( 'th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( genba_diary_t( 'p1_n' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p1_i' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p1_c' ) ); ?></td></tr><tr><td><?php echo esc_html( genba_diary_t( 'p2_n' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p2_i' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p2_c' ) ); ?></td></tr><tr><td><?php echo esc_html( genba_diary_t( 'p3_n' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p3_i' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p3_c' ) ); ?></td></tr><tr><td><?php echo esc_html( genba_diary_t( 'p4_n' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p4_i' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p4_c' ) ); ?></td></tr><tr><td><?php echo esc_html( genba_diary_t( 'p5_n' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p5_i' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p5_c' ) ); ?></td></tr><tr><td><?php echo esc_html( genba_diary_t( 'p6_n' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p6_i' ) ); ?></td><td><?php echo esc_html( genba_diary_t( 'p6_c' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"gd-plans__note"} -->
<p class="gd-plans__note"><?php echo esc_html( genba_diary_t( 'plans_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"gd-cta-wrap"} -->
<div class="wp-block-buttons gd-cta-wrap"><!-- wp:button {"className":"gd-cta"} -->
<div class="wp-block-button gd-cta"><a class="wp-block-button__link wp-element-button" href="/request/"><?php echo esc_html( genba_diary_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
