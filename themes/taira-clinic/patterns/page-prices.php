<?php
/**
 * Title: Page: Prices and cover
 * Slug: taira-clinic/page-prices
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Page head, a full-width price table that stacks on small screens, then rows on receipts, insurance and cancellation.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-pagehead">
<!-- wp:group {"className":"tc-wrap tc-pagehead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-pagehead__grid">
<!-- wp:group {"className":"tc-pagehead__t","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__t">
<!-- wp:paragraph {"className":"tc-crumb"} -->
<p class="tc-crumb"><a href="/"><?php echo esc_html( taira_clinic_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( taira_clinic_t( 'prices_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"tc-h1 tc-h1--inner"} -->
<h1 class="wp-block-heading tc-h1 tc-h1--inner"><?php echo esc_html( taira_clinic_t( 'prices_title' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-lead"} -->
<p class="tc-lead"><?php echo esc_html( taira_clinic_t( 'prices_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-pagehead__ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-pagehead__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taira_clinic_img( 'p16-balance-platform.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:heading {"className":"tc-h2 tc-h2--tbl"} -->
<h2 class="wp-block-heading tc-h2 tc-h2--tbl"><?php echo esc_html( taira_clinic_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:table {"hasFixedLayout":true,"className":"tc-prices"} -->
<figure class="wp-block-table tc-prices"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( taira_clinic_t( 'pr_c1' ) ); ?></th><th><?php echo esc_html( taira_clinic_t( 'pr_c2' ) ); ?></th><th><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></th></tr></thead><tbody><tr><td><strong><?php echo esc_html( taira_clinic_t( 'pr1_s' ) ); ?></strong></td><td><?php echo esc_html( taira_clinic_t( 'pr1_i' ) ); ?></td><td><em><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></em><?php echo esc_html( taira_clinic_t( 'pr1_f' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( taira_clinic_t( 'pr2_s' ) ); ?></strong></td><td><?php echo esc_html( taira_clinic_t( 'pr2_i' ) ); ?></td><td><em><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></em><?php echo esc_html( taira_clinic_t( 'pr2_f' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( taira_clinic_t( 'pr3_s' ) ); ?></strong></td><td><?php echo esc_html( taira_clinic_t( 'pr3_i' ) ); ?></td><td><em><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></em><?php echo esc_html( taira_clinic_t( 'pr3_f' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( taira_clinic_t( 'pr4_s' ) ); ?></strong></td><td><?php echo esc_html( taira_clinic_t( 'pr4_i' ) ); ?></td><td><em><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></em><?php echo esc_html( taira_clinic_t( 'pr4_f' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( taira_clinic_t( 'pr5_s' ) ); ?></strong></td><td><?php echo esc_html( taira_clinic_t( 'pr5_i' ) ); ?></td><td><em><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></em><?php echo esc_html( taira_clinic_t( 'pr5_f' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( taira_clinic_t( 'pr6_s' ) ); ?></strong></td><td><?php echo esc_html( taira_clinic_t( 'pr6_i' ) ); ?></td><td><em><?php echo esc_html( taira_clinic_t( 'pr_c3' ) ); ?></em><?php echo esc_html( taira_clinic_t( 'pr6_f' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"tc-note"} -->
<p class="tc-note"><?php echo esc_html( taira_clinic_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"tc-sec tc-sec--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-sec tc-sec--page">
<!-- wp:group {"className":"tc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap">
<!-- wp:group {"className":"tc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rows">
<!-- wp:group {"className":"tc-row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'prices_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'prices_s2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'prices_s2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'prices_s2_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-row","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row">
<!-- wp:heading {"level":2,"className":"tc-h3 tc-row__h"} -->
<h2 class="wp-block-heading tc-h3 tc-row__h"><?php echo esc_html( taira_clinic_t( 'prices_s3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-row__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-row__b">
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'prices_s3_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'prices_s3_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-body"} -->
<p class="tc-body"><?php echo esc_html( taira_clinic_t( 'prices_s3_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
