<?php
/**
 * Title: Footer
 * Slug: azuke-finance/foot-bar
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: Dark footer with address, hours, plain links to every page and the fixed Apply tab.
 */
?>
<!-- wp:group {"align":"full","className":"az-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull az-foot"><!-- wp:group {"className":"az-foot__top","layout":{"type":"default"}} -->
<div class="wp-block-group az-foot__top"><!-- wp:group {"className":"az-foot__id","layout":{"type":"default"}} -->
<div class="wp-block-group az-foot__id"><!-- wp:site-title {"level":0,"className":"az-brand az-brand--foot"} /-->

<!-- wp:paragraph {"className":"az-foot__addr"} -->
<p class="az-foot__addr"><?php echo azuke_finance_lines( 'foot_addr' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-foot__small"} -->
<p class="az-foot__small"><?php echo esc_html( azuke_finance_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-foot__small"} -->
<p class="az-foot__small"><?php echo esc_html( azuke_finance_t( 'foot_mail' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group az-foot__links"><?php foreach ( (array) json_decode( azuke_finance_t( 'foot_links' ), true ) as $azl ) : ?>
<!-- wp:paragraph {"className":"az-foot__link"} -->
<p class="az-foot__link"><a href="<?php echo esc_url( $azl[1] ); ?>"><?php echo esc_html( $azl[0] ); ?></a></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"az-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group az-foot__base"><!-- wp:paragraph {"className":"az-foot__small"} -->
<p class="az-foot__small"><?php echo esc_html( azuke_finance_t( 'foot_lang' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-foot__small"} -->
<p class="az-foot__small"><?php echo esc_html( azuke_finance_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="az-tab" href="/apply/"><span class="az-tab__chip" aria-hidden="true">+</span><span class="az-tab__label"><?php echo esc_html( azuke_finance_t( 'tab_label' ) ); ?></span></a>
<!-- /wp:html -->
