<?php
/**
 * Title: Home: signs worth a visit, with a floated cat photo
 * Slug: aoba-veterinary/front-signs
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: The problem: a short paragraph, a two-column ruled list of eight signs and a vertical photograph of a cat's ear being checked.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-signs","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-signs"><!-- wp:group {"align":"wide","className":"av-signs__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-signs__in"><!-- wp:group {"className":"av-signs__text","layout":{"type":"default"}} -->
<div class="wp-block-group av-signs__text"><!-- wp:heading {"className":"av-long"} -->
<h2 class="wp-block-heading av-long">Signs that are worth a visit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Some changes can be watched for a day. Others should be seen sooner. If your dog or cat seems clearly unwell, call the clinic. On weekdays we keep urgent same-day slots, and a nurse can tell you whether to come in or whether it can wait until a booked visit.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"av-signlist"} -->
<ul class="wp-block-list av-signlist"><!-- wp:list-item -->
<li>Not eating for more than a day</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Limping that lasts beyond 24 hours</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Drinking much more than usual</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Repeated vomiting or diarrhoea</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Scratching ears or shaking the head</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Breathing faster at rest</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>A cat hiding more than usual</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lumps that change size</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"av-note"} -->
<p class="av-note">If you are unsure, call us — a nurse will tell you whether it can wait. You do not need a diagnosis before you phone. Bring a short note of when the sign started, and a photo or video if you have one.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"av-signs__photo"} -->
<figure class="wp-block-image size-large av-signs__photo"><img src="<?php echo esc_url( $av . 'p04-ear.webp' ); ?>" alt="Vet gently checking a cat’s ear with an otoscope"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
