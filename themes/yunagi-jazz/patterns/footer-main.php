<?php
/**
 * Title: Footer: facts, links and the lineup letter
 * Slug: yunagi-jazz/footer-main
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Ink footer with address, hours, link list and the newsletter slot, plus the fixed plum quarter-disc date badge.
 */
?>
<!-- wp:group {"className":"yj-foot","layout":{"type":"default"}} -->
<div class="wp-block-group yj-foot">
<!-- wp:group {"className":"yj-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group yj-foot__grid">
<!-- wp:group {"className":"yj-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yj-foot__col">
<!-- wp:site-title {"level":0,"className":"yj-foot__logo"} /-->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_dates' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><a href="mailto:hello@yunagijazz.example">hello@yunagijazz.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_phone' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yj-foot__col">
<!-- wp:paragraph {"className":"yj-foot__k"} -->
<p class="yj-foot__k"><?php echo esc_html( yunagi_jazz_t( 'ft_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group yj-foot__col">
<!-- wp:paragraph {"className":"yj-foot__k"} -->
<p class="yj-foot__k"><?php echo esc_html( yunagi_jazz_t( 'ft_links_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/lineup/"><?php echo esc_html( yunagi_jazz_t( 'ft_lineup' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/schedule/"><?php echo esc_html( yunagi_jazz_t( 'ft_schedule' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/tickets/"><?php echo esc_html( yunagi_jazz_t( 'ft_tickets' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/venue/"><?php echo esc_html( yunagi_jazz_t( 'ft_lawn' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/about/"><?php echo esc_html( yunagi_jazz_t( 'ft_about' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/visit/"><?php echo esc_html( yunagi_jazz_t( 'ft_visit' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__l"} -->
<p class="yj-foot__l"><a href="/contact/"><?php echo esc_html( yunagi_jazz_t( 'ft_contact' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-foot__col yj-foot__news","layout":{"type":"default"}} -->
<div class="wp-block-group yj-foot__col yj-foot__news">
<!-- wp:paragraph {"className":"yj-foot__k"} -->
<p class="yj-foot__k"><?php echo esc_html( yunagi_jazz_t( 'ft_news_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yj-foot__a"} -->
<p class="yj-foot__a"><?php echo esc_html( yunagi_jazz_t( 'ft_news_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo shippress_form_slot( array(
	'kind' => 'newsletter',
	'email' => 'hello@yunagijazz.example',
	'label' => yunagi_jazz_t( 'forms_email' ),
	'submit' => yunagi_jazz_t( 'forms_subscribe' ),
	'notice' => yunagi_jazz_t( 'forms_mail_notice' ),
	'subject' => yunagi_jazz_t( 'forms_mail_subject' ),
) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yj-foot__fine"} -->
<p class="yj-foot__fine"><?php echo esc_html( yunagi_jazz_t( 'ft_fine' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="yj-badge" href="/tickets/"><span class="yj-badge__y">2027</span><span class="yj-badge__d"><?php echo esc_html( yunagi_jazz_t( 'badge_d' ) ); ?></span><span class="yj-badge__m"><?php echo esc_html( yunagi_jazz_t( 'badge_m' ) ); ?></span><span class="yj-badge__r"></span><span class="yj-badge__v"><?php echo esc_html( yunagi_jazz_t( 'badge_v' ) ); ?></span></a>
<!-- /wp:html -->
