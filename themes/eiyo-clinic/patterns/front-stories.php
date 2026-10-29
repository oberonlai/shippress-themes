<?php
/**
 * Title: Home: three stories
 * Slug: eiyo-clinic/front-stories
 * Categories: eiyo-clinic
 * Keywords: stories, cards
 * Viewport Width: 1440
 * Description: Eyebrow, heading and three 4:3 story cards that rise in one after the other.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"ec-sec ec-stories","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull ec-sec ec-stories"><!-- wp:group {"className":"ec-in ec-stories__head","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-stories__head"><!-- wp:paragraph {"className":"ec-eyebrow"} -->
<p class="ec-eyebrow">Stories</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2">Three people, three ordinary weeks</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-in ec-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-cards sp-stagger"><!-- wp:group {"className":"ec-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ec-card sp-reveal sp-reveal--up"><?php echo eiyo_clinic_image( 'p09', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Mark, 54 — breakfast back on the table</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mark had spent years skipping breakfast, running on coffee until mid-morning hunger took over. Working with Tomás, he established an unhurried morning bowl of warm porridge and fruit, bringing calm stability to his workday.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip ec-chip--bare"} -->
<div class="wp-block-buttons ec-chip ec-chip--bare"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>">Read the story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ec-card sp-reveal sp-reveal--up"><?php echo eiyo_clinic_image( 'p10', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Rosa, 38, night-shift nurse — a lunch that lasts a 12-hour shift</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hospital night shifts left Rosa reliant on vending machines at three in the morning. Leila helped her design a packed thermal lunch that stays fresh for twelve hours, keeping her alert and nourished through demanding rotations.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip ec-chip--bare"} -->
<div class="wp-block-buttons ec-chip ec-chip--bare"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>">Read the story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ec-card sp-reveal sp-reveal--up"><?php echo eiyo_clinic_image( 'p11', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">The Okafor-Lindh household — one dinner, four plates</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Cooking for differing schedules and tastes was turning evenings into chaotic multi-meal short orders. Amara helped the family build adaptable dinners from shared bases, allowing everyone to eat well together from a single evening table.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ec-chip ec-chip--bare"} -->
<div class="wp-block-buttons ec-chip ec-chip--bare"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/stories/' ) ); ?>">Read the story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
