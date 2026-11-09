<?php
/**
 * Title: Notes: archive head
 * Slug: tabiji-clinic/notes-head-archive
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, notes
 * Viewport Width: 1440
 * Description: Inset rounded photo frame with a notch card holding the flag label and the page title.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-airport.webp' ) ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.6},"className":"tc-ph alignwide sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover tc-ph alignwide sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Traveller with a backpack walking across a sunlit, out-of-focus airport concourse." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-airport.webp' ) ); ?>" style="object-position:50% 60%" data-object-fit="cover" data-object-position="50% 60%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"tc-notch tc-notch--ph","layout":{"type":"default"}} -->
<div class="wp-block-group tc-notch tc-notch--ph"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'notes_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query-title {"type":"archive","level":1,"className":"tc-ph__title"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
