<?php
/**
 * Title: Home: shop by category
 * Slug: enogu-supply/front-categories
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Six own-drawn line icons with spaced labels that link to the range pages.
 */
?>
<!-- wp:group {"className":"en-sec en-cats","tagName":"section","anchor":"categories","layout":{"type":"default"}} -->
<section id="categories" class="wp-block-group en-sec en-cats">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'cats_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cats__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group en-cats__row sp-stagger">
<!-- wp:group {"className":"en-cat sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-cat sp-reveal sp-reveal--up">
<!-- wp:html -->
<?php echo enogu_supply_icon( 'paper' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"en-cat__l"} -->
<p class="en-cat__l"><a href="/paper/"><?php echo esc_html( enogu_supply_t( 'c1' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cat sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-cat sp-reveal sp-reveal--up">
<!-- wp:html -->
<?php echo enogu_supply_icon( 'pigment' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"en-cat__l"} -->
<p class="en-cat__l"><a href="/pigment/"><?php echo esc_html( enogu_supply_t( 'c2' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cat sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-cat sp-reveal sp-reveal--up">
<!-- wp:html -->
<?php echo enogu_supply_icon( 'brush' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"en-cat__l"} -->
<p class="en-cat__l"><a href="/brushes/"><?php echo esc_html( enogu_supply_t( 'c3' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cat sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-cat sp-reveal sp-reveal--up">
<!-- wp:html -->
<?php echo enogu_supply_icon( 'tool' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"en-cat__l"} -->
<p class="en-cat__l"><a href="/studio-tools/"><?php echo esc_html( enogu_supply_t( 'c4' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cat sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-cat sp-reveal sp-reveal--up">
<!-- wp:html -->
<?php echo enogu_supply_icon( 'mill' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"en-cat__l"} -->
<p class="en-cat__l"><a href="/mill-orders/"><?php echo esc_html( enogu_supply_t( 'c5' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cat sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-cat sp-reveal sp-reveal--up">
<!-- wp:html -->
<?php echo enogu_supply_icon( 'price' ); ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"en-cat__l"} -->
<p class="en-cat__l"><a href="/price-list/"><?php echo esc_html( enogu_supply_t( 'c6' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
