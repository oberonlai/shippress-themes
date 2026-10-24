<?php
/**
 * Title: Footer: wordmark, address and links
 * Slug: daichi-landscapes/footer-main
 * Categories: daichi-landscapes
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"dl-footer","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull dl-footer">
<!-- wp:group {"className":"dl-footer__in","layout":{"type":"default"}} -->
<div class="wp-block-group dl-footer__in">
<!-- wp:group {"className":"dl-footer__brand","layout":{"type":"default"}} -->
<div class="wp-block-group dl-footer__brand">
<!-- wp:paragraph {"className":"dl-logo"} -->
<p class="dl-logo"><a href="/">Daichi Landscapes</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-fsmall"} -->
<p class="dl-fsmall"><?php echo esc_html( daichi_landscapes_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-footer__links","layout":{"type":"default"}} -->
<div class="wp-block-group dl-footer__links">
<!-- wp:paragraph {"className":"dl-flink"} -->
<p class="dl-flink"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html( daichi_landscapes_t( 'ft_l1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-flink"} -->
<p class="dl-flink"><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"><?php echo esc_html( daichi_landscapes_t( 'ft_l2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-flink"} -->
<p class="dl-flink"><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( daichi_landscapes_t( 'ft_l3' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-flink"} -->
<p class="dl-flink"><a href="<?php echo esc_url( home_url( '/aftercare/' ) ); ?>"><?php echo esc_html( daichi_landscapes_t( 'ft_l4' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-flink"} -->
<p class="dl-flink"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( daichi_landscapes_t( 'ft_l5' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-flink"} -->
<p class="dl-flink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( daichi_landscapes_t( 'ft_l6' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"dl-footer__hours","layout":{"type":"default"}} -->
<div class="wp-block-group dl-footer__hours">
<!-- wp:paragraph {"className":"dl-fsmall"} -->
<p class="dl-fsmall"><?php echo esc_html( daichi_landscapes_t( 'ft_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dl-fsmall"} -->
<p class="dl-fsmall"><?php echo esc_html( daichi_landscapes_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
