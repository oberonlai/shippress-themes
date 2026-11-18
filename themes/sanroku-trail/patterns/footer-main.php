<?php
/**
 * Title: Footer: dark band
 * Slug: sanroku-trail/footer-main
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Dark olive footer: wordmark, race office address and hours, the series links and the small legal line. No form.
 */
?>
<!-- wp:group {"className":"st-foot","layout":{"type":"default"}} -->
<div class="wp-block-group st-foot"><!-- wp:group {"className":"st-frame st-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-foot__grid"><!-- wp:group {"className":"st-foot__col st-foot__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group st-foot__col st-foot__col--brand"><!-- wp:paragraph {"className":"st-foot__logo"} -->
<p class="st-foot__logo"><span class="st-logo__a"><?php echo esc_html( sanroku_trail_t( 'head_logo_1' ) ); ?></span><br><span class="st-logo__b"><?php echo esc_html( sanroku_trail_t( 'head_logo_2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__tag"} -->
<p class="st-foot__tag"><?php echo esc_html( sanroku_trail_t( 'foot_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group st-foot__col"><!-- wp:paragraph {"className":"st-foot__h"} -->
<p class="st-foot__h"><?php echo esc_html( sanroku_trail_t( 'foot_addr_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__p"} -->
<p class="st-foot__p"><?php echo esc_html( sanroku_trail_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__p"} -->
<p class="st-foot__p"><a href="mailto:<?php echo esc_html( sanroku_trail_t( 'foot_mail' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_mail' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__h st-foot__h--gap"} -->
<p class="st-foot__h st-foot__h--gap"><?php echo esc_html( sanroku_trail_t( 'foot_hours_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__p"} -->
<p class="st-foot__p"><?php echo esc_html( sanroku_trail_t( 'foot_hours' ) ); ?><br><?php echo esc_html( sanroku_trail_t( 'foot_hours_race' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group st-foot__col"><!-- wp:paragraph {"className":"st-foot__h"} -->
<p class="st-foot__h"><?php echo esc_html( sanroku_trail_t( 'foot_nav_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__p"} -->
<p class="st-foot__p"><a href="<?php echo esc_url( home_url( '/races/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_races' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/course-guides/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_guides' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/mandatory-kit/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_kit' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/enter/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_enter' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__h st-foot__h--gap"} -->
<p class="st-foot__h st-foot__h--gap"><?php echo esc_html( sanroku_trail_t( 'foot_more_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-foot__p"} -->
<p class="st-foot__p"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_about' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_journal' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_privacy' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/safety/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_safety' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/volunteer/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_volunteer' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_newsletter' ) ); ?></a><br><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( sanroku_trail_t( 'foot_contact' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"st-frame st-foot__legal","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame st-foot__legal"><!-- wp:paragraph {"className":"st-foot__small"} -->
<p class="st-foot__small"><?php echo esc_html( sanroku_trail_t( 'foot_legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
