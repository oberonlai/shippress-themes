<?php
/**
 * Title: Home: crew cards
 * Slug: genba-diary/front-crews
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Description: Label, heading and three crew cards: micro-label, title above a 3:2 photograph, one line and a VIEW MORE dash link, with an edge tab.
 */
?>
<!-- wp:group {"className":"gd-crews gd-sec","layout":{"type":"default"},"tagName":"section","anchor":"crews","align":"full"} -->
<section id="crews" class="wp-block-group alignfull gd-crews gd-sec"><!-- wp:html -->
<span class="gd-tab" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo esc_html( genba_diary_t( 'l_crews' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"gd-h2"} -->
<h2 class="wp-block-heading gd-h2"><?php echo esc_html( genba_diary_t( 'crews_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gd-cards sp-stagger"><!-- wp:group {"className":"gd-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-micro"} -->
<p class="gd-micro"><?php echo esc_html( genba_diary_t( 'crew1_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'crew1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-card__img"} -->
<figure class="wp-block-image size-full gd-card__img"><img src="<?php echo genba_diary_img( 'g03-concrete-pour.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'crew1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/crews/#concrete"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-micro"} -->
<p class="gd-micro"><?php echo esc_html( genba_diary_t( 'crew2_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'crew2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-card__img"} -->
<figure class="wp-block-image size-full gd-card__img"><img src="<?php echo genba_diary_img( 'g04-ceiling-fitout.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'crew2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/crews/#fit-out"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group gd-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"gd-micro"} -->
<p class="gd-micro"><?php echo esc_html( genba_diary_t( 'crew3_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gd-card__t"} -->
<h3 class="wp-block-heading gd-card__t"><?php echo esc_html( genba_diary_t( 'crew3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gd-card__img"} -->
<figure class="wp-block-image size-full gd-card__img"><img src="<?php echo genba_diary_img( 'g05-roof-crew.webp' ); ?>" alt="<?php echo esc_attr( genba_diary_t( 'alt_g05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"gd-card__p"} -->
<p class="gd-card__p"><?php echo esc_html( genba_diary_t( 'crew3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-more"} -->
<p class="gd-more"><a href="/crews/#roofing"><?php echo esc_html( genba_diary_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gd-crews__note sp-reveal sp-reveal--up"} -->
<p class="gd-crews__note sp-reveal sp-reveal--up"><?php echo esc_html( genba_diary_t( 'crews_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
