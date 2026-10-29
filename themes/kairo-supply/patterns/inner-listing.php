<?php
/**
 * Title: Story list
 * Slug: kairo-supply/inner-listing
 * Categories: kairo-supply
 * Keywords: electrical wholesaler, trade counter
 * Viewport Width: 1440
 * Description: Blog and archive list: plain head and a three-up card grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kai-phead sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kai-phead sp-parallax">
<!-- wp:group {"className":"kai-phead__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kai-phead__layer sp-parallax__layer">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kai-phead__img kai-op-50-55"} -->
<figure class="wp-block-image size-full kai-phead__img kai-op-50-55"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/k11.webp' ) ); ?>" alt="Trade counter building at dawn with the roller door half up and two vans."/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<span class="kai-hero__band" aria-hidden="true"></span><svg class="kai-phead__chip" viewBox="0 0 260 520" preserveAspectRatio="xMidYMax meet" aria-hidden="true" focusable="false"><g transform="translate(95 0) skewX(-14)" fill="#FFD900"><path d="M76 58C76 30 90 18 105 18s29 12 29 40z"/><rect x="68" y="56" width="74" height="9" rx="4"/><ellipse cx="105" cy="82" rx="23" ry="26"/><rect x="93" y="102" width="24" height="18"/><path d="M105 116C70 116 40 122 31 150L22 262L52 266L58 184L62 330L66 506H98L105 340L112 506H144L148 330L152 184L158 266L188 262L179 150C170 122 140 116 105 116z"/><ellipse cx="160" cy="138" rx="38" ry="19" transform="rotate(-18 160 138)" fill="none" stroke="#FFD900" stroke-width="11"/></g></svg>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kai-phead__lockup","layout":{"type":"default"}} -->
<div class="wp-block-group kai-phead__lockup">
<!-- wp:paragraph {"className":"kai-hero__label"} -->
<p class="kai-hero__label">STORIES</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kai-phead__h1"} -->
<h1 class="wp-block-heading kai-phead__h1">Stories</h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<p class="kai-hero__tate kai-phead__tate" lang="en"><span>STORIES</span></p>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kai-sec kai-sec--soft","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kai-sec kai-sec--soft">
<!-- wp:group {"className":"kai-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kai-wrap">
<!-- wp:query {"query":{"perPage":9,"inherit":true},"className":"kai-loop"} -->
<div class="wp-block-query kai-loop"><!-- wp:post-template {"className":"kai-cards kai-cards--3","layout":{"type":"default"}} -->
<!-- wp:group {"className":"kai-card kai-card--p kai-card--post","layout":{"type":"default"}} -->
<div class="wp-block-group kai-card kai-card--p kai-card--post">
<!-- wp:post-title {"isLink":true,"className":"kai-card__h"} /-->
<!-- wp:post-excerpt {"excerptLength":24,"className":"kai-card__line"} /-->
<!-- wp:post-featured-image {"isLink":true,"className":"kai-card__img"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kai-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kai-cta">
<!-- wp:group {"className":"kai-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kai-wrap">
<!-- wp:group {"className":"kai-ctacard sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kai-ctacard sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kai-card__title"} -->
<p class="kai-card__title">APPLY</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kai-ctacard__text","layout":{"type":"default"}} -->
<div class="wp-block-group kai-ctacard__text">
<!-- wp:heading {"level":2,"className":"kai-ctacard__h"} -->
<h2 class="wp-block-heading kai-ctacard__h">Open a trade account.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Ten minutes to apply, a credit decision within two working days, and no fee to open.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kai-btn"} -->
<div class="wp-block-button kai-btn"><a class="wp-block-button__link wp-element-button" href="/apply/">Apply in 10 minutes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
