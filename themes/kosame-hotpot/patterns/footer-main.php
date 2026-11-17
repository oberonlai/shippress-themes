<?php
/**
 * Title: Footer: identity, page index and The Pot Letter link
 * Slug: kosame-hotpot/footer-main
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: Light grey footer: seal, address, hours, contact, an index of every page and a link to The Pot Letter.
 */
?>
<!-- wp:group {"className":"ks-foot","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ks-foot"><!-- wp:group {"className":"ks-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__in"><!-- wp:group {"className":"ks-foot__id","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__id"><!-- wp:html -->
<svg class="ks-foot__mark" width="56" height="56" viewBox="0 0 88 88" aria-hidden="true" focusable="false"><circle cx="44" cy="44" r="44" fill="#96514D"/><circle cx="44" cy="44" r="31" fill="none" stroke="#E7E7E7" stroke-width="2"/><line x1="44" y1="13" x2="44" y2="75" stroke="#E7E7E7" stroke-width="2"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-foot__name"} -->
<p class="ks-foot__name"><?php echo esc_html( kosame_hotpot_t( 'wordmark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__addr"} -->
<p class="ks-foot__addr"><?php echo kosame_hotpot_lines( 'foot_addr' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__addr"} -->
<p class="ks-foot__addr"><?php echo kosame_hotpot_lines( 'foot_hours' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__addr"} -->
<p class="ks-foot__addr"><a href="tel:+441632960527"><?php echo esc_html( kosame_hotpot_t( 'foot_phone' ) ); ?></a><br><a href="mailto:table@kosame-hotpot.example"><?php echo esc_html( kosame_hotpot_t( 'foot_email' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-foot__idx","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__idx"><!-- wp:paragraph {"className":"ks-foot__h"} -->
<p class="ks-foot__h"><?php echo esc_html( kosame_hotpot_t( 'foot_index' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ks-foot__list"} -->
<ul class="wp-block-list ks-foot__list"><!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/broths/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_broths' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/courses/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_courses' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/private-rooms/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_rooms' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/book/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'book_cta' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/visit/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_visit' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/about/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_about' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/contact/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_contact' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/newsletter/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'letter_title' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/journal/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_journal' ) ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="<?php echo kosame_hotpot_url( '/privacy/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'f_privacy' ) ); ?></a></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-foot__more","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__more"><!-- wp:paragraph {"className":"ks-foot__link"} -->
<p class="ks-foot__link"><a href="<?php echo kosame_hotpot_url( '/newsletter/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'foot_letter' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-foot__copy"} -->
<p class="ks-foot__copy"><?php echo esc_html( kosame_hotpot_t( 'foot_copy' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
