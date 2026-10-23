<?php
/**
 * Title: Home: one recovery story on a parallax photo band
 * Slug: aoba-veterinary/front-story
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: The proof: a full-bleed walking photograph with a framed quote box at lower left, the figure 10 weeks at 4.25rem and the story in three paragraphs.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-story","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-story"><!-- wp:group {"className":"av-story__stage","layout":{"type":"default"}} -->
<div class="wp-block-group av-story__stage"><!-- wp:cover {"url":"<?php echo esc_url( $av . 'p06-walk.webp' ); ?>","alt":"Owner walking a beagle along a park path in morning light","dimRatio":0,"minHeight":520,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-story__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-story__photo sp-parallax" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Owner walking a beagle along a park path in morning light" src="<?php echo esc_url( $av . 'p06-walk.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box av-box--left","layout":{"type":"default"}} -->
<div class="wp-block-group av-box av-box--left"><!-- wp:heading {"textAlign":"center","level":2,"className":"av-box__title av-box__title--quote"} -->
<h2 class="wp-block-heading has-text-align-center av-box__title av-box__title--quote">He was back on his morning walk by spring.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"av-box__line"} -->
<p class="has-text-align-center av-box__line">Biscuit’s owner</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"av-story__cols","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide av-story__cols"><!-- wp:group {"className":"av-story__fig","layout":{"type":"default"}} -->
<div class="wp-block-group av-story__fig"><!-- wp:paragraph {"className":"av-figure"} -->
<p class="av-figure">10 weeks</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"av-figure__cap"} -->
<p class="av-figure__cap">from surgery to full walks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"av-story__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group av-story__text sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p>Biscuit, a beagle aged 7, came to the clinic with a cruciate ligament injury. Dr. Samuel Osei repaired it. The plan and the fee were set out in a written estimate before surgery, and Biscuit went home with pain relief and instructions for the first days.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Malik Haddad, veterinary nurse for rehabilitation, wrote the rehab plan. Over 10 weeks Biscuit returned to full walks. His owner said he was back on his morning walk by spring. That span, from surgery to full walks, is what happened for this one dog.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>It is not a timetable we offer to every animal. Every animal is different, and another dog with a cruciate repair may need longer, or a different plan, under the same surgeons and nurses. The full account of Biscuit’s case is on the stories page, beside Juniper and Otto, each told on its own.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"av-arrow"} -->
<div class="wp-block-buttons av-arrow"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/stories/">Read the story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
