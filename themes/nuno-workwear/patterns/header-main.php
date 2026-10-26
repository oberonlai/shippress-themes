<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: nuno-workwear/header-main
 * Categories: nuno-workwear
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"nw-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nw-header"><!-- wp:group {"className":"nw-bar nw-in","layout":{"type":"default"}} -->
<div class="wp-block-group nw-bar nw-in"><!-- wp:html -->
<nav class="nw-nav nw-nav--l" aria-label="<?php echo esc_attr( nuno_workwear_t( 'aa8567ec8' ) ); ?>">
<a href="/catalogue/"><?php echo esc_html( nuno_workwear_t( 'aa8567ec8' ) ); ?></a>
<a href="/fabrics/"><?php echo esc_html( nuno_workwear_t( 'a58e03cac' ) ); ?></a>
<a href="/fit/"><?php echo esc_html( nuno_workwear_t( 'a01e49ee7' ) ); ?></a>
<a href="/repairs/"><?php echo esc_html( nuno_workwear_t( 'a810a4b9e' ) ); ?></a>
</nav>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"nw-brand"} /-->

<!-- wp:group {"className":"nw-bar__r","layout":{"type":"default"}} -->
<div class="wp-block-group nw-bar__r"><!-- wp:navigation {"overlayMenu":"mobile","className":"nw-nav nw-nav--r","layout":{"type":"flex","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'aa8567ec8' ) ); ?>","url":"/catalogue/","kind":"custom","isTopLevelLink":true,"className":"nw-m"} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'a58e03cac' ) ); ?>","url":"/fabrics/","kind":"custom","isTopLevelLink":true,"className":"nw-m"} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'a01e49ee7' ) ); ?>","url":"/fit/","kind":"custom","isTopLevelLink":true,"className":"nw-m"} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'a810a4b9e' ) ); ?>","url":"/repairs/","kind":"custom","isTopLevelLink":true,"className":"nw-m"} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'af43c492c' ) ); ?>","url":"/crew-orders/","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'acbb37401' ) ); ?>","url":"/stories/","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'knavabout' ) ); ?>","url":"/about/","kind":"custom","isTopLevelLink":true,"className":"nw-m"} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( nuno_workwear_t( 'abbaff128' ) ); ?>","url":"/contact/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"English","url":"/?lang=en","kind":"custom","isTopLevelLink":true,"className":"nw-m nw-ml"} /-->

<!-- wp:navigation-link {"label":"\u7e41\u9ad4\u4e2d\u6587","url":"/?lang=zh-TW","kind":"custom","isTopLevelLink":true,"className":"nw-m nw-ml"} /-->

<!-- wp:navigation-link {"label":"\u65e5\u672c\u8a9e","url":"/?lang=ja","kind":"custom","isTopLevelLink":true,"className":"nw-m nw-ml"} /-->

<!-- wp:navigation-link {"label":"Français","url":"/?lang=fr","kind":"custom","isTopLevelLink":true,"className":"nw-m nw-ml"} /-->

<!-- wp:navigation-link {"label":"Deutsch","url":"/?lang=de","kind":"custom","isTopLevelLink":true,"className":"nw-m nw-ml"} /-->
<!-- /wp:navigation -->

<!-- wp:html -->
<?php
$nw_cur = nuno_workwear_lang();
$nw_langs = array( 'en' => 'EN', 'zh-TW' => "\u{4E2D}", 'ja' => "\u{65E5}", 'fr' => 'FR', 'de' => 'DE' );
?>
<nav class="nw-langs" aria-label="<?php echo esc_attr( nuno_workwear_t( 'knavlang' ) ); ?>">
<?php foreach ( $nw_langs as $nw_code => $nw_label ) : ?>
<a href="<?php echo esc_url( home_url( '/?lang=' . $nw_code ) ); ?>" hreflang="<?php echo esc_attr( $nw_code ); ?>" lang="<?php echo esc_attr( $nw_code ); ?>"<?php echo $nw_code === $nw_cur ? ' aria-current="true"' : ''; ?>><?php echo esc_html( $nw_label ); ?></a>
<?php endforeach; ?>
</nav>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"nw-round__wrap"} -->
<p class="nw-round__wrap"><a class="nw-round" href="/contact/" aria-label="<?php echo esc_attr( nuno_workwear_t( 'a1cad2e70' ) ); ?>"><span class="nw-sr"><?php echo wp_kses_post( nuno_workwear_t( 'kd497423b' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
