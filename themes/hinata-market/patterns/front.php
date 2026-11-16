<?php
/**
 * Title: Home: this Saturday’s front page
 * Slug: hinata-market/front
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Description: Three ruled columns: the market profile, the lead photograph in a stadium-and-diagonal shape with four diamonds and the first notice, and the date stamp card.
 */
?>
<!-- wp:group {"anchor":"front","tagName":"section","className":"hm-cols hm-front","layout":{"type":"default"},"align":"full"} -->
<section id="front" class="wp-block-group alignfull hm-cols hm-front"><!-- wp:group {"className":"hm-col hm-col--left","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--left"><!-- wp:paragraph {"className":"hm-label"} -->
<p class="hm-label"><span class="hm-label__dot">H</span><span><?php echo esc_html( hinata_market_t( 'about_label' ) ); ?></span><span class="hm-label__dot">M</span></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-photo hm-photo--profile"} -->
<figure class="wp-block-image size-full hm-photo hm-photo--profile"><img src="<?php echo hinata_market_img( 'profile-awning.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_h02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"className":"hm-greeting"} -->
<h2 class="wp-block-heading hm-greeting"><?php echo esc_html( hinata_market_t( 'greeting' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'front_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:group {"className":"hm-leadhead","layout":{"type":"default"}} -->
<div class="wp-block-group hm-leadhead"><!-- wp:group {"className":"hm-leadhead__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-leadhead__text"><!-- wp:heading {"level":1,"className":"hm-lead-h1"} -->
<h1 class="wp-block-heading hm-lead-h1"><?php echo esc_html( hinata_market_t( 'lead_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-leadhead__date"} -->
<p class="hm-leadhead__date"><?php echo esc_html( hinata_market_t( 'lead_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-tag","layout":{"type":"default"}} -->
<div class="wp-block-group hm-tag"><!-- wp:paragraph {"className":"hm-tag__w hm-tag__w--a"} -->
<p class="hm-tag__w hm-tag__w--a"><?php echo esc_html( hinata_market_t( 'tag_this' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-tag__w hm-tag__w--b"} -->
<p class="hm-tag__w hm-tag__w--b"><?php echo esc_html( hinata_market_t( 'tag_week' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-tag__issue"} -->
<p class="hm-tag__issue"><?php echo esc_html( hinata_market_t( 'tag_issue' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-lead sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hm-lead sp-parallax"><!-- wp:html -->
<svg class="hm-clipdef" width="0" height="0" aria-hidden="true" focusable="false"><defs><clipPath id="hm-lead-clip" clipPathUnits="objectBoundingBox"><path d="M0.259,0 L1,0 L0.84,1 L0.259,1 A0.259,0.5 0 0 1 0.259,0 Z"/></clipPath></defs></svg>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-lead__shape"} -->
<figure class="wp-block-image size-full hm-lead__shape"><img src="<?php echo hinata_market_img( 'lead-crates.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_h01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<svg class="hm-lead__line" viewBox="0 0 606 314" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M157,1 L605,1 L509,313 L157,313 A156,156 0 0 1 157,1 Z" fill="none" stroke="currentColor" stroke-width="2" vector-effect="non-scaling-stroke"/></svg>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--tl" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_1' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--tr" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_2' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--bl" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_3' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--br" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_4' ) ); ?></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row"><!-- wp:group {"className":"hm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><span class="hm-new"><?php echo esc_html( hinata_market_t( 'tag_new' ) ); ?></span> <a href="<?php echo hinata_market_url( '/a-honey-stall-joins-row-c-from-28-november/' ); ?>"><?php echo esc_html( hinata_market_t( 'row1_title' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-row__date"} -->
<p class="hm-row__date"><?php echo esc_html( hinata_market_t( 'row1_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-row__thumb"} -->
<figure class="wp-block-image size-full hm-row__thumb"><img src="<?php echo hinata_market_img( 'notice-honey.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_n1' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:group {"className":"hm-stamp","layout":{"type":"default"}} -->
<div class="wp-block-group hm-stamp"><!-- wp:group {"className":"hm-stamp__in","layout":{"type":"default"}} -->
<div class="wp-block-group hm-stamp__in"><!-- wp:paragraph {"className":"hm-stamp__glyph"} -->
<p class="hm-stamp__glyph"><span class="hm-glyph hm-glyph--awning hm-glyph--big"></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-stamp__name"} -->
<p class="hm-stamp__name"><?php echo hinata_market_lines( 'stamp_name' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-stamp__sub"} -->
<p class="hm-stamp__sub"><?php echo esc_html( hinata_market_t( 'stamp_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-date","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date"><!-- wp:paragraph {"className":"hm-date__year"} -->
<p class="hm-date__year"><?php echo esc_html( hinata_market_t( 'date_year' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-date__row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date__row"><!-- wp:paragraph {"className":"hm-date__wd"} -->
<p class="hm-date__wd"><?php echo hinata_market_lines( 'date_wd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__num","fontSize":"giant"} -->
<p class="hm-date__num"><?php echo esc_html( hinata_market_t( 'date_num' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__mo"} -->
<p class="hm-date__mo"><span class="hm-disc"><?php echo esc_html( hinata_market_t( 'date_disc' ) ); ?></span><?php echo hinata_market_lines( 'date_mo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-arrow","layout":{"type":"default"}} -->
<div class="wp-block-group hm-arrow"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-cells","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cells"><!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'cell_forecast' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'cell_stalls' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-facts","layout":{"type":"default"}} -->
<div class="wp-block-group hm-facts"><!-- wp:paragraph {"className":"hm-fact hm-fact--wx"} -->
<p class="hm-fact hm-fact--wx"><span class="hm-glyph hm-glyph--wx"></span><?php echo esc_html( hinata_market_t( 'fact_dry' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-fact hm-fact--n"} -->
<p class="hm-fact hm-fact--n"><b><?php echo esc_html( hinata_market_t( 'fact_40' ) ); ?></b> <?php echo esc_html( hinata_market_t( 'fact_stalls' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hm-date__temp"} -->
<p class="hm-date__temp"><?php echo esc_html( hinata_market_t( 'date_temp' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
