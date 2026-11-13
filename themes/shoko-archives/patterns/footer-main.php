<?php
/**
 * Title: Footer: waitlist strip and columns
 * Slug: shoko-archives/footer-main
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: A pale waitlist strip with the newsletter form slot, then a white footer with name and address, two link columns and the opening hours.
 */
?>
<!-- wp:group {"align":"full","className":"sa-waitlist","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sa-waitlist"><!-- wp:group {"className":"sa-wrap sa-waitlist__in","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-waitlist__in"><!-- wp:group {"className":"sa-waitlist__text","layout":{"type":"default"}} -->
<div class="wp-block-group sa-waitlist__text"><!-- wp:paragraph {"className":"sa-waitlist__lab"} -->
<p class="sa-waitlist__lab"><?php echo esc_html( shoko_archives_t( 'wl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sa-waitlist__h"} -->
<h2 class="wp-block-heading sa-waitlist__h"><?php echo esc_html( shoko_archives_t( 'wl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-waitlist__p"} -->
<p class="sa-waitlist__p"><?php echo esc_html( shoko_archives_t( 'wl_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-waitlist__form","layout":{"type":"default"}} -->
<div class="wp-block-group sa-waitlist__form"><!-- wp:pattern {"slug":"shoko-archives/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sa-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sa-foot"><!-- wp:group {"className":"sa-wrap sa-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-foot__in"><!-- wp:group {"className":"sa-foot__col sa-foot__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group sa-foot__col sa-foot__col--brand"><!-- wp:heading {"className":"sa-foot__name"} -->
<h2 class="wp-block-heading sa-foot__name"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-foot__p"} -->
<p class="sa-foot__p"><?php echo esc_html( shoko_archives_t( 'ft_addr' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'ft_phone' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'ft_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__p"} -->
<p class="sa-foot__p"><?php echo esc_html( shoko_archives_t( 'ft_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group sa-foot__col"><!-- wp:paragraph {"className":"sa-foot__h"} -->
<p class="sa-foot__h"><?php echo esc_html( shoko_archives_t( 'ft_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/collections/"><?php echo esc_html( shoko_archives_t( 'ft_col' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/indexing/"><?php echo esc_html( shoko_archives_t( 'ft_idx' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/prices/"><?php echo esc_html( shoko_archives_t( 'ft_prices' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group sa-foot__col"><!-- wp:paragraph {"className":"sa-foot__h"} -->
<p class="sa-foot__h"><?php echo esc_html( shoko_archives_t( 'ft_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/facility/"><?php echo esc_html( shoko_archives_t( 'ft_fac' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/people/"><?php echo esc_html( shoko_archives_t( 'ft_people' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/journal/"><?php echo esc_html( shoko_archives_t( 'ft_journal' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__l"} -->
<p class="sa-foot__l"><a href="/newsletter/"><?php echo esc_html( shoko_archives_t( 'ft_wait' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group sa-foot__col"><!-- wp:paragraph {"className":"sa-foot__h"} -->
<p class="sa-foot__h"><?php echo esc_html( shoko_archives_t( 'ft_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__p"} -->
<p class="sa-foot__p"><?php echo esc_html( shoko_archives_t( 'ft_hrs1' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'ft_hrs2' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'ft_hrs3' ) ); ?><br><?php echo esc_html( shoko_archives_t( 'ft_hrs4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-wrap sa-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-foot__base"><!-- wp:paragraph {"className":"sa-foot__fine"} -->
<p class="sa-foot__fine"><?php echo esc_html( shoko_archives_t( 'ft_fine' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-foot__legal"} -->
<p class="sa-foot__legal"><a href="/privacy/"><?php echo esc_html( shoko_archives_t( 'ft_privacy' ) ); ?></a> · <a href="/terms/"><?php echo esc_html( shoko_archives_t( 'ft_terms' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="sa-top" href="#top" aria-label="<?php echo esc_attr( shoko_archives_t( 'totop_a' ) ); ?>"><svg width="14" height="14" viewBox="0 0 14 14" aria-hidden="true" focusable="false"><path d="M2 9l5-5 5 5" fill="none" stroke="currentColor" stroke-width="2"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group -->
