<?php
/**
 * Title: Home: fees, visit and newsletter
 * Slug: tochi-academy/front-fees
 * Categories: tochi-academy
 * Keywords: fees, price, table, visit, newsletter
 * Viewport Width: 1440
 * Description: Full-width fees table (seven rows), then a visit card with the address and hours beside the newsletter slot.
 */
?>
<!-- wp:group {"align":"full","className":"ta-sec ta-sec--fees","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ta-sec ta-sec--fees"><!-- wp:group {"className":"ta-rail","layout":{"type":"default"}} -->
<div class="wp-block-group ta-rail"><!-- wp:paragraph {"className":"ta-rail__label"} -->
<p class="ta-rail__label"><?php echo wp_kses_post( tochi_academy_t( 'kad01fe52' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group ta-sec__body"><!-- wp:paragraph {"className":"ta-label sp-reveal sp-reveal--mask"} -->
<p class="ta-label sp-reveal sp-reveal--mask"><?php echo wp_kses_post( tochi_academy_t( 'kad01fe52' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--mask"><?php echo wp_kses_post( tochi_academy_t( 'k77062892' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ta-lede"} -->
<p class="ta-lede"><?php echo wp_kses_post( tochi_academy_t( 'ke281aeae' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"is-style-tochi-fees"} -->
<figure class="wp-block-table is-style-tochi-fees"><table><thead><tr><th><?php echo wp_kses_post( tochi_academy_t( 'k8913b656' ) ); ?></th><th><?php echo wp_kses_post( tochi_academy_t( 'kd61ac03a' ) ); ?></th><th><?php echo wp_kses_post( tochi_academy_t( 'k3601146c' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( tochi_academy_t( 'kf3c097d2' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'k009ff8bf' ) ); ?></td><td>$2,480</td></tr><tr><td><?php echo wp_kses_post( tochi_academy_t( 'k22e426e4' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'k99472dd0' ) ); ?></td><td>$1,940</td></tr><tr><td><?php echo wp_kses_post( tochi_academy_t( 'kcb144735' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'k3d0fa6e6' ) ); ?></td><td>$780</td></tr><tr><td><?php echo wp_kses_post( tochi_academy_t( 'ka1b41f57' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'kdf199981' ) ); ?></td><td>$420</td></tr><tr><td><?php echo wp_kses_post( tochi_academy_t( 'k105978ee' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'k4243dd08' ) ); ?></td><td>$240</td></tr><tr><td><?php echo wp_kses_post( tochi_academy_t( 'k5b03a500' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'k635ac10c' ) ); ?></td><td>$120</td></tr><tr><td><?php echo wp_kses_post( tochi_academy_t( 'k1d2b75c0' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'k63c4f0aa' ) ); ?></td><td><?php echo wp_kses_post( tochi_academy_t( 'kb24ce0cd' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"ta-visit","layout":{"type":"default"}} -->
<div class="wp-block-group ta-visit"><!-- wp:group {"className":"ta-visit__card","layout":{"type":"default"}} -->
<div class="wp-block-group ta-visit__card"><!-- wp:paragraph {"className":"ta-cat"} -->
<p class="ta-cat"><?php echo wp_kses_post( tochi_academy_t( 'k5e706a9b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'kcd78fbe5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k3424f8c7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ta-pill"} -->
<div class="wp-block-button ta-pill"><a class="wp-block-button__link wp-element-button" href="/open-evening/"><?php echo wp_kses_post( tochi_academy_t( 'k27a21832' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-visit__card ta-visit__card--news","layout":{"type":"default"}} -->
<div class="wp-block-group ta-visit__card ta-visit__card--news"><!-- wp:paragraph {"className":"ta-cat"} -->
<p class="ta-cat"><?php echo wp_kses_post( tochi_academy_t( 'kffb7e666' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tochi_academy_t( 'k35aac2cd' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'kd2b2b489' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind'    => 'newsletter',
	'email'   => 'office@tochi-academy.example',
	'label'   => tochi_academy_t( 'forms_email' ),
	'submit'  => tochi_academy_t( 'forms_subscribe' ),
	'notice'  => tochi_academy_t( 'forms_mail_notice' ),
	'subject' => tochi_academy_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
