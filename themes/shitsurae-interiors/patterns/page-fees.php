<?php
/**
 * Title: Page: fees
 * Slug: shitsurae-interiors/page-fees
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Fees page: two columns on what each package covers, the six-item fee table at full width with a right-aligned price column that stacks on phones, and the notes on deduction and works at cost.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p06-marlow-worktable.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'fees_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_fees' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'fees_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_fees_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_fees_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group si-twocol"><!-- wp:group {"className":"si-twocol__c sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-twocol__c sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'fees_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'fees_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-twocol__c sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-twocol__c sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'fees_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'fees_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:table {"className":"si-fees"} -->
<figure class="wp-block-table si-fees"><table><thead><tr><th><?php echo esc_html( shitsurae_interiors_t( 'fee_h_item' ) ); ?></th><th><?php echo esc_html( shitsurae_interiors_t( 'fee_h_inc' ) ); ?></th><th><?php echo esc_html( shitsurae_interiors_t( 'fee_h_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( shitsurae_interiors_t( 'fee_1_i' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_1_d' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shitsurae_interiors_t( 'fee_2_i' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_2_d' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shitsurae_interiors_t( 'fee_3_i' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_3_d' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shitsurae_interiors_t( 'fee_4_i' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_4_d' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shitsurae_interiors_t( 'fee_5_i' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_5_d' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( shitsurae_interiors_t( 'fee_6_i' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_6_d' ) ); ?></td><td><?php echo esc_html( shitsurae_interiors_t( 'fee_6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"si-fees__note"} -->
<p class="si-fees__note"><?php echo esc_html( shitsurae_interiors_t( 'fee_note_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-fees__note"} -->
<p class="si-fees__note"><?php echo esc_html( shitsurae_interiors_t( 'fee_note_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--end"><!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/consultation/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_consult' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
