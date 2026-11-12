<?php
/**
 * Title: Home: set your schedule and collection notes
 * Slug: meguri-waste/front-schedule
 * Categories: meguri-waste
* Viewport Width: 1440
 * Description: Closing wash band with the facts and the repeated call to action, then a paper band with the newsletter slot.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","anchor":"schedule","className":"mw-wash mw-wash--schedule","layout":{"type":"default"}} -->
<section id="schedule" class="wp-block-group alignfull mw-wash mw-wash--schedule"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p10' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text sp-reveal sp-reveal--down"><!-- wp:heading {"level":2,"className":"mw-h2"} -->
<h2 class="wp-block-heading mw-h2"><?php echo esc_html( meguri_waste_t( 'sch_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'sch_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mw-facts"} -->
<ul class="wp-block-list mw-facts"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sch_f1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sch_f2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'sch_f3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"mw-cta-row"} -->
<div class="wp-block-buttons mw-cta-row"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="/set-your-schedule/"><?php echo esc_html( meguri_waste_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"mw-phone"} -->
<p class="mw-phone"><?php echo esc_html( meguri_waste_t( 'sch_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","tagName":"section","anchor":"notes","className":"mw-sec mw-notes","layout":{"type":"default"}} -->
<section id="notes" class="wp-block-group alignfull mw-sec mw-notes"><!-- wp:group {"className":"mw-wrap mw-notes__cols","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-notes__cols"><!-- wp:group {"className":"mw-notes__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-notes__text"><!-- wp:heading {"level":2,"className":"mw-h2"} -->
<h2 class="wp-block-heading mw-h2"><?php echo esc_html( meguri_waste_t( 'notes_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'notes_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mw-notes__form","layout":{"type":"default"}} -->
<div class="wp-block-group mw-notes__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'desk@meguri-waste.example', 'label' => meguri_waste_t( 'forms_email' ), 'submit' => meguri_waste_t( 'forms_subscribe' ), 'notice' => meguri_waste_t( 'forms_mail_notice' ), 'subject' => meguri_waste_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
