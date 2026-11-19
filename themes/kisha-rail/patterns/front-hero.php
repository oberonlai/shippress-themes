<?php
/**
 * Title: Home: framed window
 * Slug: kisha-rail/front-hero
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: The first screen: a rounded photo window with the headline upper-left, drifting rail lines and the Next departure card docked on its right edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-hero","layout":{"type":"default"}} -->
<section class="wp-block-group kr-hero">
<!-- wp:group {"className":"kr-win sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-win__img"} -->
<figure class="wp-block-image size-full kr-win__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-step-kv.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kr-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__fg">
<!-- wp:heading {"level":1,"className":"kr-h1"} -->
<h1 class="wp-block-heading kr-h1"><?php echo kisha_rail_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-sub"} -->
<p class="kr-sub"><?php echo esc_html( kisha_rail_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<svg class="kr-rails" viewBox="0 0 1360 740" preserveAspectRatio="none" aria-hidden="true" focusable="false"><defs><linearGradient id="kr-rg" x1="0" x2="1" y1="0" y2="0"><stop offset="0" stop-color="#FFFFFF" stop-opacity=".7"/><stop offset=".55" stop-color="#8C6450" stop-opacity=".55"/><stop offset="1" stop-color="#8C6450" stop-opacity="0"/></linearGradient></defs><g class="kr-rails__g" fill="none" stroke="url(#kr-rg)" stroke-width="1" vector-effect="non-scaling-stroke"><path d="M-40 470 C 380 330, 760 640, 1420 520"/><path d="M-40 475 C 380 335, 760 645, 1420 527"/><path d="M-40 480 C 380 340, 760 650, 1420 534"/><path d="M-40 485 C 380 345, 760 655, 1420 541"/><path d="M-40 490 C 380 350, 760 660, 1420 548"/><path d="M-40 495 C 380 355, 760 665, 1420 555"/><path d="M-40 500 C 380 360, 760 670, 1420 562"/><path d="M-40 505 C 380 365, 760 675, 1420 569"/><path d="M-40 510 C 380 370, 760 680, 1420 576"/><path d="M-40 515 C 380 375, 760 685, 1420 583"/><path d="M-40 520 C 380 380, 760 690, 1420 590"/><path d="M-40 525 C 380 385, 760 695, 1420 597"/><path d="M-40 530 C 380 390, 760 700, 1420 604"/><path d="M-40 535 C 380 395, 760 705, 1420 611"/><path d="M-40 540 C 380 400, 760 710, 1420 618"/><path d="M-40 545 C 380 405, 760 715, 1420 625"/><path d="M-40 550 C 380 410, 760 720, 1420 632"/><path d="M-40 555 C 380 415, 760 725, 1420 639"/><path d="M-40 560 C 380 420, 760 730, 1420 646"/><path d="M-40 565 C 380 425, 760 735, 1420 653"/><path d="M-40 570 C 380 430, 760 740, 1420 660"/><path d="M-40 575 C 380 435, 760 745, 1420 667"/><path d="M-40 580 C 380 440, 760 750, 1420 674"/><path d="M-40 585 C 380 445, 760 755, 1420 681"/><path d="M-40 590 C 380 450, 760 760, 1420 688"/><path d="M-40 595 C 380 455, 760 765, 1420 695"/><path d="M-40 600 C 380 460, 760 770, 1420 702"/><path d="M-40 605 C 380 465, 760 775, 1420 709"/><path d="M-40 610 C 380 470, 760 780, 1420 716"/><path d="M-40 615 C 380 475, 760 785, 1420 723"/><path d="M-40 620 C 380 480, 760 790, 1420 730"/><path d="M-40 625 C 380 485, 760 795, 1420 737"/><path d="M-40 630 C 380 490, 760 800, 1420 744"/><path d="M-40 635 C 380 495, 760 805, 1420 751"/><path d="M-40 640 C 380 500, 760 810, 1420 758"/><path d="M-40 645 C 380 505, 760 815, 1420 765"/></g></svg>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="kr-next" href="/tours/lakes-viaduct-line/"><span class="kr-next__hd"><?php echo esc_html( kisha_rail_t( 'next_hd' ) ); ?></span><img class="kr-next__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-lake-window.webp' ) ); ?>" alt="<?php echo esc_attr( kisha_rail_t( 'alt_p02' ) ); ?>"/><span class="kr-next__body"><span class="kr-next__name"><?php echo esc_html( kisha_rail_t( 'next_name' ) ); ?></span><span class="kr-next__date"><?php echo esc_html( kisha_rail_t( 'next_date' ) ); ?></span><span class="kr-next__seats"><?php echo esc_html( kisha_rail_t( 'next_seats' ) ); ?></span></span></a>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
