<?php
/**
 * Title: Template: index
 * Slug: hoshi-wealth-partners/tpl-index
 * Categories: hoshi-wealth-partners
 * Viewport Width: 1440
 */
?>
<?php if ( is_home() ) : ?>
<!-- wp:group {"className":"hp-ihead","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hp-ihead">
<!-- wp:heading {"level":1,"className":"hp-ih1"} -->
<h1 class="wp-block-heading hp-ih1"><span class="hp-il hp-il--l"><span class="hp-w hp-w--serif"><?php echo esc_html( hoshi_wealth_partners_t( 'lt_w1' ) ); ?></span> <span class="hp-w hp-w--sans"><?php echo esc_html( hoshi_wealth_partners_t( 'lt_w2' ) ); ?></span></span> <span class="hp-il hp-il--p"><span class="hp-w hp-w--sans"><?php echo esc_html( hoshi_wealth_partners_t( 'lt_w3' ) ); ?></span> <span class="hp-w hp-w--serif"><?php echo esc_html( hoshi_wealth_partners_t( 'lt_w4' ) ); ?></span></span></h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"hp-ihead__row","layout":{"type":"default"}} -->
<div class="wp-block-group hp-ihead__row"><!-- wp:group {"className":"hp-ihead__a","layout":{"type":"default"}} -->
<div class="wp-block-group hp-ihead__a"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-ph hp-ph--2x1"} -->
<figure class="wp-block-image size-full hp-ph hp-ph--2x1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p14.webp' ) ); ?>" alt="<?php echo esc_attr( hoshi_wealth_partners_t( 'alt_p14' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"hp-cap"} -->
<p class="hp-cap"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-ihead__lede","layout":{"type":"default"}} -->
<div class="wp-block-group hp-ihead__lede"><!-- wp:paragraph {"className":"hp-lede"} -->
<p class="hp-lede"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php endif; ?>
<!-- wp:group {"className":"hp-in hp-letters-main","layout":{"type":"default"},"tagName":"main"} -->
<main class="wp-block-group hp-in hp-letters-main"><?php if ( ! is_home() ) : ?><!-- wp:query-title {"type":"archive","level":1,"className":"hp-h2 hp-pagetitle"} /--><?php endif; ?><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hp-letters__list hp-posts"} -->
<div class="wp-block-query hp-letters__list hp-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hp-letter hp-letter--row","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letter hp-letter--row"><!-- wp:group {"className":"hp-letter__meta","layout":{"type":"default"}} -->
<div class="wp-block-group hp-letter__meta"><!-- wp:post-date {"format":"Y.m.d"} /--><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --><!-- wp:post-title {"level":2,"isLink":true,"className":"hp-letter__t"} /--><!-- wp:post-excerpt {"excerptLength":28,"className":"hp-letter__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --><!-- wp:query-pagination {"className":"hp-pager"} --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group --><?php if ( is_home() ) : ?>
<!-- wp:group {"className":"hp-in hp-isecs","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hp-in hp-isecs"><!-- wp:group {"className":"hp-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"hp-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec__l"><!-- wp:heading {"level":2,"className":"hp-h2 hp-isec__h"} -->
<h2 class="wp-block-heading hp-h2 hp-isec__h"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s0_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec__r"><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s0_p0' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s0_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"hp-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec__l"><!-- wp:heading {"level":2,"className":"hp-h2 hp-isec__h"} -->
<h2 class="wp-block-heading hp-h2 hp-isec__h"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s1_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec__r"><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s1_p0' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s1_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"hp-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec__l"><!-- wp:heading {"level":2,"className":"hp-h2 hp-isec__h"} -->
<h2 class="wp-block-heading hp-h2 hp-isec__h"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s2_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className":"hp-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group hp-isec__r"><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s2_p0' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hp-body"} -->
<p class="hp-body"><?php echo wp_kses_post( hoshi_wealth_partners_t( 'lt_s2_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<?php endif; ?>
