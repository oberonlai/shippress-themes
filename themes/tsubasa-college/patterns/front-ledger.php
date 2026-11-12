<?php
/**
 * Title: Home: certification ledger
 * Slug: tsubasa-college/front-ledger
 * Categories: tsubasa-college
 * Keywords: modules, table, assessment
 * Viewport Width: 1440
 * Description: A 4:3 photograph beside a short text, then a full-width ledger table: module, months, hours and how each module is assessed.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"ledger","className":"tc-sec tc-ledger","layout":{"type":"default"}} -->
<section id="ledger" class="wp-block-group alignfull tc-sec tc-ledger"><!-- wp:group {"align":"wide","className":"tc-ledger__grid sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tc-ledger__grid sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-ledger__photo"} -->
<figure class="wp-block-image size-full tc-ledger__photo"><img src="<?php echo tsubasa_college_img( 'ts-14-task-card' ); ?>" alt="<?php echo esc_attr( tsubasa_college_t( 'alt_14' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tc-ledger__text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-ledger__text"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tsubasa_college_t( 'le_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( tsubasa_college_t( 'le_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tc-rule","layout":{"type":"default"}} -->
<div class="wp-block-group tc-rule"></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsubasa_college_t( 'le_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:table {"align":"wide","className":"tc-table tc-table--ledger"} -->
<figure class="wp-block-table alignwide tc-table tc-table--ledger"><table><thead><tr><th scope="col"><?php echo esc_html( tsubasa_college_t( 'le_th1' ) ); ?></th><th scope="col"><?php echo esc_html( tsubasa_college_t( 'le_th2' ) ); ?></th><th scope="col" class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_th3' ) ); ?></th><th scope="col"><?php echo esc_html( tsubasa_college_t( 'le_th4' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m1n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m1m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m1h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m1a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m2n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m2m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m2h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m2a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m3n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m3m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m3h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m3a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m4n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m4m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m4h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m4a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m5n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m5m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m5h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m5a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m6n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m6m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m6h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m6a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m7n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m7m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m7h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m7a' ) ); ?></td></tr><tr><td><?php echo esc_html( tsubasa_college_t( 'le_m8n' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m8m' ) ); ?></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tsubasa_college_t( 'le_m8h' ) ); ?></td><td><?php echo esc_html( tsubasa_college_t( 'le_m8a' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></section>
<!-- /wp:group -->
