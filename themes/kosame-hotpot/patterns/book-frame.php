<?php
/**
 * Title: Booking frame: the single way to book
 * Slug: kosame-hotpot/book-frame
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: A centred heading with a 1px underline, one solid azuki button and four 3px lines that draw around the box.
 */
?>
<!-- wp:group {"className":"ks-frame sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-frame sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ks-frame__title"} -->
<h2 class="wp-block-heading ks-frame__title"><?php echo esc_html( kosame_hotpot_t( 'frame_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ks-frame__rule","layout":{"type":"default"}} -->
<div class="wp-block-group ks-frame__rule"></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-frame__btns"} -->
<div class="wp-block-buttons ks-frame__btns"><!-- wp:button {"className":"ks-btn ks-btn--frame"} -->
<div class="wp-block-button ks-btn ks-btn--frame"><a class="wp-block-button__link wp-element-button" href="<?php echo kosame_hotpot_url( '/book/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'book_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ks-frame__note"} -->
<p class="ks-frame__note"><?php echo esc_html( kosame_hotpot_t( 'frame_note1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-frame__note"} -->
<p class="ks-frame__note"><?php echo esc_html( kosame_hotpot_t( 'frame_note2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="ks-frame__line ks-frame__line--top" aria-hidden="true"></span><span class="ks-frame__line ks-frame__line--right" aria-hidden="true"></span><span class="ks-frame__line ks-frame__line--bottom" aria-hidden="true"></span><span class="ks-frame__line ks-frame__line--left" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->
