<?php
/**
 * Title: Home: where eating stalls
 * Slug: eiyo-clinic/front-stalls
 * Categories: eiyo-clinic
 * Keywords: problem, coverflow
 * Viewport Width: 1440
 * Description: Centred label and heading, a static coverflow of three photographs with a paper caption card overlapping the centre photo, three tab labels between hairlines and three short paragraphs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"problem","className":"ec-sec ec-stalls","layout":{"type":"default"}} -->
<section id="problem" class="wp-block-group alignfull ec-sec ec-stalls"><!-- wp:group {"className":"ec-in ec-stalls__head","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-stalls__head"><!-- wp:paragraph {"className":"ec-eyebrow"} -->
<p class="ec-eyebrow">The problem</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2">Where everyday eating stalls</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-flow","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-flow"><?php echo eiyo_clinic_image( 'p05', 'ec-flow__side ec-flow__side--l', 'aria-hidden="true"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo eiyo_clinic_image( 'p07', 'ec-flow__side ec-flow__side--r', 'aria-hidden="true"' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo eiyo_clinic_image( 'p06', 'ec-flow__main' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:group {"className":"ec-flow__card","layout":{"type":"default"}} -->
<div class="wp-block-group ec-flow__card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Late dinners</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Dinner at nine in a dark kitchen. We plan three easy evenings from staples.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>">The approach</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-tabs","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-tabs"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>">Skipped breakfast</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-current"} -->
<p class="is-current"><a href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>">Late dinners</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/approach/#stalls' ) ); ?>">All-or-nothing weeks</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-stalltext","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-stalltext"><!-- wp:paragraph -->
<p><strong>Skipped breakfast</strong> often begins with a rush out the door and an extra coffee. By noon, hunger is urgent and options are limited to whatever is nearby. We help you assemble a simple, repeatable morning routine that takes under five minutes and puts something on the table before the morning gets busy.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Late dinners</strong> happen when long working hours or tiring commutes leave the kitchen dark until eight or nine at night. Fatigue makes cooking feel impossible, leading to random pantry snacking or takeout. We plan three effortless evening options that rely on staple ingredients and ten minutes of gentle assembly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>All-or-nothing weeks</strong> swing between immaculate meal preparation on Sunday and complete abandonment by Wednesday night. Real life rarely follows a tidy schedule. We replace rigid expectations with flexible, forgiving meal combinations that still nourish you when meetings run over and energy is low.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
