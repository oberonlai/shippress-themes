<?php
/**
 * Title: Season & Fees: booking page with the full fee table
 * Slug: tomari-marina/inner-season
 * Categories: tomari-marina
 * Keywords: inner, booking, fees
 * Viewport Width: 1440
 * Description: The Season & Fees page: a page head with numeral 03, the season row, the full-width seven-item fee table, the booking and calendar rows, winter ashore with a photograph, the open-today tab and a request block.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-t1__panel tm-head","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-t1__panel tm-head"><!-- wp:group {"className":"tm-t1__tl","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__tl"><!-- wp:html -->
<svg class="tm-pennant" width="48" height="38" viewBox="0 0 48 38" aria-hidden="true" focusable="false"><path d="M2 0h4v38H2z M6 3l40 11L6 25z" fill="#C30D23"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"tm-t1__label"} -->
<p class="tm-t1__label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_87' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-t1__word"} -->
<p class="tm-t1__word"><?php echo wp_kses_post( tomari_marina_t( 'in_season_88' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-t1__num"} -->
<p class="tm-t1__num"><?php echo wp_kses_post( tomari_marina_t( 'in_season_89' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"0.52","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-t1__portrait"} -->
<figure class="wp-block-image size-large tm-t1__portrait"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-office-agreement.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'in_season_90' ) ); ?>" style="aspect-ratio:0.52;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"className":"tm-t1__statement"} -->
<h1 class="wp-block-heading tm-t1__statement"><?php echo wp_kses_post( tomari_marina_t( 'in_season_91' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"tm-t1__side","layout":{"type":"default"}} -->
<div class="wp-block-group tm-t1__side"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_92' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line-inner"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tm-board tm-board--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-board tm-board--inner"><!-- wp:paragraph {"className":"tm-board__title"} -->
<p class="tm-board__title"><?php echo wp_kses_post( tomari_marina_t( 'in_season_93' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-row sp-reveal sp-reveal--up tm-row--season-in","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row sp-reveal sp-reveal--up tm-row--season-in"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'in_season_03' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--wide","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--wide"><!-- wp:paragraph {"className":"tm-chip"} -->
<p class="tm-chip"><?php echo wp_kses_post( tomari_marina_t( 'in_season_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--facts","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--facts"><!-- wp:list {"className":"tm-facts"} -->
<ul class="wp-block-list tm-facts"><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_04' ) ); ?></li><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_05' ) ); ?></li><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_06' ) ); ?></li><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_07' ) ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row tm-row--fees","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row tm-row--fees"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'in_season_08' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--intro","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--intro"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_09' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--table","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--table"><!-- wp:table {"className":"tm-fees is-style-fees"} -->
<figure class="wp-block-table tm-fees is-style-fees"><table><thead><tr><th><?php echo wp_kses_post( tomari_marina_t( 'in_season_10' ) ); ?></th><th><?php echo wp_kses_post( tomari_marina_t( 'in_season_11' ) ); ?></th><th><?php echo wp_kses_post( tomari_marina_t( 'in_season_12' ) ); ?></th><th><?php echo wp_kses_post( tomari_marina_t( 'in_season_13' ) ); ?></th></tr></thead><tbody><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_14' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_15' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_16' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_17' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_18' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_19' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_20' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_21' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_22' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_23' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_24' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_25' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_26' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_27' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_28' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_29' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_30' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_31' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_32' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_33' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_34' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_35' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_36' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_37' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_38' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_39' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_40' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_41' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_42' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_43' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_44' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_45' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_46' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_47' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_48' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_49' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_50' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_51' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_52' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_53' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_54' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_55' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_56' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_57' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_58' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_59' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_60' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_61' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_62' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_63' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_64' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_65' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_66' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_67' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'in_season_68' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'in_season_69' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'in_season_70' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_71' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_72' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_73' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row sp-reveal sp-reveal--up "><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'in_season_75' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--wide","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--wide"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_74' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--facts","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--facts"><!-- wp:list {"className":"tm-facts"} -->
<ul class="wp-block-list tm-facts"><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_76' ) ); ?></li><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_77' ) ); ?></li><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_78' ) ); ?></li><li><?php echo wp_kses_post( tomari_marina_t( 'in_season_79' ) ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row sp-reveal sp-reveal--up "><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'in_season_81' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--wide","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--wide"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'in_season_80' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--photo","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--photo"><!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-photo"} -->
<figure class="wp-block-image size-large tm-photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p16-winter-ashore.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'in_season_82' ) ); ?>" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-tab","layout":{"type":"default"}} -->
<div class="wp-block-group tm-tab"><!-- wp:paragraph {"className":"tm-tab__a"} -->
<p class="tm-tab__a"><?php echo wp_kses_post( tomari_marina_t( 'in_season_94' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-tab__b"} -->
<p class="tm-tab__b"><?php echo wp_kses_post( tomari_marina_t( 'in_season_95' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-tab__c"} -->
<p class="tm-tab__c"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'in_season_96' ) ); ?> ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tm-request tm-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-request tm-section"><!-- wp:heading {"level":2,"className":"tm-h2 sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'in_season_83' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-request__text"} -->
<p class="tm-request__text"><?php echo wp_kses_post( tomari_marina_t( 'in_season_84' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-circle"} -->
<p class="tm-circle"><a href="mailto:office@tomarimarina.example"><?php echo wp_kses_post( tomari_marina_t( 'in_season_85' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-circle"} -->
<p class="tm-circle"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'in_season_86' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tm-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-close"><!-- wp:pattern {"slug":"tomari-marina/bottom-line-inner"} /--></section>
<!-- /wp:group -->