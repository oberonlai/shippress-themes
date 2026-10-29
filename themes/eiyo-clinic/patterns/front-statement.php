<?php
/**
 * Title: Home: statement
 * Slug: eiyo-clinic/front-statement
 * Categories: eiyo-clinic
 * Keywords: statement, about
 * Viewport Width: 1440
 * Description: Four lines that light up from grey to ink while scrolling, a dot-arrow link, one paragraph and a tall photograph at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"ec-sec ec-statement-sec","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull ec-sec ec-statement-sec"><!-- wp:group {"className":"ec-in ec-cols","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-cols"><!-- wp:group {"className":"ec-stmt","layout":{"type":"default"}} -->
<div class="wp-block-group ec-stmt"><!-- wp:group {"className":"ec-statement sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ec-statement sp-stagger"><!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up">Most of eating well is plain meals.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up">Breakfast you will actually make,</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up">a lunch that survives the day,</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-line sp-reveal sp-reveal--up"} -->
<p class="ec-line sp-reveal sp-reveal--up">and a plan written with you, not for you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About the clinic</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ec-stmt__body"} -->
<p class="ec-stmt__body">We sit down together in a quiet room on Alder Row to talk through what you actually eat across an ordinary week. There are no forbidden foods, calorie counts, or complicated rules to memorize. Instead, we look at the meals you already know how to make, untangle the habits that leave you depleted by mid-afternoon, and agree on two or three practical adjustments you can maintain without turning your life upside down.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-stmt__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ec-stmt__photo"><?php echo eiyo_clinic_image( 'p04', '' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
