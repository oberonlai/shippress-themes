<?php
/**
 * Title: Page: Ask about dates
 * Slug: seseragi-house/page-ask
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: Ask about dates: the one way in three prose rows, the booking form slot with a mailto fallback, the hours and the rates.
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-hero sese-hero--in","layout":{"type":"default"}} -->
<section class="wp-block-group sese-hero sese-hero--in">
<!-- wp:group {"className":"sese-win sese-win--in sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sese-win--in sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-win__img"} -->
<figure class="wp-block-image size-full sese-win__img"><img src="<?php echo esc_url( seseragi_house_img( 'tray-coffee-sill.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg">
<!-- wp:heading {"level":1,"className":"sese-h1 sese-h1--page"} -->
<h1 class="wp-block-heading sese-h1 sese-h1--page"><?php echo seseragi_house_lines( 'ask_in_h1' ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-sheet sese-sheet--in","layout":{"type":"default"}} -->
<div class="wp-block-group sese-sheet sese-sheet--in">
<!-- wp:paragraph {"className":"sese-sheet__text"} -->
<p class="sese-sheet__text"><?php echo esc_html( seseragi_house_t( 'ask_in_sheet' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in sese-in--first","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in sese-in--first">
<!-- wp:group {"className":"sese-ask__grid sese-ask__grid--in","layout":{"type":"default"}} -->
<div class="wp-block-group sese-ask__grid sese-ask__grid--in">
<!-- wp:group {"className":"sese-ask__text","layout":{"type":"default"}} -->
<div class="wp-block-group sese-ask__text">
<!-- wp:paragraph {"className":"sese-crumb"} -->
<p class="sese-crumb"><a href="/"><?php echo esc_html( seseragi_house_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( seseragi_house_t( 'crumb_ask' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-lede"} -->
<p class="sese-lede"><?php echo esc_html( seseragi_house_t( 'ask_in_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'ask_in_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'ask_in_s1_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sese-lrows--plain sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sese-lrows--plain sp-stagger">
<!-- wp:group {"className":"sese-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-row__n"} -->
<p class="sese-row__n"><?php echo esc_html( seseragi_house_t( 'ar1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-row__t"} -->
<p class="sese-row__t"><?php echo esc_html( seseragi_house_t( 'ar1_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sese-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-row__n"} -->
<p class="sese-row__n"><?php echo esc_html( seseragi_house_t( 'ar2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-row__t"} -->
<p class="sese-row__t"><?php echo esc_html( seseragi_house_t( 'ar2_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sese-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-row__n"} -->
<p class="sese-row__n"><?php echo esc_html( seseragi_house_t( 'ar3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-row__t"} -->
<p class="sese-row__t"><?php echo esc_html( seseragi_house_t( 'ar3_t' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<?php
ob_start(); ?>
<!-- wp:buttons {"className":"sese-btn-wrap"} -->
<div class="wp-block-buttons sese-btn-wrap"><!-- wp:button {"className":"sese-btn"} -->
<div class="wp-block-button sese-btn"><a class="wp-block-button__link wp-element-button" href="mailto:stay@seseragihouse.example?subject=<?php echo esc_attr( rawurlencode( seseragi_house_t( 'ask_subject' ) ) ); ?>"><?php echo esc_html( seseragi_house_t( 'ask_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?>
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-hrs sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hrs sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"sese-eyebrow"} -->
<p class="sese-eyebrow"><?php echo esc_html( seseragi_house_t( 'hrs_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l1' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v1' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l2' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l3' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v3' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'hrs_l4' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'hrs_v4' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'side_phone_l' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'side_phone_v' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-hrs__row"} -->
<p class="sese-hrs__row"><span class="sese-hrs__l"><?php echo esc_html( seseragi_house_t( 'side_email_l' ) ); ?></span><span class="sese-hrs__v"><?php echo esc_html( seseragi_house_t( 'side_email_v' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sese-vt sese-vt--in"} -->
<p class="sese-vt sese-vt--in"><?php echo esc_html( seseragi_house_t( 'ask_in_vt' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-in","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-in">
<!-- wp:group {"className":"sese-col sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col sp-reveal sp-reveal--up ">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'ask_in_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'ask_in_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-col ","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col ">
<!-- wp:heading {"level":2,"className":"sese-h2"} -->
<h2 class="wp-block-heading sese-h2"><?php echo esc_html( seseragi_house_t( 'ask_in_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-p"} -->
<p class="sese-p"><?php echo esc_html( seseragi_house_t( 'ask_in_s3_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-wide","layout":{"type":"default"}} -->
<div class="wp-block-group sese-wide">
<!-- wp:table {"hasFixedLayout":false,"className":"sese-rates"} -->
<figure class="wp-block-table sese-rates"><table><thead><tr><th><?php echo esc_html( seseragi_house_t( 'rates_h_item' ) ); ?></th><th><?php echo esc_html( seseragi_house_t( 'rates_h_detail' ) ); ?></th><th class="sese-rates__p"><?php echo esc_html( seseragi_house_t( 'rates_h_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( seseragi_house_t( 'room2' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'room3' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'room1' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'room4' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'room4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'rate_i5' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d5' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( seseragi_house_t( 'rate_i6' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_d6' ) ); ?></td><td><?php echo esc_html( seseragi_house_t( 'rate_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sese-rates__note"} -->
<p class="sese-rates__note"><?php echo esc_html( seseragi_house_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
