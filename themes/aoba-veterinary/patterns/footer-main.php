<?php
/**
 * Title: Footer: address, timetable block, slashed links and accent bar
 * Slug: aoba-veterinary/footer-main
 * Categories: aoba-veterinary
 * Keywords: footer
 * Viewport Width: 1440
 * Description: Clinic address and phone beside the solid timetable block, a slashed footer link row and a 48 px accent bar.
 */
?>
<!-- wp:group {"align":"full","className":"av-foot","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull av-foot"><!-- wp:group {"align":"wide","className":"av-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-foot__in"><!-- wp:group {"className":"av-foot__id","layout":{"type":"default"}} -->
<div class="wp-block-group av-foot__id"><!-- wp:paragraph {"className":"av-foot__name"} -->
<p class="av-foot__name">Aoba Veterinary Clinic</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-foot__addr"} -->
<p class="av-foot__addr">214 Alder Street, Fairhaven<br>hello@aobavet.example</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-phone av-phone--foot"} -->
<p class="av-phone av-phone--foot"><a href="tel:+15550142300">+1 555 0142 300</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-foot__hours","layout":{"type":"default"}} -->
<div class="wp-block-group av-foot__hours"><!-- wp:pattern {"slug":"aoba-veterinary/timetable"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"av-foot__line"} -->
<p class="av-foot__line">Mon–Fri 9:00–12:30 · 15:30–19:00<br>Sat 9:00–12:30 · 15:30–17:00 · Sun closed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","className":"av-menu av-menu--foot","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"About","url":"/about/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Cat care","url":"/cat-care/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Surgery & dental","url":"/surgery-dental/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Fees","url":"/fees/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Team","url":"/team/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Stories","url":"/stories/","kind":"custom","isTopLevelLink":true} /--><!-- wp:navigation-link {"label":"Access","url":"/access/","kind":"custom","isTopLevelLink":true} /--><!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"av-bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull av-bar"><!-- wp:paragraph {"align":"center","className":"av-bar__text"} -->
<p class="has-text-align-center av-bar__text">© Aoba Veterinary Clinic</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
