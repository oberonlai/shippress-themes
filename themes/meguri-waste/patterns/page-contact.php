<?php
/**
 * Title: Page: Set your schedule
 * Slug: meguri-waste/page-contact
 * Categories: meguri-waste
 * Description: Inner page: lead band, a four-step pictogram line, the contact form slot (a form plugin when active, otherwise a mailto button), depot and hours.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-wash mw-wash--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-wash mw-wash--lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p16' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p16' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'pg_contact_t' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'pg_contact_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'ct_h0' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"mw-line sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mw-line sp-stagger"><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'ct1_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'phone' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'ct1_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'ct2_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'plan' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'ct2_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'ct3_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'calendar' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'ct3_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-step sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-step sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"mw-step__time"} -->
<p class="mw-step__time"><?php echo esc_html( meguri_waste_t( 'ct4_time' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<span class="mw-step__ico"><?php echo meguri_waste_icon( 'truck' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
<!-- /wp:html --><!-- wp:paragraph {"className":"mw-step__label"} -->
<p class="mw-step__label"><?php echo esc_html( meguri_waste_t( 'ct4_label' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"mw-prose mw-after"} -->
<p class="mw-prose mw-after"><?php echo esc_html( meguri_waste_t( 'ct_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-form-sec mw-sec--paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-form-sec mw-sec--paper"><!-- wp:group {"className":"mw-wrap mw-form-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap mw-form-wrap"><!-- wp:heading {"level":2,"className":"mw-h2"} -->
<h2 class="wp-block-heading mw-h2"><?php echo esc_html( meguri_waste_t( 'pg_contact_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose mw-after"} -->
<p class="mw-prose mw-after"><?php echo esc_html( meguri_waste_t( 'pg_contact_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"mw-form-slot","layout":{"type":"default"}} -->
<div class="wp-block-group mw-form-slot"><?php
ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="mailto:desk@meguri-waste.example"><?php echo esc_html( meguri_waste_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'ct_h1' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'ct_p1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:list {"className":"mw-facts mw-facts--rows"} -->
<ul class="wp-block-list mw-facts mw-facts--rows"><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'ft_hours1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'ft_hours2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( meguri_waste_t( 'ft_hours3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --><!-- wp:paragraph {"className":"mw-box mw-box--alert mw-boxline"} -->
<p class="mw-box mw-box--alert mw-boxline"><?php echo esc_html( meguri_waste_t( 'hd_missed' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-sec--paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-sec--paper"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'ct_h2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'ct_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
