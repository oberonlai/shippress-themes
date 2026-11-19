<?php
/**
 * Title: Page: studio
 * Slug: shitsurae-interiors/page-studio
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Studio page: the story since 2014, a case row of the studio itself, the seven people as ruled rows, the workshop and site team and a day in the studio.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p10-studio-desk.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'studio_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_studio' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:paragraph {"className":"si-lead2"} -->
<p class="si-lead2"><?php echo esc_html( shitsurae_interiors_t( 'studio_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'studio_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'studio_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:group {"className":"si-case","layout":{"type":"default"}} -->
<div class="wp-block-group si-case"><!-- wp:group {"className":"si-case__title","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__title"><!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'arrow', 'si-arrow' ); ?>
<!-- /wp:html -->

<!-- wp:heading {"level":3,"className":"si-case__name"} -->
<h3 class="wp-block-heading si-case__name"><?php echo esc_html( shitsurae_interiors_t( 'studio_row_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-case__meta"} -->
<p class="si-case__meta"><span class="si-chip"><?php echo esc_html( shitsurae_interiors_t( 'kind_studio' ) ); ?></span><span class="si-case__date"><?php echo esc_html( shitsurae_interiors_t( 'studio_row_date' ) ); ?></span></p>
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
<figure class="wp-block-image size-full si-ph si-ph--w sp-reveal sp-reveal--up"><img src="<?php echo shitsurae_interiors_img( 'p01-marlow-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"si-case__cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-case__cap sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"si-case__num"} -->
<p class="si-case__num">3 2 <span>1</span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__list"} -->
<p class="si-case__list"><?php echo shitsurae_interiors_lines( 'studio_row_cap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__result"} -->
<p class="si-case__result"><?php echo esc_html( shitsurae_interiors_t( 'studio_row_result' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-case__brief"} -->
<p class="si-case__brief"><?php echo esc_html( shitsurae_interiors_t( 'brief_label' ) ); ?> <?php echo esc_html( shitsurae_interiors_t( 'studio_row_brief' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"si-rule","backgroundColor":"ink","opacity":"css"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background si-rule"/>
<!-- /wp:separator --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner"><!-- wp:group {"className":"si-word sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group si-word sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"si-word__h"} -->
<h2 class="wp-block-heading si-word__h"><?php echo esc_html( shitsurae_interiors_t( 'w_people_pg' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-word__sub"} -->
<p class="si-word__sub"><?php echo esc_html( shitsurae_interiors_t( 'sub_people_pg' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-people sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group si-people sp-stagger"><!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_1_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_1_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_2_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_2_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_3_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_3_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_4_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_4_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_4_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_5_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_5_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_5_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_6_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_6_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_6_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-pp sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-pp sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-pp__n"} -->
<h3 class="wp-block-heading si-pp__n"><?php echo esc_html( shitsurae_interiors_t( 'pp_7_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-pp__r"} -->
<p class="si-pp__r"><?php echo esc_html( shitsurae_interiors_t( 'pp_7_r' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-pp__s"} -->
<p class="si-pp__s"><?php echo esc_html( shitsurae_interiors_t( 'pp_7_s' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"si-sec si-inner si-inner--txt","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull si-sec si-inner si-inner--txt"><!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'studio_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'studio_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-txt sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group si-txt sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"si-txt__h"} -->
<h3 class="wp-block-heading si-txt__h"><?php echo esc_html( shitsurae_interiors_t( 'studio_day_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"si-txt__p"} -->
<p class="si-txt__p"><?php echo esc_html( shitsurae_interiors_t( 'studio_day' ) ); ?></p>
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
