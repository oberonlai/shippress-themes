<?php
/**
 * Title: Home: visit (hours, address, telephone)
 * Slug: nemuri-clinic/front-visit
 * Categories: nemuri-clinic
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Hours table with dots, address, large telephone number and an entrance photograph.
 */
?>
<!-- wp:group {"align":"full","className":"nc-sec nc-visit","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nc-sec nc-visit"><!-- wp:group {"className":"nc-head","layout":{"type":"default"}} -->
<div class="wp-block-group nc-head"><!-- wp:heading {"className":"nc-head__t"} -->
<h2 class="wp-block-heading nc-head__t">Visit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label">Hours and access</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nc-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group nc-visit__in"><!-- wp:group {"className":"nc-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group nc-visit__text"><!-- wp:html -->
<table class="nc-hours"><thead><tr><th scope="col"><span class="screen-reader-text">Service</span></th><th scope="col">Mon</th><th scope="col">Tue</th><th scope="col">Wed</th><th scope="col">Thu</th><th scope="col">Fri</th><th scope="col">Sat</th><th scope="col">Sun</th></tr></thead><tbody>
<tr><th scope="row">Consultations<span>13:00–17:00</span></th><td class="x" data-d="Mon">—</td><td data-d="Tue">●</td><td data-d="Wed">●</td><td data-d="Thu">●</td><td data-d="Fri">●</td><td data-d="Sat">▲</td><td class="x" data-d="Sun">—</td></tr>
<tr><th scope="row">Evening<span>17:30–21:00</span></th><td class="x" data-d="Mon">—</td><td data-d="Tue">●</td><td data-d="Wed">●</td><td data-d="Thu">●</td><td data-d="Fri">●</td><td class="x" data-d="Sat">—</td><td class="x" data-d="Sun">—</td></tr>
<tr><th scope="row">Night study<span>check-in 20:30, out 07:00</span></th><td class="x" data-d="Mon">—</td><td data-d="Tue">●</td><td data-d="Wed">●</td><td data-d="Thu">●</td><td class="x" data-d="Fri">—</td><td class="x" data-d="Sat">—</td><td class="x" data-d="Sun">—</td></tr>
</tbody></table>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nc-visit__note"} -->
<p class="nc-visit__note">▲ Saturday 09:00–15:00. Closed Sunday, Monday and public holidays.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-visit__addr"} -->
<p class="nc-visit__addr">Suite 210, 88 Alder Lane<br>Seattle, WA 98101</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-bigtel"} -->
<p class="nc-bigtel"><span>Tel.</span> <a href="tel:+12065550142">(206) 555-0142</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-more"} -->
<p class="nc-more"><a href="/first-visit/">Book a first consultation</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nc-visit__img"} -->
<figure class="wp-block-image size-large nc-visit__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/visit-entrance.webp' ) ); ?>" alt="<?php echo esc_attr( 'Glass entrance doors of the clinic looking out toward evening city streetlights.' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
