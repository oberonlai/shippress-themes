<?php
/**
 * Title: Home: visit the clinic, timetable and one booking link
 * Slug: aoba-veterinary/front-visit
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: Address, phone, the solid timetable block and an entrance photograph, closing on the single filled booking button.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-section av-visit","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-section av-visit"><!-- wp:group {"align":"wide","className":"av-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-visit__in"><!-- wp:group {"className":"av-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group av-visit__text"><!-- wp:heading {"className":"av-long av-long--small"} -->
<h2 class="wp-block-heading av-long av-long--small">Visit the clinic</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Aoba Veterinary Clinic, 214 Alder Street, Fairhaven.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-phone"} -->
<p class="av-phone"><a href="tel:+15550142300">+1 555 0142 300</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Monday to Friday, 9:00–12:30 and 15:30–19:00. Saturday, 9:00–12:30 and 15:30–17:00. Sunday and public holidays, closed. Urgent same-day slots run on weekdays. Out of hours, contact the regional emergency hospital.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"aoba-veterinary/timetable"} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"av-visit__photo"} -->
<figure class="wp-block-image size-large av-visit__photo"><img src="<?php echo esc_url( $av . 'p08-entrance.webp' ); ?>" alt="Clinic entrance with a glass door and a potted olive tree"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"av-visit__close","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-visit__close"><!-- wp:buttons {"className":"av-book"} -->
<div class="wp-block-buttons av-book"><!-- wp:button {"className":"av-book__btn"} -->
<div class="wp-block-button av-book__btn"><a class="wp-block-button__link wp-element-button" href="/book/">Book a visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"av-note"} -->
<p class="av-note">Urgent? Call before you come.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
