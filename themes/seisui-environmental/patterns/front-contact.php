<?php
/**
 * Title: Home: CONTACT, the office on a pale band
 * Slug: seisui-environmental/front-contact
 * Categories: seisui-environmental
 * Keywords: home
 * Viewport Width: 1440
 * Description: Pale band with the ghost word CONTACT, an office-entrance photograph and the address, hours, phone and email.
 */
$ss = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"anchor":"contact","className":"ss-sec ss-contact","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section id="contact" class="wp-block-group alignfull ss-sec ss-contact"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-ghost","align":"center"} -->
<p class="ss-ghost has-text-align-center" aria-hidden="true">CONTACT</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2","align":"center"} -->
<h2 class="wp-block-heading has-text-align-center ss-h2">The office on Millrace Lane</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-contact__row","align":"wide","layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignwide ss-contact__row"><!-- wp:columns {"className":"ss-contact__cols"} -->
<div class="wp-block-columns ss-contact__cols"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column " style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ss-photo ss-photo--r10"} -->
<figure class="wp-block-image size-full ss-photo ss-photo--r10"><img src="<?php echo esc_url( $ss . 'p11.webp' ); ?>" alt="Bright small office entrance with plants, wellies and a sample cool box"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column " style="flex-basis:50%"><!-- wp:paragraph {"className":"ss-body"} -->
<p class="ss-body">The office and sample store are at 14 Millrace Lane, Alder Bridge, on the River Wend. Come for a scoping conversation or to leave a brief; field days themselves are arranged from here.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-body"} -->
<p class="ss-body">Hours are Monday to Friday, 08:30 to 17:30. Field days are by arrangement. The office is closed at weekends and on public holidays.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ss-body ss-contact__lines"} -->
<p class="ss-body ss-contact__lines">Phone <a href="tel:+15550142300">+1 555 0142 300</a><br>Email <a href="mailto:hello@seisui-environmental.example">hello@seisui-environmental.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {} -->
<div class="wp-block-buttons "><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@seisui-environmental.example">Ask for a scoping call</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
