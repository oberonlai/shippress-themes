<?php
/**
 * Title: Home: what a building install includes
 * Slug: zaseki-panel/front-install
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: A portrait photograph beside the headline, an intro and the five install rows as a table.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"install","className":"zp-sec zp-install","layout":{"type":"default"}} -->
<section id="install" class="wp-block-group zp-sec zp-install">
<!-- wp:group {"className":"zp-wrap zp-install__in","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-install__in">
<!-- wp:group {"className":"zp-install__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-install__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-photo"} -->
<figure class="wp-block-image size-full zp-photo"><img src="<?php echo zaseki_panel_img( 'install-mount.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_i1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-install__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-install__text">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'install_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2"} -->
<h2 class="wp-block-heading zp-h2"><?php echo esc_html( zaseki_panel_t( 'install_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'install_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-wipe sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wipe sp-reveal sp-reveal--wipe">
<!-- wp:table {"className":"zp-table zp-table--install"} -->
<figure class="wp-block-table zp-table zp-table--install"><table><thead><tr><th><?php echo esc_html( zaseki_panel_t( 'th_item' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_inc' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_when' ) ); ?></th></tr></thead><tbody><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'ins_i1' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'ins_d1' ) ); ?></td><td class="zp-t-when"><?php echo esc_html( zaseki_panel_t( 'ins_w1' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'ins_i2' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'ins_d2' ) ); ?></td><td class="zp-t-when"><?php echo esc_html( zaseki_panel_t( 'ins_w2' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'ins_i3' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'ins_d3' ) ); ?></td><td class="zp-t-when"><?php echo esc_html( zaseki_panel_t( 'ins_w3' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'ins_i4' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'ins_d4' ) ); ?></td><td class="zp-t-when"><?php echo esc_html( zaseki_panel_t( 'ins_w4' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'ins_i5' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'ins_d5' ) ); ?></td><td class="zp-t-when"><?php echo esc_html( zaseki_panel_t( 'ins_w5' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"zp-arrow"} -->
<p class="zp-arrow"><a href="/install/"><?php echo esc_html( zaseki_panel_t( 'install_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
