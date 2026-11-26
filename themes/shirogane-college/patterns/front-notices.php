<?php
/**
 * Title: Home: intake notices
 * Slug: shirogane-college/front-notices
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Two notice rows with a brick label cell, a one-pixel frame and a chevron.
 */
?>
<!-- wp:group {"align":"full","className":"sg-notice","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sg-notice">
<!-- wp:html -->
<div class="sg-notice__in"><a class="sg-notice__row" href="/admissions/"><span class="sg-notice__l"><?php echo esc_html( shirogane_college_t( 'nt1_l' ) ); ?></span><span class="sg-notice__t"><?php echo esc_html( shirogane_college_t( 'nt1_t' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a><a class="sg-notice__row" href="/visit/#open-day"><span class="sg-notice__l"><?php echo esc_html( shirogane_college_t( 'nt2_l' ) ); ?></span><span class="sg-notice__t"><?php echo esc_html( shirogane_college_t( 'nt2_t' ) ); ?></span><svg class="sg-chev" width="8" height="14" viewBox="0 0 8 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M1 1l6 6-6 6"/></svg></a></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->