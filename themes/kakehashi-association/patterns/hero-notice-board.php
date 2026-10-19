<?php
/**
 * Title: Home: purpose banner and notice board
 * Slug: kakehashi-association/hero-notice-board
 * Categories: kakehashi-association
 * Keywords: community association, nonprofit, volunteers
 * Viewport Width: 1440
 * Description: First screen: a narrow nadeshiko-pink banner the full height of the screen with the purpose in one sentence and a cut-out paper-cut sculpture of hands holding a bridge that breaks out over the banner edge; beside it the dated notice list with category tabs and Become a member / Donate links.
 */
?>
<!-- wp:group {"tagName":"section","className":"kh-hnb","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-hnb">
<!-- wp:group {"className":"kh-hnb__banner","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hnb__banner">
<!-- wp:paragraph {"className":"kh-hnb__since"} -->
<p class="kh-hnb__since"><?php echo esc_html( kakehashi_association_t( 'hero_since' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hnb__purpose"} -->
<h1 class="wp-block-heading kh-hnb__purpose"><?php echo esc_html( kakehashi_association_t( 'hero_purpose' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<img class="kh-hnb__motif" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bridge-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( kakehashi_association_t( 'alt_bridge' ) ); ?>" width="560" height="560" loading="eager"/>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kh-nt"><input class="kh-nt__r" type="radio" name="kh-nt" id="kh-nt-all" checked/><input class="kh-nt__r" type="radio" name="kh-nt" id="kh-nt-ev"/><input class="kh-nt__r" type="radio" name="kh-nt" id="kh-nt-sup"/><input class="kh-nt__r" type="radio" name="kh-nt" id="kh-nt-vol"/><input class="kh-nt__r" type="radio" name="kh-nt" id="kh-nt-rep"/><div class="kh-nt__head"><h2 class="kh-nt__title"><?php echo esc_html( kakehashi_association_t( 'nt_title' ) ); ?></h2><p class="kh-nt__acts"><a href="/contact/"><?php echo esc_html( kakehashi_association_t( 'nt_join' ) ); ?></a><a href="/contact/"><?php echo esc_html( kakehashi_association_t( 'nt_donate' ) ); ?></a></p></div><div class="kh-nt__tabs" role="group"><label class="kh-nt__tab" for="kh-nt-all"><?php echo esc_html( kakehashi_association_t( 'nt_all' ) ); ?></label><label class="kh-nt__tab" for="kh-nt-ev"><?php echo esc_html( kakehashi_association_t( 'nt_ev' ) ); ?></label><label class="kh-nt__tab" for="kh-nt-sup"><?php echo esc_html( kakehashi_association_t( 'nt_sup' ) ); ?></label><label class="kh-nt__tab" for="kh-nt-vol"><?php echo esc_html( kakehashi_association_t( 'nt_vol' ) ); ?></label><label class="kh-nt__tab" for="kh-nt-rep"><?php echo esc_html( kakehashi_association_t( 'nt_rep' ) ); ?></label></div><ol class="kh-nt__list"><li class="kh-nt__row" data-c="ev"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n1_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n1_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n1_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li><li class="kh-nt__row" data-c="vol"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n2_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n2_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n2_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li><li class="kh-nt__row" data-c="sup"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n3_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n3_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n3_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li><li class="kh-nt__row" data-c="rep"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n4_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n4_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n4_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li><li class="kh-nt__row" data-c="sup"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n5_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n5_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n5_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li><li class="kh-nt__row" data-c="ev"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n6_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n6_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n6_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li><li class="kh-nt__row" data-c="vol"><a href="/news/"><time class="kh-nt__d"><?php echo esc_html( kakehashi_association_t( 'n7_d' ) ); ?></time><span class="kh-nt__c"><?php echo esc_html( kakehashi_association_t( 'n7_c' ) ); ?></span><span class="kh-nt__t"><?php echo esc_html( kakehashi_association_t( 'n7_t' ) ); ?></span><span class="kh-nt__go" aria-hidden="true">&rarr;</span></a></li></ol><p class="kh-nt__more"><a href="/news/"><?php echo esc_html( kakehashi_association_t( 'nt_more' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p></div>
<!-- /wp:html -->
</section>
<!-- /wp:group -->
