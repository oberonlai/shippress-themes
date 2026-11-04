<?php
/**
 * Title: Home: framed window cover
 * Slug: kanjo-college/front-hero
 * Categories: kanjo-college
 * Keywords: hero, window, college
 * Viewport Width: 1440
 * Description: Two-line headline on a ruled ground, a 48 px rounded photograph window with a vertical caption, index and outline stickers, and a ledger path that winds to a signpost.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero"><!-- wp:html -->
<?php echo kanjo_college_svg( 'ledger-hero' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:group {"align":"wide","className":"kc-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-hero__in"><!-- wp:group {"className":"kc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text"><!-- wp:paragraph {"className":"kc-chip kc-chip--hero"} -->
<p class="kc-chip kc-chip--hero"><?php echo wp_kses_post( kanjo_college_t( 'k526ba9a1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1"} -->
<h1 class="wp-block-heading kc-h1"><?php echo wp_kses_post( kanjo_college_t( 'k52a8793e' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-lead"} -->
<p class="kc-lead"><?php echo wp_kses_post( kanjo_college_t( 'kde4ed2d1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-hero__links"} -->
<div class="wp-block-buttons kc-hero__links"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/papers/"><?php echo wp_kses_post( kanjo_college_t( 'kf8d183bb' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/#pace"><?php echo wp_kses_post( kanjo_college_t( 'k00b70c29' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<div class="kc-sign">
<?php echo kanjo_college_svg( 'path-signpost' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
	<div class="kc-sign__post"><span class="kc-sign__pole" aria-hidden="true"></span>
		<ul class="kc-sign__arms">
			<li><a href="/papers/"><?php echo wp_kses_post( kanjo_college_t( 'k60b1a0c2' ) ); ?></a></li>
			<li><a href="/#pace"><?php echo wp_kses_post( kanjo_college_t( 'k01237971' ) ); ?></a></li>
			<li><a href="/taking-a-place/"><?php echo wp_kses_post( kanjo_college_t( 'k78d77a0b' ) ); ?></a></li>
		</ul>
	</div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-win","layout":{"type":"default"}} -->
<div class="wp-block-group kc-win"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-win__img sp-parallax"} -->
<figure class="wp-block-image size-full kc-win__img sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01.webp' ) ); ?>" alt="<?php echo esc_attr( kanjo_college_t( 'aad22fc04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-win__cap"} -->
<p class="kc-win__cap"><?php echo wp_kses_post( kanjo_college_t( 'k551e17ef' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-win__idx"} -->
<p class="kc-win__idx">01</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="kc-stk kc-stk--a" aria-hidden="true"></span><span class="kc-stk kc-stk--b" aria-hidden="true"><?php echo kanjo_college_svg( 'squiggle' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span><span class="kc-stk kc-stk--c" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kc-pager" aria-hidden="true"><span>1</span><i></i><span>5</span></div>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
