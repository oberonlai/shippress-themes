<?php
/**
 * Title: Home: taking a place
 * Slug: kanjo-college/front-close
 * Categories: kanjo-college
 * Keywords: enrol, contact, steps
 * Viewport Width: 1440
 * Description: A slate band with four numbered ruled lines and a rounded outline card holding hours, address and the booking button.
 */
$kc_steps = array(
	array( '01', 'Placement chat', 'A free 30-minute talk about your experience and study goals.' ),
	array( '02', 'Placement exercise', 'A 45-minute paper exercise, at college or online.' ),
	array( '03', 'Choose papers and timetable', 'Pick day or evening classes across the three terms of the year.' ),
	array( '04', 'Pay the deposit and enrol', 'Confirm with a $150 deposit that counts toward your fee.' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-close has-slate-background-color has-background","layout":{"type":"default"}} -->
<section id="place" class="wp-block-group alignfull kc-sec kc-close has-slate-background-color has-background"><!-- wp:group {"className":"kc-in kc-close__in","layout":{"type":"default"}} -->
<div class="wp-block-group kc-in kc-close__in"><!-- wp:group {"className":"kc-close__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-close__text"><!-- wp:paragraph {"className":"kc-chip kc-chip--light sp-reveal sp-reveal--up"} -->
<p class="kc-chip kc-chip--light sp-reveal sp-reveal--up">Taking a place</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up">Four steps to a place</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kc-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-steps sp-stagger"><?php foreach ( $kc_steps as $kc_st ) : ?>
<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-step__no"} -->
<p class="kc-step__no"><?php echo esc_html( $kc_st[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-step__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step__body"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $kc_st[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $kc_st[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-close__card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-close__card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Visit the college office</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>14 Corder Street, Northgate, Halden<br>+1 555 0142</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mon–Fri 09:00–20:30<br>Sat 09:00–13:00<br>Closed Sun</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a placement chat</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
