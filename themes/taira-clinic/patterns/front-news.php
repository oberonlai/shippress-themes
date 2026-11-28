<?php
/**
 * Title: Home: from the clinic and visiting
 * Slug: taira-clinic/front-news
 * Categories: taira-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Latest three posts as dated rows with a category chip, and a visiting box with the entrance photograph, hours and address.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"visit","align":"full","className":"tc-sec tc-sec--news","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull tc-sec tc-sec--news">
<!-- wp:group {"className":"tc-wrap tc-split tc-split--news","layout":{"type":"default"}} -->
<div class="wp-block-group tc-wrap tc-split tc-split--news">
<!-- wp:group {"className":"tc-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__a">
<!-- wp:heading {"className":"tc-h2 tc-label"} -->
<h2 class="wp-block-heading tc-h2 tc-label"><?php echo esc_html( taira_clinic_t( 'nw_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"tc-nlist sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nlist sp-reveal sp-reveal--up">
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"tc-nrows"} -->
<!-- wp:group {"className":"tc-nrow","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nrow">
<!-- wp:group {"className":"tc-nrow__m","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nrow__m"><!-- wp:post-date {"format":"j M Y","className":"tc-nrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"tc-chip"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-nrow__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-nrow__b"><!-- wp:post-title {"isLink":true,"level":3,"className":"tc-nrow__t"} /-->
<!-- wp:post-excerpt {"excerptLength":26,"className":"tc-nrow__x"} /--></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"tc-link"} -->
<p class="tc-link"><a href="/news/"><?php echo esc_html( taira_clinic_t( 'nw_all' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"tc-split__b tc-visit","layout":{"type":"default"}} -->
<div class="wp-block-group tc-split__b tc-visit">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-visit__ph"} -->
<figure class="wp-block-image size-full tc-visit__ph"><img src="<?php echo taira_clinic_img( 'p13-clinic-entrance.webp' ); ?>" alt="<?php echo taira_clinic_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"tc-visit__b","layout":{"type":"default"}} -->
<div class="wp-block-group tc-visit__b">
<!-- wp:heading {"level":3,"className":"tc-h3 tc-label"} -->
<h3 class="wp-block-heading tc-h3 tc-label"><?php echo esc_html( taira_clinic_t( 'vs_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"tc-visit__l"} -->
<p class="tc-visit__l"><strong><?php echo esc_html( taira_clinic_t( 'vs_wk_k' ) ); ?></strong> <?php echo esc_html( taira_clinic_t( 'vs_wk_v' ) ); ?><br><strong><?php echo esc_html( taira_clinic_t( 'vs_sa_k' ) ); ?></strong> <?php echo esc_html( taira_clinic_t( 'vs_sa_v' ) ); ?><br><strong><?php echo esc_html( taira_clinic_t( 'vs_su_k' ) ); ?></strong> <?php echo esc_html( taira_clinic_t( 'vs_su_v' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-visit__l"} -->
<p class="tc-visit__l"><?php echo esc_html( taira_clinic_t( 'vs_addr' ) ); ?><br><a href="tel:+15550142200"><?php echo esc_html( taira_clinic_t( 'hd_phone' ) ); ?></a> · <a href="mailto:desk@taira-clinic.example"><?php echo wp_kses_post( taira_clinic_t( 'k02fe96d9' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tc-visit__n"} -->
<p class="tc-visit__n"><?php echo esc_html( taira_clinic_t( 'vs_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
