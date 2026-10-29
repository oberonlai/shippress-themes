<?php
/**
 * Title: Footer
 * Slug: getsuji-payroll/foot-main
 * Categories: getsuji-payroll
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: White footer: mark and line, pages, legal and letter, address and hours; the round consultation button.
 */
?>
<!-- wp:html -->
<a class="gp-fab" href="<?php echo esc_url( home_url( '/#request' ) ); ?>" aria-label="Request a consultation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><rect x="2.75" y="5.25" width="18.5" height="13.5" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="M3 6l9 7 9-7" fill="none" stroke="currentColor" stroke-width="1.5"/></svg></a>
<!-- /wp:html -->

<!-- wp:group {"className":"gp-foot__inner","layout":{"type":"default"}} -->
<div class="wp-block-group gp-foot__inner"><!-- wp:group {"className":"gp-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group gp-foot__cols"><!-- wp:group {"className":"gp-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group gp-foot__col"><!-- wp:html -->
<?php echo getsuji_payroll_mark( 48, 'gp-foot__mark' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"gp-foot__name"} -->
<p class="gp-foot__name">Getsuji Payroll</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gp-foot__text"} -->
<p class="gp-foot__text">Payroll bureau since 2014. Month-end wages for small firms in and around Ghent.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group gp-foot__col"><!-- wp:paragraph {"className":"gp-foot__head"} -->
<p class="gp-foot__head">Pages</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gp-foot__list"} -->
<p class="gp-foot__list"><a href="<?php echo esc_url( home_url( '/the-month/' ) ); ?>">The month</a><br><a href="<?php echo esc_url( home_url( '/accounts/' ) ); ?>">Firm accounts</a><br><a href="<?php echo esc_url( home_url( '/switching/' ) ); ?>">Switching to us</a><br><a href="<?php echo esc_url( home_url( '/fees/' ) ); ?>">Fees</a><br><a href="<?php echo esc_url( home_url( '/the-bureau/' ) ); ?>">The bureau</a><br><a href="<?php echo esc_url( home_url( '/questions/' ) ); ?>">Questions</a><br><a href="<?php echo esc_url( home_url( '/notes/' ) ); ?>">Notes</a><br><a href="<?php echo esc_url( home_url( '/request/' ) ); ?>">Request a consultation</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group gp-foot__col"><!-- wp:paragraph {"className":"gp-foot__head"} -->
<p class="gp-foot__head">Legal</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gp-foot__list"} -->
<p class="gp-foot__list"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a><br><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a><br><a href="<?php echo esc_url( home_url( '/letter/' ) ); ?>">Month-end letter</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gp-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group gp-foot__col"><!-- wp:paragraph {"className":"gp-foot__head"} -->
<p class="gp-foot__head">Office</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gp-foot__list"} -->
<p class="gp-foot__list">Weverslaan 14, 2nd floor<br>9000 Ghent, Belgium<br><a href="tel:+3290001425">+32 9 000 14 25</a><br><a href="mailto:hello@getsuji-payroll.example">hello@getsuji-payroll.example</a><br>Mon–Fri 08:30–17:30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gp-foot__legal"} -->
<p class="gp-foot__legal">© 2026 Getsuji Payroll</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
