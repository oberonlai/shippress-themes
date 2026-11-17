<?php
/**
 * Title: Page: Book a table
 * Slug: kosame-hotpot/page-book
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: Photo stage with three photographs, the four booking steps, the booking form inside a static four-line frame (mailto fallback) and two link boxes.
 */
?>
<!-- wp:group {"className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split"><!-- wp:group {"className":"ks-stage ks-stage--n3","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage ks-stage--n3"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'booking-desk.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-stage__more" aria-hidden="true"><figure class="ks-stage__slide ks-stage__slide--2"><img src="<?php echo kosame_hotpot_img( 'kv-split-pot.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p01' ); ?>"/></figure><figure class="ks-stage__slide ks-stage__slide--3"><img src="<?php echo kosame_hotpot_img( 'room-long-table.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p09' ); ?>"/></figure></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ks-stage__dots" aria-hidden="true"><span class="ks-dot ks-dot--1"></span><span class="ks-dot ks-dot--2"></span><span class="ks-dot ks-dot--3"></span></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--a"} -->
<p class="ks-stage__phrase ks-stage__phrase--a"><?php echo esc_html( kosame_hotpot_t( 'phrase_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--b"} -->
<p class="ks-stage__phrase ks-stage__phrase--b"><?php echo esc_html( kosame_hotpot_t( 'phrase_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-col ks-col--inner","layout":{"type":"default"}} -->
<div class="wp-block-group ks-col ks-col--inner"><!-- wp:group {"anchor":"top","className":"ks-pagehead","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group ks-pagehead"><!-- wp:paragraph {"className":"ks-pagehead__kicker"} -->
<p class="ks-pagehead__kicker"><?php echo esc_html( kosame_hotpot_t( 'book_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-pagehead__h1"} -->
<h1 class="wp-block-heading ks-pagehead__h1"><?php echo esc_html( kosame_hotpot_t( 'book_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-pagehead__lead"} -->
<p class="ks-pagehead__lead"><?php echo esc_html( kosame_hotpot_t( 'book_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"one-way","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="one-way" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_vl_one-way' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_vt_one-way' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_steps_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-rows ks-rows--step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rows ks-rows--step sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--step","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--step"><!-- wp:paragraph {"className":"ks-row__num"} -->
<p class="ks-row__num"><?php echo esc_html( kosame_hotpot_t( 'book_st_n0' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__step"} -->
<p class="ks-row__step"><?php echo esc_html( kosame_hotpot_t( 'book_st_s0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--step","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--step"><!-- wp:paragraph {"className":"ks-row__num"} -->
<p class="ks-row__num"><?php echo esc_html( kosame_hotpot_t( 'book_st_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__step"} -->
<p class="ks-row__step"><?php echo esc_html( kosame_hotpot_t( 'book_st_s1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--step","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--step"><!-- wp:paragraph {"className":"ks-row__num"} -->
<p class="ks-row__num"><?php echo esc_html( kosame_hotpot_t( 'book_st_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__step"} -->
<p class="ks-row__step"><?php echo esc_html( kosame_hotpot_t( 'book_st_s2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-row ks-row--step","layout":{"type":"default"}} -->
<div class="wp-block-group ks-row ks-row--step"><!-- wp:paragraph {"className":"ks-row__num"} -->
<p class="ks-row__num"><?php echo esc_html( kosame_hotpot_t( 'book_st_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-row__step"} -->
<p class="ks-row__step"><?php echo esc_html( kosame_hotpot_t( 'book_st_s3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"request","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="request" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_vl_request' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_vt_request' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_req_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-frame ks-frame--static ks-frame--form","layout":{"type":"default"}} -->
<div class="wp-block-group ks-frame ks-frame--static ks-frame--form"><!-- wp:heading {"level":2,"className":"ks-frame__title"} -->
<h2 class="wp-block-heading ks-frame__title"><?php echo esc_html( kosame_hotpot_t( 'frame_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ks-frame__rule","layout":{"type":"default"}} -->
<div class="wp-block-group ks-frame__rule"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-formslot","layout":{"type":"default"}} -->
<div class="wp-block-group ks-formslot"><?php
ob_start(); ?>
<div class="wp-block-buttons ks-frame__btns"><div class="wp-block-button ks-btn ks-btn--frame"><a class="wp-block-button__link wp-element-button" href="mailto:table@kosame-hotpot.example?subject=<?php echo rawurlencode( kosame_hotpot_t( 'forms_book_subject' ) ); ?>"><?php echo esc_html( kosame_hotpot_t( 'forms_book_button' ) ); ?></a></div></div>
<p class="ks-frame__note"><?php echo esc_html( kosame_hotpot_t( 'forms_book_hint' ) ); ?></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) );
?></div>
<!-- /wp:group -->

<!-- wp:html -->
<span class="ks-frame__line ks-frame__line--top" aria-hidden="true"></span><span class="ks-frame__line ks-frame__line--right" aria-hidden="true"></span><span class="ks-frame__line ks-frame__line--bottom" aria-hidden="true"></span><span class="ks-frame__line ks-frame__line--left" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"anchor":"good-to-know","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="good-to-know" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_vl_good-to-know' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_vt_good-to-know' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'book_know_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/private-rooms/' ); ?>"><?php echo kosame_hotpot_lines( 'lb_rooms' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-linkbox sp-reveal sp-reveal--up"} -->
<p class="ks-linkbox sp-reveal sp-reveal--up"><a href="<?php echo kosame_hotpot_url( '/visit/' ); ?>"><?php echo kosame_hotpot_lines( 'lb_visit' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
