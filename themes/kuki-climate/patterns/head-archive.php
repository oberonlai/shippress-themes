<?php
/**
 * Title: Head: archive
 * Slug: kuki-climate/head-archive
 * Categories: kuki-climate
 * Keywords: head-archive
 * Viewport Width: 1440
 * Description: Small framed window with the page title and the year line.
 */
$kc_img = static function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-phead"><!-- wp:cover {"url":"<?php echo $kc_img( 'p09-belt-tension.webp' ); ?>","dimRatio":40,"overlayColor":"iron","minHeight":360,"minHeightUnit":"px","contentPosition":"bottom left","className":"kc-window kc-pwin"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kc-window kc-pwin" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Documentary photograph of gloved hands checking fan-belt tension inside an air-handling unit." src="<?php echo $kc_img( 'p09-belt-tension.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-kicker"} -->
<p class="kc-kicker">Field notes · from the service log</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"className":"kc-h1 kc-ptitle"} /-->

<!-- wp:group {"className":"kc-veil","layout":{"type":"default"}} -->
<div class="wp-block-group kc-veil"></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"kc-ystrip","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ystrip"><!-- wp:group {"className":"kc-ybar__line","layout":{"type":"default"}} -->
<div class="wp-block-group kc-ybar__line"><!-- wp:paragraph {"className":"kc-ybar__label"} -->
<p class="kc-ybar__label">Posts through the year</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="kc-months" role="img" aria-label="Twelve months with the seasonal checks marked in March, June, September and November."><li class="kc-mo" style="--i:0"><i class="kc-mo__d"></i><span>J</span></li><li class="kc-mo" style="--i:1"><i class="kc-mo__d"></i><span>F</span></li><li class="kc-mo kc-mo--q" style="--i:2"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span>M</span></li><li class="kc-mo" style="--i:3"><i class="kc-mo__d"></i><span>A</span></li><li class="kc-mo" style="--i:4"><i class="kc-mo__d"></i><span>M</span></li><li class="kc-mo kc-mo--q" style="--i:5"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span>J</span></li><li class="kc-mo" style="--i:6"><i class="kc-mo__d"></i><span>J</span></li><li class="kc-mo" style="--i:7"><i class="kc-mo__d"></i><span>A</span></li><li class="kc-mo kc-mo--q" style="--i:8"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span>S</span></li><li class="kc-mo" style="--i:9"><i class="kc-mo__d"></i><span>O</span></li><li class="kc-mo kc-mo--q" style="--i:10"><i class="kc-mo__d"></i><i class="kc-mo__q"></i><span>N</span></li><li class="kc-mo" style="--i:11"><i class="kc-mo__d"></i><span>D</span></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-ybar__note kc-ystrip__note"} -->
<p class="kc-ybar__note kc-ystrip__note">Building stories and seasonal checks, from the log.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
