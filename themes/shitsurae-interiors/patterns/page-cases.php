<?php
/**
 * Title: Page: cases
 * Slug: shitsurae-interiors/page-cases
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Cases page: caption-strip hero, four results-first case rows with three photographs of different sizes, the numerals 3 2 1, budgets and briefs, then the notes on how the numbers are kept.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p01-marlow-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'cases_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_cases' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'cases_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_cases_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_cases_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case","layout":{"type":"default"}} -->
<div class="wp-block-group si-case"><!-- wp:group {"className":"si-case__title","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__title"><!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'arrow', 'si-arrow' ); ?>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"si-case__name"} -->
<h3 class="wp-block-heading si-case__name"><?php echo esc_html( shitsurae_interiors_t( 'case_a_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-case__meta"} -->
<p class="si-case__meta"><span class="si-chip"><?php echo esc_html( shitsurae_interiors_t( 'kind_flat' ) ); ?></span><span class="si-case__date"><?php echo esc_html( shitsurae_interiors_t( 'case_a_date' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case__photos sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__photos sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--n sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--n sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p04-marlow-hall.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--m sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--m sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p05-marlow-kitchen.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--w sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--w sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p06-marlow-worktable.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"si-case__cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__cap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-case__num"} -->
<p class="si-case__num">3 2 <span>1</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__list"} -->
<p class="si-case__list"><?php echo shitsurae_interiors_lines( 'case_a_cap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__result"} -->
<p class="si-case__result"><?php echo esc_html( shitsurae_interiors_t( 'case_a_result' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__brief"} -->
<p class="si-case__brief"><?php echo esc_html( shitsurae_interiors_t( 'brief_label' ) ); ?> <?php echo esc_html( shitsurae_interiors_t( 'case_a_brief' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__note"} -->
<p class="si-case__note"><a href="<?php echo esc_url( home_url( '/desks-that-disappear-by-seven/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_note' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case","layout":{"type":"default"}} -->
<div class="wp-block-group si-case"><!-- wp:group {"className":"si-case__title","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__title"><!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'arrow', 'si-arrow' ); ?>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"si-case__name"} -->
<h3 class="wp-block-heading si-case__name"><?php echo esc_html( shitsurae_interiors_t( 'case_b_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-case__meta"} -->
<p class="si-case__meta"><span class="si-chip"><?php echo esc_html( shitsurae_interiors_t( 'kind_shop' ) ); ?></span><span class="si-case__date"><?php echo esc_html( shitsurae_interiors_t( 'case_b_date' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case__photos sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__photos sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--n sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--n sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p17-oak-joinery.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--m sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--m sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p13-fenn-shopfront.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--w sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--w sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p02-fenn-bakery.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"si-case__cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__cap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-case__num"} -->
<p class="si-case__num">3 2 <span>1</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__list"} -->
<p class="si-case__list"><?php echo shitsurae_interiors_lines( 'case_b_cap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__result"} -->
<p class="si-case__result"><?php echo esc_html( shitsurae_interiors_t( 'case_b_result' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__brief"} -->
<p class="si-case__brief"><?php echo esc_html( shitsurae_interiors_t( 'brief_label' ) ); ?> <?php echo esc_html( shitsurae_interiors_t( 'case_b_brief' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__note"} -->
<p class="si-case__note"><a href="<?php echo esc_url( home_url( '/baking-in-view/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_note' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case","layout":{"type":"default"}} -->
<div class="wp-block-group si-case"><!-- wp:group {"className":"si-case__title","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__title"><!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'arrow', 'si-arrow' ); ?>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"si-case__name"} -->
<h3 class="wp-block-heading si-case__name"><?php echo esc_html( shitsurae_interiors_t( 'case_c_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-case__meta"} -->
<p class="si-case__meta"><span class="si-chip"><?php echo esc_html( shitsurae_interiors_t( 'kind_flat' ) ); ?></span><span class="si-case__date"><?php echo esc_html( shitsurae_interiors_t( 'case_c_date' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case__photos sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__photos sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--n sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--n sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p16-linen-samples.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--m sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--m sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p03-hollin-bedroom.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--w sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--w sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p11-hollin-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"si-case__cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__cap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-case__num"} -->
<p class="si-case__num">3 2 <span>1</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__list"} -->
<p class="si-case__list"><?php echo shitsurae_interiors_lines( 'case_c_cap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__result"} -->
<p class="si-case__result"><?php echo esc_html( shitsurae_interiors_t( 'case_c_result' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__brief"} -->
<p class="si-case__brief"><?php echo esc_html( shitsurae_interiors_t( 'brief_label' ) ); ?> <?php echo esc_html( shitsurae_interiors_t( 'case_c_brief' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case","layout":{"type":"default"}} -->
<div class="wp-block-group si-case"><!-- wp:group {"className":"si-case__title","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__title"><!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'arrow', 'si-arrow' ); ?>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"si-case__name"} -->
<h3 class="wp-block-heading si-case__name"><?php echo esc_html( shitsurae_interiors_t( 'case_d_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-case__meta"} -->
<p class="si-case__meta"><span class="si-chip"><?php echo esc_html( shitsurae_interiors_t( 'kind_shop' ) ); ?></span><span class="si-case__date"><?php echo esc_html( shitsurae_interiors_t( 'case_d_date' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case__photos sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__photos sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--n sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--n sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p07-weir-ladder.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--m sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--m sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p08-weir-cafe.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--w sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--w sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p09-weir-reading.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"si-case__cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__cap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-case__num"} -->
<p class="si-case__num">3 2 <span>1</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__list"} -->
<p class="si-case__list"><?php echo shitsurae_interiors_lines( 'case_d_cap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__result"} -->
<p class="si-case__result"><?php echo esc_html( shitsurae_interiors_t( 'case_d_result' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__brief"} -->
<p class="si-case__brief"><?php echo esc_html( shitsurae_interiors_t( 'brief_label' ) ); ?> <?php echo esc_html( shitsurae_interiors_t( 'case_d_brief' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--txt","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--txt"><!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'cases_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'cases_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'cases_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'cases_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'cases_s3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'cases_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--end","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--end"><!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/consultation/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_consult' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
