<?php
/**
 * Title: Closing call to action
 * Slug: shizuka-hearing/front-cta
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Full-bleed parallax cover with a white strip heading and the booking button.
 */
?>
<!-- wp:cover {"alt":"<?php echo esc_attr( shizuka_hearing_alts()['h15'] ); ?>","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h15.webp' ) ); ?>","customOverlayColor":"#49565e","dimRatio":30,"minHeight":560,"minHeightUnit":"px","align":"full","className":"sh-cta sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull sh-cta sp-parallax" style="min-height:560px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shizuka_hearing_alts()['h15'] ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h15.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#49565e"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":2,"className":"sh-cta__title"} -->
<h2 class="wp-block-heading sh-cta__title"><span class="sh-strip__in">Hear the whole sentence.</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-cta__text"} -->
<p class="sh-cta__text">Book a time that suits you. The clinic is open Monday to Friday, 9:00–18:00, on Thursday until 20:00, and on Saturday from 9:00 to 13:00.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"sh-pill "} -->
<div class="wp-block-button sh-pill "><a class="wp-block-button__link wp-element-button" href="/contact/">Book a hearing check</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
