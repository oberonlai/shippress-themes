<?php
/**
 * Title: Home: harbour board (hairline cells, fee table, open-today tab)
 * Slug: tomari-marina/front-board
 * Categories: tomari-marina
 * Keywords: home, board, fees
 * Viewport Width: 1440
 * Description: A four-column hairline board: season notice with a poster, the three pontoons, the season fee table and the office, with a pale open-today tab pinned at the bottom right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-board","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-board"><!-- wp:paragraph {"className":"tm-board__title"} -->
<p class="tm-board__title"><?php echo wp_kses_post( tomari_marina_t( 'front_board_90' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-row tm-row--season","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row tm-row--season"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'front_board_05' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--text"><!-- wp:paragraph {"className":"tm-chip"} -->
<p class="tm-chip"><?php echo wp_kses_post( tomari_marina_t( 'front_board_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"tm-cell__big"} -->
<h3 class="wp-block-heading tm-cell__big"><?php echo wp_kses_post( tomari_marina_t( 'front_board_02' ) ); ?><br><?php echo wp_kses_post( tomari_marina_t( 'front_board_03' ) ); ?><br><?php echo wp_kses_post( tomari_marina_t( 'front_board_04' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-circle"} -->
<p class="tm-circle"><a href="<?php echo esc_url( home_url( '/season-fees/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'front_board_07' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--poster","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--poster"><!-- wp:image {"aspectRatio":"0.72","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"tm-board__poster"} -->
<figure class="wp-block-image size-large tm-board__poster"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-office-dusk.webp' ) ); ?>" alt="<?php echo esc_attr( tomari_marina_t( 'front_board_08' ) ); ?>" style="aspect-ratio:0.72;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row tm-row--pontoons","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row tm-row--pontoons"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'front_board_09' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:heading {"level":4,"className":"tm-cell__name"} -->
<h4 class="wp-block-heading tm-cell__name"><?php echo wp_kses_post( tomari_marina_t( 'front_board_10' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-meta"} -->
<p class="tm-meta"><?php echo wp_kses_post( tomari_marina_t( 'front_board_11' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_12' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:heading {"level":4,"className":"tm-cell__name"} -->
<h4 class="wp-block-heading tm-cell__name"><?php echo wp_kses_post( tomari_marina_t( 'front_board_13' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-meta"} -->
<p class="tm-meta"><?php echo wp_kses_post( tomari_marina_t( 'front_board_14' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_15' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:heading {"level":4,"className":"tm-cell__name"} -->
<h4 class="wp-block-heading tm-cell__name"><?php echo wp_kses_post( tomari_marina_t( 'front_board_16' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-meta"} -->
<p class="tm-meta"><?php echo wp_kses_post( tomari_marina_t( 'front_board_17' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_18' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--note","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--note"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_19' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row tm-row--fees","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row tm-row--fees"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'front_board_80' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--intro","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--intro"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_81' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell tm-cell--table","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--table"><!-- wp:table {"className":"tm-fees is-style-fees"} -->
<figure class="wp-block-table tm-fees is-style-fees"><table><thead><tr><th><?php echo wp_kses_post( tomari_marina_t( 'front_board_20' ) ); ?></th><th><?php echo wp_kses_post( tomari_marina_t( 'front_board_21' ) ); ?></th><th><?php echo wp_kses_post( tomari_marina_t( 'front_board_22' ) ); ?></th><th><?php echo wp_kses_post( tomari_marina_t( 'front_board_23' ) ); ?></th></tr></thead><tbody><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_24' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_25' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_26' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_27' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_28' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_29' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_30' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_31' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_32' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_33' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_34' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_35' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_36' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_37' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_38' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_39' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_40' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_41' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_42' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_43' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_44' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_45' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_46' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_47' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_48' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_49' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_50' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_51' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_52' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_53' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_54' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_55' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_56' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_57' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_58' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_59' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_60' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_61' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_62' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_63' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_64' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_65' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_66' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_67' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_68' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_69' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_70' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_71' ) ); ?></td></tr><tr><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_72' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_73' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_74' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_75' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_76' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_77' ) ); ?></td><td><span class="tm-cell-label"><?php echo wp_kses_post( tomari_marina_t( 'front_board_78' ) ); ?></span><?php echo wp_kses_post( tomari_marina_t( 'front_board_79' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-row tm-row--office","layout":{"type":"default"}} -->
<div class="wp-block-group tm-row tm-row--office"><!-- wp:group {"className":"tm-cell tm-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell tm-cell--label"><!-- wp:heading {"level":3,"className":"tm-cell__title"} -->
<h3 class="wp-block-heading tm-cell__title"><?php echo wp_kses_post( tomari_marina_t( 'front_board_82' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_83' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_84' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-cell ","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cell "><!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_board_85' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-circle"} -->
<p class="tm-circle"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'front_board_86' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-tab","layout":{"type":"default"}} -->
<div class="wp-block-group tm-tab"><!-- wp:paragraph {"className":"tm-tab__a"} -->
<p class="tm-tab__a"><?php echo wp_kses_post( tomari_marina_t( 'front_board_87' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-tab__b"} -->
<p class="tm-tab__b"><?php echo wp_kses_post( tomari_marina_t( 'front_board_88' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tm-tab__c"} -->
<p class="tm-tab__c"><a href="<?php echo esc_url( home_url( '/season-fees/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'front_board_89' ) ); ?> ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->