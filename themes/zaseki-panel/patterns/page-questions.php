<?php
/**
 * Title: Page: Questions
 * Slug: zaseki-panel/page-questions
 * Categories: zaseki-panel
 * Inserter: no
 * Viewport Width: 1440
 * Description: The questions page: answers in three groups.
 */
?>
<!-- wp:group {"className":"zp-phead","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-phead">
<!-- wp:group {"className":"zp-phead__panel","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__panel">
<!-- wp:group {"className":"zp-phead__grid zp-wipe sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__grid zp-wipe sp-reveal sp-reveal--wipe">
<!-- wp:html -->
<div class="zp-gridwrap" aria-hidden="true"><svg class="zp-grid" viewBox="0 0 768 512" preserveAspectRatio="xMidYMid slice" focusable="false"><rect x="133" y="133" width="118" height="118" fill="#C3D3C6"/><rect x="261" y="133" width="118" height="118" fill="#D9B3A4"/><rect x="389" y="261" width="118" height="118" fill="#CFCBC1"/><g stroke="#8C5648" stroke-width="10" fill="none"><path d="M0 0V512"/><path d="M128 0V512"/><path d="M256 0V512"/><path d="M384 0V512"/><path d="M512 0V512"/><path d="M640 0V512"/><path d="M768 0V512"/><path d="M0 0H768"/><path d="M0 128H768"/><path d="M0 256H768"/><path d="M0 384H768"/><path d="M0 512H768"/></g></svg></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__text">
<!-- wp:heading {"level":1,"className":"zp-phead__h1"} -->
<h1 class="wp-block-heading zp-phead__h1"><?php echo esc_html( zaseki_panel_t( 'pg_questions_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-phead__lede"} -->
<p class="zp-phead__lede"><?php echo esc_html( zaseki_panel_t( 'pg_questions_lede' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group zp-phead__photo">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-phead__img"} -->
<figure class="wp-block-image size-full zp-phead__img"><img src="<?php echo zaseki_panel_img( 'hold-desk-tag.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_d2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"zp-sec zp-psec zp-questions","layout":{"type":"default"}} -->
<section class="wp-block-group zp-sec zp-psec zp-questions">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:group {"className":"zp-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group zp-qgroup">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'qgroup1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-qs","layout":{"type":"default"}} -->
<div class="wp-block-group zp-qs">
<!-- wp:details {"className":"zp-q"} -->
<details class="wp-block-details zp-q"><summary><?php echo esc_html( zaseki_panel_t( 'qq1_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'qq1_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"zp-q"} -->
<details class="wp-block-details zp-q"><summary><?php echo esc_html( zaseki_panel_t( 'qq2_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'qq2_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"zp-q"} -->
<details class="wp-block-details zp-q"><summary><?php echo esc_html( zaseki_panel_t( 'qq3_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'qq3_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group zp-qgroup">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'qgroup2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-qs","layout":{"type":"default"}} -->
<div class="wp-block-group zp-qs">
<!-- wp:details {"className":"zp-q"} -->
<details class="wp-block-details zp-q"><summary><?php echo esc_html( zaseki_panel_t( 'qq5_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'qq5_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"zp-q"} -->
<details class="wp-block-details zp-q"><summary><?php echo esc_html( zaseki_panel_t( 'qq6_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'qq6_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-qgroup","layout":{"type":"default"}} -->
<div class="wp-block-group zp-qgroup">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'qgroup3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-qs","layout":{"type":"default"}} -->
<div class="wp-block-group zp-qs">
<!-- wp:details {"className":"zp-q"} -->
<details class="wp-block-details zp-q"><summary><?php echo esc_html( zaseki_panel_t( 'qq4_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( zaseki_panel_t( 'qq4_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
