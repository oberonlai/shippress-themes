<?php
/**
 * Title: Home: the shop week
 * Slug: enogu-supply/front-week
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: A portrait photograph beside a definition table of the seven days of the shop week.
 */
?>
<!-- wp:group {"className":"en-sec en-week","tagName":"section","anchor":"week","layout":{"type":"default"}} -->
<section id="week" class="wp-block-group en-sec en-week">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'week_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-week__grid","layout":{"type":"default"}} -->
<div class="wp-block-group en-week__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-week__img"} -->
<figure class="wp-block-image size-full en-week__img"><img src="<?php echo enogu_supply_img( 'week-demo.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_w1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:table {"className":"en-weektable"} -->
<figure class="wp-block-table en-weektable"><table><thead><tr><th><?php echo esc_html( enogu_supply_t( 'th_day' ) ); ?></th><th><?php echo esc_html( enogu_supply_t( 'th_what' ) ); ?></th><th><?php echo esc_html( enogu_supply_t( 'th_hours' ) ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd1' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd1t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd1h' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd2' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd2t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd2h' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd3' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd3t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd3h' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd4' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd4t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd4h' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd5' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd5t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd5h' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd6' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd6t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd6h' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'd7' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'd7t' ) ); ?></td><td class="en-wk__h"><?php echo esc_html( enogu_supply_t( 'd7h' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
