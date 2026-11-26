<?php
/**
 * Title: Page: Request a survey
 * Slug: noki-surveyors/page-request
 * Categories: noki-surveyors
 * Inserter: no
 * Viewport Width: 1440
 * Description: Request page: sentence builder, price summary, the four-line flow and the request form slot with an email fallback.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nk-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-ihead">
<!-- wp:group {"className":"nk-ihead__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nk-ihead__grid">
<!-- wp:group {"className":"nk-ihead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-ihead__text">
<!-- wp:paragraph {"className":"nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( noki_surveyors_t( 'request_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"nk-ihead__h1"} -->
<h1 class="wp-block-heading nk-ihead__h1"><?php echo esc_html( noki_surveyors_t( 'request_t' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-ihead__lede"} -->
<p class="nk-ihead__lede"><?php echo esc_html( noki_surveyors_t( 'request_i' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-ipane","layout":{"type":"default"}} -->
<div class="wp-block-group nk-ipane">
<!-- wp:group {"className":"sp-parallax nk-par-6","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax nk-par-6">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo noki_surveyors_img( 'request-desk.webp' ); ?>" alt="<?php echo noki_surveyors_a( 'alt_n1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-seam","layout":{"type":"default"}} -->
<div class="wp-block-group nk-seam">
<!-- wp:html -->
<span class="nk-seam__i" aria-hidden="true"></span>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'request_0_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'request_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_0_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_0_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--askc","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--askc">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:heading {"level":2,"className":"nk-question nk-question--c"} -->
<h2 class="wp-block-heading nk-question nk-question--c"><?php echo esc_html( noki_surveyors_t( 'ask_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<div class="nk-sentence nk-sentence--c"><span class="nk-sentence__w"><?php echo esc_html( noki_surveyors_t( 's_1' ) ); ?></span><details class="nk-pick nk-pick--a"><summary><?php echo esc_html( noki_surveyors_t( 's_a' ) ); ?></summary><ul><li><a href="#price-1"><?php echo esc_html( noki_surveyors_t( 'pa_1' ) ); ?></a></li><li><a href="#price-2"><?php echo esc_html( noki_surveyors_t( 'pa_2' ) ); ?></a></li><li><a href="#price-3"><?php echo esc_html( noki_surveyors_t( 'pa_3' ) ); ?></a></li><li><a href="#price-4"><?php echo esc_html( noki_surveyors_t( 'pa_4' ) ); ?></a></li></ul></details><span class="nk-sentence__w"><?php echo esc_html( noki_surveyors_t( 's_2' ) ); ?></span><details class="nk-pick nk-pick--b"><summary><?php echo esc_html( noki_surveyors_t( 's_b' ) ); ?></summary><ul><li><a href="/report/#sec-01"><?php echo esc_html( noki_surveyors_t( 'pb_1' ) ); ?></a></li><li><a href="/report/#sec-03"><?php echo esc_html( noki_surveyors_t( 'pb_2' ) ); ?></a></li><li><a href="/report/#sec-02"><?php echo esc_html( noki_surveyors_t( 'pb_3' ) ); ?></a></li></ul></details></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight nk-sec--askbody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--askbody">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:heading {"level":2,"className":"nk-h2s"} -->
<h2 class="wp-block-heading nk-h2s"><?php echo esc_html( noki_surveyors_t( 'request_1_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_1_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_1_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"price","align":"full","className":"nk-sec nk-sec--prices nk-sec--tight","layout":{"type":"default"}} -->
<section id="price" class="wp-block-group alignfull nk-sec nk-sec--prices nk-sec--tight">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'request_2_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'pr_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-body nk-body--wide","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body nk-body--wide">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_2_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_2_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<table class="nk-price nk-price--c"><thead><tr><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h1' ) ); ?></th><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h2' ) ); ?></th><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h3' ) ); ?></th><th scope="col"><?php echo esc_html( noki_surveyors_t( 'pt_h4' ) ); ?></th></tr></thead><tbody><tr id="price-1"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr1_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr1_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr1_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr1_d' ) ); ?></td></tr><tr id="price-2"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr2_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr2_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr2_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr2_d' ) ); ?></td></tr><tr id="price-3"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr3_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr3_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr3_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr3_d' ) ); ?></td></tr><tr id="price-4"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr4_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr4_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr4_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr4_d' ) ); ?></td></tr><tr id="price-5"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr5_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr5_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr5_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr5_d' ) ); ?></td></tr><tr id="price-6"><th scope="row"><?php echo esc_html( noki_surveyors_t( 'pr6_a' ) ); ?></th><td class="nk-price__c"><?php echo esc_html( noki_surveyors_t( 'pr6_b' ) ); ?></td><td class="nk-price__t"><?php echo esc_html( noki_surveyors_t( 'pr6_c' ) ); ?></td><td class="nk-price__p"><?php echo esc_html( noki_surveyors_t( 'pr6_d' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"nk-note"} -->
<p class="nk-note"><?php echo esc_html( noki_surveyors_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight nk-sec--flow","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--flow">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'request_3_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'request_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-twocol","layout":{"type":"default"}} -->
<div class="wp-block-group nk-twocol">
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_3_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_3_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ol class="nk-steps nk-steps--l"><li><span>01</span><?php echo esc_html( noki_surveyors_t( 'fl1' ) ); ?></li><li><span>02</span><?php echo esc_html( noki_surveyors_t( 'fl2' ) ); ?></li><li><span>03</span><?php echo esc_html( noki_surveyors_t( 'fl3' ) ); ?></li><li><span>04</span><?php echo esc_html( noki_surveyors_t( 'fl4' ) ); ?></li></ol>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"form","align":"full","className":"nk-sec nk-sec--tight nk-sec--form","layout":{"type":"default"}} -->
<section id="form" class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--form">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-hrow nk-hrow--s","layout":{"type":"default"}} -->
<div class="wp-block-group nk-hrow nk-hrow--s">
<!-- wp:heading {"level":2,"className":"nk-h2"} -->
<h2 class="wp-block-heading nk-h2"><?php echo esc_html( noki_surveyors_t( 'request_4_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-hlabel"} -->
<p class="nk-hlabel"><?php echo esc_html( noki_surveyors_t( 'request_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_4_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_4_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"nk-formbox","layout":{"type":"default"}} -->
<div class="wp-block-group nk-formbox">
<?php
ob_start();
?>
<p class="nk-form-note"><?php echo esc_html( noki_surveyors_t( 'request_fallback_note' ) ); ?></p>
<div class="wp-block-buttons nk-btns"><div class="wp-block-button nk-btn"><a class="wp-block-button__link wp-element-button" href="mailto:hello@noki-surveyors.example?subject=<?php echo rawurlencode( noki_surveyors_t( 'request_mail_subject' ) ); ?>"><?php echo esc_html( noki_surveyors_t( 'request_email_button' ) ); ?></a></div></div>
<?php
$noki_fallback = ob_get_clean();
echo shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $noki_fallback ) ); // phpcs:ignore WordPress.Security.EscapeOutput
?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"nk-sec nk-sec--tight nk-sec--mail","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nk-sec nk-sec--tight nk-sec--mail">
<!-- wp:group {"className":"nk-wrap nk-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group nk-wrap nk-wrap--c">
<!-- wp:group {"className":"nk-body","layout":{"type":"default"}} -->
<div class="wp-block-group nk-body">
<!-- wp:heading {"level":2,"className":"nk-h2s"} -->
<h2 class="wp-block-heading nk-h2s"><?php echo esc_html( noki_surveyors_t( 'request_5_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_5_b' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"nk-prose"} -->
<p class="nk-prose"><?php echo esc_html( noki_surveyors_t( 'request_5_c' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

