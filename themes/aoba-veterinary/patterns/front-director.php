<?php
/**
 * Title: Home: director greeting with a framed photograph
 * Slug: aoba-veterinary/front-director
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: The people: a centred seven-line greeting beside a 4:5 portrait with an offset thin frame and a round Director tag.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-section--ground av-director","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-section--ground av-director"><!-- wp:group {"align":"wide","className":"av-director__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-director__in"><!-- wp:group {"className":"av-director__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group av-director__text sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center","className":"av-label"} -->
<h2 class="wp-block-heading has-text-align-center av-label">A word from the director</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-greeting"} -->
<p class="has-text-align-center av-greeting">I founded Aoba Veterinary Clinic in 2014, after twelve years in a city referral hospital.<br>We see dogs and cats only, here at 214 Alder Street in Fairhaven.<br>A first consultation is 30 minutes, so the history can be told properly.<br>I direct the clinic and practise internal medicine.<br>Surgery, feline medicine, dentistry and nursing are done by named colleagues in this building.<br>You will be shown what we find, and you will have a written estimate before treatment.<br>The people who will look after your animal are listed on the team page.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow av-arrow--center"} -->
<div class="wp-block-buttons av-arrow av-arrow--center"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/team/">Meet the team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-director__side","layout":{"type":"default"}} -->
<div class="wp-block-group av-director__side"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"av-framed"} -->
<figure class="wp-block-image size-large av-framed"><img src="<?php echo esc_url( $av . 'p07-director.webp' ); ?>" alt="Dr. Elena Varga holding a grey cat and facing the camera"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"av-tag","layout":{"type":"default"}} -->
<div class="wp-block-group av-tag"><!-- wp:paragraph {"className":"av-tag__badge"} -->
<p class="av-tag__badge">Director</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-tag__name"} -->
<p class="av-tag__name">Dr. Elena Varga</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
