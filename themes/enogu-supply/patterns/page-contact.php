<?php
/**
 * Title: Page: contact
 * Slug: enogu-supply/page-contact
 * Categories: enogu-supply
 * Inserter: no
 * Viewport Width: 1440
 * Description: Contact page.
 */
?>
<!-- wp:group {"className":"en-sec en-page en-inner","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group en-sec en-page en-inner">
<!-- wp:group {"className":"en-head","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull en-head">
<!-- wp:group {"className":"en-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group en-head__grid">
<!-- wp:group {"className":"en-hcol en-hcol--1","layout":{"type":"default"}} -->
<div class="wp-block-group en-hcol en-hcol--1">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-hcol__img"} -->
<figure class="wp-block-image size-full en-hcol__img"><img src="<?php echo enogu_supply_img( 'story-shopfront.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-slide__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cap","layout":{"type":"default"}} -->
<div class="wp-block-group en-cap">
<!-- wp:paragraph {"className":"en-cap__a"} -->
<p class="en-cap__a"><?php echo esc_html( enogu_supply_t( 'cap_range' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-cap__b"} -->
<p class="en-cap__b"><?php echo esc_html( enogu_supply_t( 'hc_contact_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"en-cap__tab","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-cap__tab"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#form"><?php echo esc_html( enogu_supply_t( 'tab_form' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-hcol en-hcol--2","layout":{"type":"default"}} -->
<div class="wp-block-group en-hcol en-hcol--2">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-hcol__img"} -->
<figure class="wp-block-image size-full en-hcol__img"><img src="<?php echo enogu_supply_img( 'range-tools.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_p4' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-slide__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group en-slide__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-cap","layout":{"type":"default"}} -->
<div class="wp-block-group en-cap">
<!-- wp:paragraph {"className":"en-cap__a"} -->
<p class="en-cap__a"><?php echo esc_html( enogu_supply_t( 'cap_range' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-cap__b"} -->
<p class="en-cap__b"><?php echo esc_html( enogu_supply_t( 'hc_contact_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"en-cap__tab","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-cap__tab"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#details"><?php echo esc_html( enogu_supply_t( 'tab_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-head__title","layout":{"type":"default"}} -->
<div class="wp-block-group en-head__title">
<!-- wp:heading {"level":1,"className":"en-h1 en-h1--inner"} -->
<h1 class="wp-block-heading en-h1 en-h1--inner"><?php echo esc_html( enogu_supply_t( 'pg_contact_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"en-head__lede"} -->
<p class="en-head__lede"><?php echo esc_html( enogu_supply_t( 'pg_contact_i' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-col en-block","anchor":"details","layout":{"type":"default"}} -->
<div id="details" class="wp-block-group en-col en-block">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'pg_contact_1h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-body"} -->
<p class="en-body"><?php echo esc_html( enogu_supply_t( 'pg_contact_1b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-wide en-block","layout":{"type":"default"}} -->
<div class="wp-block-group en-wide en-block">
<!-- wp:table {"className":"en-weektable en-facts"} -->
<figure class="wp-block-table en-weektable en-facts"><table><tbody><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'ct_addr_l' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'f_addr' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'ct_phone_l' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'f_phone' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'ct_mail_l' ) ); ?></th><td><a href="mailto:hello@enogu-supply.example"><?php echo esc_html( enogu_supply_t( 'f_mail' ) ); ?></a></td></tr><tr><th scope="row"><?php echo esc_html( enogu_supply_t( 'ct_hours_l' ) ); ?></th><td><?php echo esc_html( enogu_supply_t( 'f_h1' ) ); ?><br><?php echo esc_html( enogu_supply_t( 'f_h2' ) ); ?><br><?php echo esc_html( enogu_supply_t( 'f_h3' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-col en-block","layout":{"type":"default"}} -->
<div class="wp-block-group en-col en-block">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'pg_contact_2h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-body"} -->
<p class="en-body"><?php echo esc_html( enogu_supply_t( 'pg_contact_2b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-col en-block","layout":{"type":"default"}} -->
<div class="wp-block-group en-col en-block">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'pg_contact_3h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-body"} -->
<p class="en-body"><?php echo esc_html( enogu_supply_t( 'pg_contact_3b' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-form en-block","anchor":"form","layout":{"type":"default"}} -->
<div id="form" class="wp-block-group en-form en-block">
<?php
ob_start(); ?>
<!-- wp:buttons {"className":"en-formfb","layout":{"type":"flex"}} -->
<div class="wp-block-buttons en-formfb"><!-- wp:button {"className":"en-tab en-tab--lg"} -->
<div class="wp-block-button en-tab en-tab--lg"><a class="wp-block-button__link wp-element-button" href="mailto:hello@enogu-supply.example"><?php echo esc_html( enogu_supply_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
