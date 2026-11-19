<?php
/**
 * Title: Page: process
 * Slug: shitsurae-interiors/page-process
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Process page: the five survey-to-handover steps as ruled rows with who and what you get, a case row for a project in progress, then the two stage texts.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p18-survey.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p18' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'process_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_process' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'process_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_process_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_process_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-prows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-prows sp-stagger"><!-- wp:group {"className":"si-prow si-prow--long sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow si-prow--long sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-prow__n"} -->
<p class="si-prow__n"><?php echo esc_html( shitsurae_interiors_t( 'pr_1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"si-prow__t"} -->
<h3 class="wp-block-heading si-prow__t"><?php echo esc_html( shitsurae_interiors_t( 'pr_1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-prow__w"} -->
<p class="si-prow__w"><?php echo esc_html( shitsurae_interiors_t( 'pr_1_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-prow__d","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow__d"><!-- wp:paragraph {"className":"si-prow__line"} -->
<p class="si-prow__line"><?php echo esc_html( shitsurae_interiors_t( 'pr_1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_who' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_1_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_get' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_1_get' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-prow si-prow--long sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow si-prow--long sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-prow__n"} -->
<p class="si-prow__n"><?php echo esc_html( shitsurae_interiors_t( 'pr_2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"si-prow__t"} -->
<h3 class="wp-block-heading si-prow__t"><?php echo esc_html( shitsurae_interiors_t( 'pr_2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-prow__w"} -->
<p class="si-prow__w"><?php echo esc_html( shitsurae_interiors_t( 'pr_2_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-prow__d","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow__d"><!-- wp:paragraph {"className":"si-prow__line"} -->
<p class="si-prow__line"><?php echo esc_html( shitsurae_interiors_t( 'pr_2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_who' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_2_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_get' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_2_get' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-prow si-prow--long sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow si-prow--long sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-prow__n"} -->
<p class="si-prow__n"><?php echo esc_html( shitsurae_interiors_t( 'pr_3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"si-prow__t"} -->
<h3 class="wp-block-heading si-prow__t"><?php echo esc_html( shitsurae_interiors_t( 'pr_3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-prow__w"} -->
<p class="si-prow__w"><?php echo esc_html( shitsurae_interiors_t( 'pr_3_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-prow__d","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow__d"><!-- wp:paragraph {"className":"si-prow__line"} -->
<p class="si-prow__line"><?php echo esc_html( shitsurae_interiors_t( 'pr_3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_who' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_3_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_get' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_3_get' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-prow si-prow--long sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow si-prow--long sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-prow__n"} -->
<p class="si-prow__n"><?php echo esc_html( shitsurae_interiors_t( 'pr_4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"si-prow__t"} -->
<h3 class="wp-block-heading si-prow__t"><?php echo esc_html( shitsurae_interiors_t( 'pr_4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-prow__w"} -->
<p class="si-prow__w"><?php echo esc_html( shitsurae_interiors_t( 'pr_4_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-prow__d","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow__d"><!-- wp:paragraph {"className":"si-prow__line"} -->
<p class="si-prow__line"><?php echo esc_html( shitsurae_interiors_t( 'pr_4_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_who' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_4_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_get' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_4_get' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-prow si-prow--long sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow si-prow--long sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-prow__n"} -->
<p class="si-prow__n"><?php echo esc_html( shitsurae_interiors_t( 'pr_5_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"si-prow__t"} -->
<h3 class="wp-block-heading si-prow__t"><?php echo esc_html( shitsurae_interiors_t( 'pr_5_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-prow__w"} -->
<p class="si-prow__w"><?php echo esc_html( shitsurae_interiors_t( 'pr_5_w' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-prow__d","layout":{"type":"default"}} -->
<div class="wp-block-group si-prow__d"><!-- wp:paragraph {"className":"si-prow__line"} -->
<p class="si-prow__line"><?php echo esc_html( shitsurae_interiors_t( 'pr_5_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_who' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_5_who' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-prow__line si-prow__line--m"} -->
<p class="si-prow__line si-prow__line--m"><strong><?php echo esc_html( shitsurae_interiors_t( 'pr_get' ) ); ?></strong> <?php echo esc_html( shitsurae_interiors_t( 'pr_5_get' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:group {"className":"si-case","layout":{"type":"default"}} -->
<div class="wp-block-group si-case"><!-- wp:group {"className":"si-case__title","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__title"><!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'arrow', 'si-arrow' ); ?>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"si-case__name"} -->
<h3 class="wp-block-heading si-case__name"><?php echo esc_html( shitsurae_interiors_t( 'proc_row_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-case__meta"} -->
<p class="si-case__meta"><span class="si-chip"><?php echo esc_html( shitsurae_interiors_t( 'kind_site' ) ); ?></span><span class="si-case__date"><?php echo esc_html( shitsurae_interiors_t( 'proc_row_date' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-case__photos sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__photos sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--n sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--n sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p15-plaster-hands.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--m sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--m sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p16-linen-samples.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-ph si-ph--w sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full si-ph si-ph--w sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p01-marlow-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"si-case__cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__cap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-case__num"} -->
<p class="si-case__num">3 2 <span>1</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__list"} -->
<p class="si-case__list"><?php echo shitsurae_interiors_lines( 'proc_row_cap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__result"} -->
<p class="si-case__result"><?php echo esc_html( shitsurae_interiors_t( 'proc_row_result' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__brief"} -->
<p class="si-case__brief"><?php echo esc_html( shitsurae_interiors_t( 'brief_label' ) ); ?> <?php echo esc_html( shitsurae_interiors_t( 'proc_row_brief' ) ); ?></p>
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
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'process_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'process_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'process_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'process_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"si-lead2 si-lead2--close"} -->
<p class="si-lead2 si-lead2--close"><?php echo esc_html( shitsurae_interiors_t( 'proc_close' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-goto"} -->
<p class="si-goto"><a href="<?php echo esc_url( home_url( '/consultation/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'go_consult' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
