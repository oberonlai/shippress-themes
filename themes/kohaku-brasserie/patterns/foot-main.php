<?php
/**
 * Title: Footer
 * Slug: kohaku-brasserie/foot-main
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Espresso footer in four columns: the house, the pages, hours and address, and the newsletter slot.
 */
?>
<!-- wp:group {"align":"full","className":"kb-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kb-foot"><!-- wp:group {"className":"kb-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__grid"><!-- wp:group {"className":"kb-foot__col kb-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__col kb-foot__brand"><!-- wp:paragraph {"className":"kb-foot__name"} -->
<p class="kb-foot__name">Kohaku</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-foot__tag"} -->
<p class="kb-foot__tag">A city brasserie. One room, lunch to last orders.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__col"><!-- wp:paragraph {"className":"kb-foot__lab"} -->
<p class="kb-foot__lab">(the house)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-foot__links"} -->
<p class="kb-foot__links"><a href="/about/">The Room</a><br><a href="/the-day/">The Day</a><br><a href="/menus/">Menus &amp; Prices</a><br><a href="/kitchen/">The Kitchen</a><br><a href="/notes/">Notes</a><br><a href="/book/">Book a table</a><br><a href="/contact/">Visit</a><br><a href="/newsletter/">The Monday letter</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__col"><!-- wp:paragraph {"className":"kb-foot__lab"} -->
<p class="kb-foot__lab">(visit)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>14 Arcade Row<br>Old Exchange Quarter, Lowmarket<br>Tue–Sat 11:30–00:00<br>Sun 11:30–17:00 · Mon closed<br><a href="mailto:bookings@kohaku-brasserie.example">bookings@kohaku-brasserie.example</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-foot__col kb-foot__sub","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__col kb-foot__sub"><!-- wp:paragraph {"className":"kb-foot__lab"} -->
<p class="kb-foot__lab">(the Monday letter)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kb-foot__note"} -->
<p class="kb-foot__note">Next week’s afternoon plates and the late-sitting music, one email each Monday.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kb-foot__form","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__form"><?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'bookings@kohaku-brasserie.example', 'label' => kohaku_brasserie_t( 'forms_email' ), 'submit' => kohaku_brasserie_t( 'forms_subscribe' ), 'notice' => kohaku_brasserie_t( 'forms_mail_notice' ), 'subject' => kohaku_brasserie_t( 'forms_mail_subject' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kb-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group kb-foot__base"><!-- wp:paragraph {"className":"kb-foot__legal"} -->
<p class="kb-foot__legal">© 2014–2026 Kohaku Brasserie. A fictional restaurant; all names, places and prices are sample content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
