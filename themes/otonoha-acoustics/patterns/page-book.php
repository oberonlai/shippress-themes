<?php
/**
 * Title: Page: book a room survey
 * Slug: otonoha-acoustics/page-book
 * Categories: otonoha-acoustics
 * Inserter: false
 * Viewport Width: 1440
 * Description: Page: book a room survey: page head with four room cards on the band seam, five booking rows, what to send, the form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-pagehead oto-pagehead--cards","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oto-pagehead oto-pagehead--cards"><!-- wp:group {"className":"oto-pagehead__band","layout":{"type":"default"}} -->
<div class="wp-block-group oto-pagehead__band"><!-- wp:post-title {"level":1,"className":"oto-pagehead__h"} /--><!-- wp:paragraph {"className":"oto-ghost"} -->
<p class="oto-ghost" aria-hidden="true"><?php echo esc_html( otonoha_acoustics_t( 'ghost_book' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group oto-sheet"><!-- wp:heading {"level":2,"className":"oto-sr"} -->
<h2 class="wp-block-heading oto-sr"><?php echo esc_html( otonoha_acoustics_t( 'book_which_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"oto-cardrow","layout":{"type":"default"}} -->
<div class="wp-block-group oto-cardrow"><!-- wp:group {"className":"oto-card","layout":{"type":"default"}} -->
<div class="wp-block-group oto-card"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-card__img"} -->
<figure class="wp-block-image size-large oto-card__img"><img src="<?php echo otonoha_acoustics_img( 'p02-auditorium.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"oto-card__l"} -->
<p class="oto-card__l"><a href="<?php echo esc_url( home_url( '/rooms/#auditorium' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'room_1' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-card__c"} -->
<p class="oto-card__c"><?php echo esc_html( otonoha_acoustics_t( 'room_1_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-card","layout":{"type":"default"}} -->
<div class="wp-block-group oto-card"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-card__img"} -->
<figure class="wp-block-image size-large oto-card__img"><img src="<?php echo otonoha_acoustics_img( 'p03-classroom.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"oto-card__l"} -->
<p class="oto-card__l"><a href="<?php echo esc_url( home_url( '/rooms/#classroom' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'room_2' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-card__c"} -->
<p class="oto-card__c"><?php echo esc_html( otonoha_acoustics_t( 'room_2_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-card","layout":{"type":"default"}} -->
<div class="wp-block-group oto-card"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-card__img"} -->
<figure class="wp-block-image size-large oto-card__img"><img src="<?php echo otonoha_acoustics_img( 'p04-small-hall.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"oto-card__l"} -->
<p class="oto-card__l"><a href="<?php echo esc_url( home_url( '/rooms/#small-hall' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'room_3' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-card__c"} -->
<p class="oto-card__c"><?php echo esc_html( otonoha_acoustics_t( 'room_3_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-card","layout":{"type":"default"}} -->
<div class="wp-block-group oto-card"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-card__img"} -->
<figure class="wp-block-image size-large oto-card__img"><img src="<?php echo otonoha_acoustics_img( 'p05-open-office.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"oto-card__l"} -->
<p class="oto-card__l"><a href="<?php echo esc_url( home_url( '/rooms/#open-office' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'room_4' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-card__c"} -->
<p class="oto-card__c"><?php echo esc_html( otonoha_acoustics_t( 'room_4_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"oto-intro"} -->
<p class="oto-intro"><?php echo esc_html( otonoha_acoustics_t( 'book_page_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( otonoha_acoustics_t( 'book_steps_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"oto-rows","layout":{"type":"default"}} -->
<div class="wp-block-group oto-rows"><!-- wp:group {"className":"oto-row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row"><!-- wp:paragraph {"className":"oto-row__l"} -->
<p class="oto-row__l"><?php echo esc_html( otonoha_acoustics_t( 'bk_1_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-row__t"} -->
<p class="oto-row__t"><strong><?php echo esc_html( otonoha_acoustics_t( 'bk_1_t' ) ); ?></strong> <?php echo esc_html( otonoha_acoustics_t( 'bk_1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row"><!-- wp:paragraph {"className":"oto-row__l"} -->
<p class="oto-row__l"><?php echo esc_html( otonoha_acoustics_t( 'bk_2_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-row__t"} -->
<p class="oto-row__t"><strong><?php echo esc_html( otonoha_acoustics_t( 'bk_2_t' ) ); ?></strong> <?php echo esc_html( otonoha_acoustics_t( 'bk_2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row"><!-- wp:paragraph {"className":"oto-row__l"} -->
<p class="oto-row__l"><?php echo esc_html( otonoha_acoustics_t( 'bk_3_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-row__t"} -->
<p class="oto-row__t"><strong><?php echo esc_html( otonoha_acoustics_t( 'bk_3_t' ) ); ?></strong> <?php echo esc_html( otonoha_acoustics_t( 'bk_3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row"><!-- wp:paragraph {"className":"oto-row__l"} -->
<p class="oto-row__l"><?php echo esc_html( otonoha_acoustics_t( 'bk_4_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-row__t"} -->
<p class="oto-row__t"><strong><?php echo esc_html( otonoha_acoustics_t( 'bk_4_t' ) ); ?></strong> <?php echo esc_html( otonoha_acoustics_t( 'bk_4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"oto-row","layout":{"type":"default"}} -->
<div class="wp-block-group oto-row"><!-- wp:paragraph {"className":"oto-row__l"} -->
<p class="oto-row__l"><?php echo esc_html( otonoha_acoustics_t( 'bk_5_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-row__t"} -->
<p class="oto-row__t"><strong><?php echo esc_html( otonoha_acoustics_t( 'bk_5_t' ) ); ?></strong> <?php echo esc_html( otonoha_acoustics_t( 'bk_5_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-fig"} -->
<figure class="wp-block-image size-large oto-fig"><img src="<?php echo otonoha_acoustics_img( 'p12-open-office-floor.webp' ); ?>" alt="<?php echo otonoha_acoustics_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( otonoha_acoustics_t( 'book_s2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html( otonoha_acoustics_t( 'book_s2_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"anchor":"request"} -->
<h2 class="wp-block-heading" id="request"><?php echo esc_html( otonoha_acoustics_t( 'book_page_form_h' ) ); ?></h2>
<!-- /wp:heading -->
<?php
ob_start(); ?>
<p class="oto-pill oto-pill--ink"><a href="mailto:survey@otonoha-acoustics.example?subject=<?php echo rawurlencode( otonoha_acoustics_t( 'book_mail_subject' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'book_email_button' ) ); ?></a></p>
<?php
$fallback = ob_get_clean();
echo shippress_form_slot( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	array(
		'kind'     => 'contact',
		'fallback' => $fallback,
	)
);
?></div>
<!-- /wp:group -->
