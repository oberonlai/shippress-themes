<?php
/**
 * Title: Home: calculator
 * Slug: yui-credit-union/front-calculator
 * Categories: yui-credit-union
 * Keywords: credit union, home
 * Viewport Width: 1440
 * Description: Photo and a ruled white calculator panel that also shows its default result without scripts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ycu-sec ycu-calcsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ycu-sec ycu-calcsec"><!-- wp:group {"align":"wide","className":"ycu-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ycu-head"><!-- wp:paragraph {"className":"ycu-label"} -->
<p class="ycu-label"><span class="ycu-ix">03</span> <?php echo wp_kses_post( yui_credit_union_t( 'kcc84fa82' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"ycu-h2"} -->
<h2 class="wp-block-heading ycu-h2"><?php echo wp_kses_post( yui_credit_union_t( 'k33aa1417' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"align":"wide","className":"ycu-calcsec__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ycu-calcsec__grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ycu-calcsec__photo"} -->
<figure class="wp-block-image size-full ycu-calcsec__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/couple-laptop.webp' ) ); ?>" alt="<?php echo esc_attr( yui_credit_union_t( 'aabc20eef' ) ); ?>" loading="lazy"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"ycu-calcsec__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ycu-calcsec__panel"><!-- wp:html -->
<div class="ycu-calc" data-ycu-calc>
<div class="ycu-calc__row"><label for="ycu-amt"><?php echo wp_kses_post( yui_credit_union_t( 'k59efa46b' ) ); ?></label><output id="ycu-amt-out" for="ycu-amt">$24,000</output></div>
<input id="ycu-amt" class="ycu-range" type="range" min="2000" max="80000" step="500" value="24000" style="--p:26%"/>
<fieldset class="ycu-chips"><legend><?php echo wp_kses_post( yui_credit_union_t( 'kcf5f3091' ) ); ?></legend>
<input type="radio" name="ycu-term" id="ycu-t36" value="36"/><label for="ycu-t36"><?php echo wp_kses_post( yui_credit_union_t( 'k97f2862e' ) ); ?></label>
<input type="radio" name="ycu-term" id="ycu-t48" value="48"/><label for="ycu-t48"><?php echo wp_kses_post( yui_credit_union_t( 'kdfda9f6f' ) ); ?></label>
<input type="radio" name="ycu-term" id="ycu-t60" value="60" checked="checked"/><label for="ycu-t60"><?php echo wp_kses_post( yui_credit_union_t( 'kbe02e424' ) ); ?></label>
<input type="radio" name="ycu-term" id="ycu-t72" value="72"/><label for="ycu-t72"><?php echo wp_kses_post( yui_credit_union_t( 'kd271a2db' ) ); ?></label>
</fieldset>
<div class="ycu-calc__row"><label for="ycu-prod"><?php echo wp_kses_post( yui_credit_union_t( 'kdeb10517' ) ); ?></label>
<select id="ycu-prod"><option value="5.49" selected="selected"><?php echo wp_kses_post( yui_credit_union_t( 'k460c68d3' ) ); ?></option><option value="5.99"><?php echo wp_kses_post( yui_credit_union_t( 'ka0c71b9e' ) ); ?></option><option value="8.90"><?php echo wp_kses_post( yui_credit_union_t( 'kcb8e352b' ) ); ?></option></select></div>
<p class="ycu-calc__result"><?php echo wp_kses_post( yui_credit_union_t( 'k9097ee6e' ) ); ?></p>
<p class="ycu-calc__small"><?php echo wp_kses_post( yui_credit_union_t( 'ka44bf3f1' ) ); ?></p>
</div>
<!-- /wp:html --><!-- wp:buttons {"className":"ycu-btns ","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons ycu-btns "><!-- wp:button {"className":"ycu-btn"} -->
<div class="wp-block-button ycu-btn"><a class="wp-block-button__link wp-element-button" href="/calculator/"><?php echo wp_kses_post( yui_credit_union_t( 'kc9ca962a' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
