<?php
/**
 * Title: Home: team sheet
 * Slug: hakuji-laboratory/front-team
 * Categories: hakuji-laboratory
 * Viewport Width: 1440
 * Description: White sheet with a 25px bottom radius over the pick-up band: group photo left, title lockup and a two-column ruled list of seven people right.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"team","align":"full","className":"hk-sheet hk-sheet--b hk-team","layout":{"type":"default"}} -->
<section id="team" class="wp-block-group alignfull hk-sheet hk-sheet--b hk-team">
<!-- wp:group {"className":"hk-inner hk-team__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hk-inner hk-team__grid">
<!-- wp:group {"className":"hk-team__photo","layout":{"type":"default"}} -->
<div class="wp-block-group hk-team__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-team__img"} -->
<figure class="wp-block-image size-full hk-team__img"><img src="<?php echo hakuji_laboratory_img( 'img-11.webp' ); ?>" alt="<?php echo hakuji_laboratory_a( 'alt_team' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-team__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-team__text">
<!-- wp:group {"className":"hk-team__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-team__head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hk-lock","layout":{"type":"default"}} -->
<div class="wp-block-group hk-lock">
<!-- wp:paragraph {"className":"hk-lock__w"} -->
<p class="hk-lock__w"><?php echo esc_html( hakuji_laboratory_t( 'lock_team' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-lock__l"} -->
<p class="hk-lock__l"><?php echo esc_html( hakuji_laboratory_t( 'lock_team_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"hk-body"} -->
<p class="hk-body"><?php echo esc_html( hakuji_laboratory_t( 'team_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-people sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hk-people sp-stagger">
<!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p1_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p1_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p2_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p2_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p3_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p3_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p4_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p4_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p5_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p5_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p6_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p6_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --><!-- wp:group {"className":"hk-person sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-person sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"hk-person__n"} -->
<p class="hk-person__n"><?php echo esc_html( hakuji_laboratory_t( 'p7_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"hk-person__r"} -->
<p class="hk-person__r"><?php echo esc_html( hakuji_laboratory_t( 'p7_r' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
