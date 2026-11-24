<?php
/**
 * Title: Header: wordmark and menu
 * Slug: yuka-tiles/header-main
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: White header: hours, the two-weight wordmark, phone and language, then one centred menu row.
 */
?>
<!-- wp:group {"align":"full","className":"yt-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yt-header">
<!-- wp:group {"className":"yt-header__row","layout":{"type":"default"}} -->
<div class="wp-block-group yt-header__row">
<!-- wp:paragraph {"className":"yt-hours"} -->
<p class="yt-hours"><?php echo esc_html( yuka_tiles_t( 'hours_short' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yt-wordmark"} -->
<p class="yt-wordmark"><a href="/"><span class="yt-wm-a"><?php echo esc_html( yuka_tiles_t( 'wm_a' ) ); ?></span><span class="yt-wm-b"><?php echo esc_html( yuka_tiles_t( 'wm_b' ) ); ?></span></a></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="yt-tools"><a class="yt-tel" href="tel:+00315550148"><svg viewBox="0 0 28 28" width="28" height="28" fill="none" stroke="#88888A" stroke-width="1.5" aria-hidden="true" focusable="false"><path d="M8.5 4.5h3l1.6 4.4-2 1.3a12 12 0 0 0 5.7 5.7l1.3-2 4.4 1.6v3a2.5 2.5 0 0 1-2.7 2.5A16.5 16.5 0 0 1 6 7.2 2.5 2.5 0 0 1 8.5 4.5z"/></svg></a><details class="yt-lang"><summary aria-label="<?php echo esc_attr( yuka_tiles_t( 'lang_label' ) ); ?>"><?php echo esc_html( strtoupper( yuka_tiles_lang() ) ); ?></summary><ul>
<li><a href="<?php echo esc_url( yuka_tiles_url( 'en' ) ); ?>" hreflang="en" lang="en"<?php echo 'en' === yuka_tiles_lang() ? ' aria-current="true"' : ''; ?>>EN</a></li><li><a href="<?php echo esc_url( yuka_tiles_url( 'zh-TW' ) ); ?>" hreflang="zh-TW" lang="zh-TW"<?php echo 'zh-TW' === yuka_tiles_lang() ? ' aria-current="true"' : ''; ?>>&#20013;&#25991;</a></li><li><a href="<?php echo esc_url( yuka_tiles_url( 'ja' ) ); ?>" hreflang="ja" lang="ja"<?php echo 'ja' === yuka_tiles_lang() ? ' aria-current="true"' : ''; ?>>&#26085;&#26412;&#35486;</a></li><li><a href="<?php echo esc_url( yuka_tiles_url( 'fr' ) ); ?>" hreflang="fr" lang="fr"<?php echo 'fr' === yuka_tiles_lang() ? ' aria-current="true"' : ''; ?>>Fran&ccedil;ais</a></li><li><a href="<?php echo esc_url( yuka_tiles_url( 'de' ) ); ?>" hreflang="de" lang="de"<?php echo 'de' === yuka_tiles_lang() ? ' aria-current="true"' : ''; ?>>Deutsch</a></li>
</ul></details></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"yt-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"space-between"}} /-->
</div>
<!-- /wp:group -->
