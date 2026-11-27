<?php
/**
 * Title: Home: hero, booking bar and lens band
 * Slug: makido-shutters/front-pin
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Diagonal-split hero (photo left, radial slate panel right, seam hairline, booking pill) pinned while the lens band with the quote figures slides over it.
 */
?>
<!-- wp:group {"align":"full","className":"mk-pin","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-pin">
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"mk-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull mk-hero">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mk-hero__photo"} -->
<figure class="wp-block-image size-full mk-hero__photo"><img src="<?php echo makido_shutters_img( 'img-01.webp' ); ?>" alt="<?php echo makido_shutters_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="mk-hero__panel" aria-hidden="true"></div>
<svg class="mk-hero__seam" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true" focusable="false"><line x1="54.3" y1="100" x2="62.3" y2="0" stroke="#000000" stroke-width="1" vector-effect="non-scaling-stroke" opacity=".15"/><line x1="54" y1="100" x2="62" y2="0" stroke="#FFFFFF" stroke-width="2" vector-effect="non-scaling-stroke" opacity=".9"/></svg>
<!-- /wp:html -->
<!-- wp:group {"className":"mk-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group mk-hero__text">
<!-- wp:paragraph {"className":"mk-hero__eyebrow"} -->
<p class="mk-hero__eyebrow"><?php echo esc_html( makido_shutters_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"mk-hero__h1"} -->
<h1 class="wp-block-heading mk-hero__h1"><?php echo esc_html( makido_shutters_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-hero__lead"} -->
<p class="mk-hero__lead"><?php echo esc_html( makido_shutters_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-hero__link"} -->
<p class="mk-hero__link"><a href="#quote"><?php echo esc_html( makido_shutters_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="mk-book"><div class="mk-book__fact"><span class="mk-book__k"><?php echo esc_html( makido_shutters_t( 'bk_k1' ) ); ?></span><span class="mk-book__v"><?php echo esc_html( makido_shutters_t( 'bk_v1' ) ); ?></span></div><div class="mk-book__fact"><span class="mk-book__k"><?php echo esc_html( makido_shutters_t( 'bk_k2' ) ); ?></span><span class="mk-book__v"><?php echo esc_html( makido_shutters_t( 'bk_v2' ) ); ?></span></div><a class="mk-pill mk-book__cta" href="/contact/"><span><?php echo esc_html( makido_shutters_t( 'cta_book' ) ); ?></span></a></div>
<a class="mk-hero__skip" href="#quote" aria-label="<?php echo makido_shutters_a( 'hero_skip' ); ?>"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 6l5 5 5-5"/></svg></a>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"quote","align":"full","className":"mk-lens","layout":{"type":"default"}} -->
<section id="quote" class="wp-block-group alignfull mk-lens">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:heading {"level":2,"textAlign":"center","className":"mk-h2 mk-h2--light"} -->
<h2 class="wp-block-heading has-text-align-center mk-h2 mk-h2--light"><?php echo esc_html( makido_shutters_t( 'q_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-lens__stmt"} -->
<p class="mk-lens__stmt"><?php echo esc_html( makido_shutters_t( 'q_stmt' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-lens__sub"} -->
<p class="mk-lens__sub"><?php echo esc_html( makido_shutters_t( 'q_sub' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-lens__p"} -->
<p class="mk-lens__p"><?php echo esc_html( makido_shutters_t( 'q_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"mk-lens__photos","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__photos">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mk-lens__ph"} -->
<figure class="wp-block-image size-full mk-lens__ph"><img src="<?php echo makido_shutters_img( 'img-02.webp' ); ?>" alt="<?php echo makido_shutters_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mk-lens__ph"} -->
<figure class="wp-block-image size-full mk-lens__ph"><img src="<?php echo makido_shutters_img( 'img-03.webp' ); ?>" alt="<?php echo makido_shutters_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mk-lens__ph"} -->
<figure class="wp-block-image size-full mk-lens__ph"><img src="<?php echo makido_shutters_img( 'img-04.webp' ); ?>" alt="<?php echo makido_shutters_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"mk-cta"} -->
<div class="wp-block-buttons mk-cta"><!-- wp:button {"className":"mk-pill"} -->
<div class="wp-block-button mk-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( makido_shutters_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:heading {"level":2,"textAlign":"center","className":"mk-h2 mk-h2--light mk-h2--figs"} -->
<h2 class="wp-block-heading has-text-align-center mk-h2 mk-h2--light mk-h2--figs"><?php echo esc_html( makido_shutters_t( 'q_h2' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"mk-figs","layout":{"type":"default"}} -->
<div class="wp-block-group mk-figs">
<!-- wp:group {"className":"mk-fig","layout":{"type":"default"}} -->
<div class="wp-block-group mk-fig">
<!-- wp:paragraph {"className":"mk-fig__l"} -->
<p class="mk-fig__l"><?php echo esc_html( makido_shutters_t( 'fig1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-fig__n sp-reveal sp-reveal--up sp-count"} -->
<p class="mk-fig__n sp-reveal sp-reveal--up sp-count">45 <span class="mk-fig__u"><?php echo esc_html( makido_shutters_t( 'fig1_u' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-fig","layout":{"type":"default"}} -->
<div class="wp-block-group mk-fig">
<!-- wp:paragraph {"className":"mk-fig__l"} -->
<p class="mk-fig__l"><?php echo esc_html( makido_shutters_t( 'fig2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-fig__n sp-reveal sp-reveal--up sp-count"} -->
<p class="mk-fig__n sp-reveal sp-reveal--up sp-count">3 <span class="mk-fig__u"><?php echo esc_html( makido_shutters_t( 'fig2_u' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"mk-fig","layout":{"type":"default"}} -->
<div class="wp-block-group mk-fig">
<!-- wp:paragraph {"className":"mk-fig__l"} -->
<p class="mk-fig__l"><?php echo esc_html( makido_shutters_t( 'fig3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-fig__n sp-reveal sp-reveal--up sp-count"} -->
<p class="mk-fig__n sp-reveal sp-reveal--up sp-count">1 <span class="mk-fig__u"><?php echo esc_html( makido_shutters_t( 'fig3_u' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mk-lens__note"} -->
<p class="mk-lens__note"><?php echo esc_html( makido_shutters_t( 'q_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
