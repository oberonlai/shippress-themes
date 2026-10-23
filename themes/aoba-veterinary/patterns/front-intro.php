<?php
/**
 * Title: Home: single-column narrative with a wide reception photo
 * Slug: aoba-veterinary/front-intro
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: An off-white band: section label, a left-aligned long-form heading, two paragraphs and a wide 16:9 reception photograph.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-intro","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-intro"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">Our clinic</h2>
<!-- /wp:heading -->

<!-- wp:heading {"className":"av-long"} -->
<h2 class="wp-block-heading av-long">A small clinic that takes the time to listen.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Most dogs and cats who come to Aoba Veterinary Clinic are not in crisis. An appetite has dropped, a walk has shortened, or an owner wants a proper look before a small change becomes a larger one. We are one clinic on Alder Street in Fairhaven, founded in 2014, and we see dogs and cats only. Appointments are long enough to hear the history rather than fit it into a few minutes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A first consultation is 30 minutes and includes a full examination. You are shown what we find, and if treatment is needed you receive a written estimate before it starts. Cats settle in their own waiting room. Within 48 hours a nurse calls to ask how things are going at home. The same people stay with the case from that first conversation through to the follow-up.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none","className":"av-wide"} -->
<figure class="wp-block-image alignwide size-large av-wide"><img src="<?php echo esc_url( $av . 'p14-reception.webp' ); ?>" alt="Owner with a cat carrier talking to a receptionist across an oak desk"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
