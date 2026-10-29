<?php
/**
 * Title: Home: who is in the room
 * Slug: eiyo-clinic/front-room
 * Categories: eiyo-clinic
 * Keywords: team, people
 * Viewport Width: 1440
 * Description: Paper section with a wide photograph at the left, a paragraph and a plain two-column list of the seven people at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"room","className":"ec-sec ec-room","layout":{"type":"default"}} -->
<section id="room" class="wp-block-group alignfull ec-sec ec-room"><!-- wp:group {"className":"ec-in ec-room__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-room__grid"><!-- wp:group {"className":"ec-room__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ec-room__photo"><?php echo eiyo_clinic_image( 'p12', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-room__text","layout":{"type":"default"}} -->
<div class="wp-block-group ec-room__text"><!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2">Who is in the room</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our clinic brings together registered dietitians and a cook who share a grounded, respectful philosophy around food. We spend our appointments listening closely, working alongside your doctor when health conditions require medical guidance, and offering sensible, practical care that respects your daily reality.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ec-names","layout":{"type":"default"}} -->
<div class="wp-block-group ec-names"><!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Ingrid Solberg<br><em>Founder, registered dietitian</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Tomás Ávila<br><em>Dietitian, blood sugar and cholesterol</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Amara Nwosu<br><em>Dietitian, family meals</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Leila Haddad<br><em>Dietitian, shift work and eating out</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Daniel Brennan<br><em>Dietitian, plant-forward eating</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Priya Raman<br><em>Cook, leads the kitchen classes</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name">Sofia Marchetti<br><em>Front desk and bookings</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/dietitians/' ) ); ?>">Meet the dietitians</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
