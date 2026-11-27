<?php
/**
 * Title: Page: Newsletter
 * Slug: makido-shutters/page-newsletter
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Newsletter page: lens head, a full lens band holding the survey-day list form (mailto fallback), and the list explained beside a photograph.
 */
?>
<!-- wp:group {"align":"full","className":"mk-lens mk-lens--head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-lens mk-lens--head">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:paragraph {"className":"mk-crumb"} -->
<p class="mk-crumb"><a href="/"><?php echo esc_html( makido_shutters_t( 'crumb_home' ) ); ?></a> / <?php echo esc_html( makido_shutters_t( 'nl_title' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textAlign":"center","className":"mk-h1"} -->
<h1 class="wp-block-heading has-text-align-center mk-h1"><?php echo esc_html( makido_shutters_t( 'nl_title' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","anchor":"join","align":"full","className":"mk-lens mk-lens--forms mk-lens--nl","layout":{"type":"default"}} -->
<section id="join" class="wp-block-group alignfull mk-lens mk-lens--forms mk-lens--nl">
<!-- wp:group {"className":"mk-lens__in","layout":{"type":"default"}} -->
<div class="wp-block-group mk-lens__in">
<!-- wp:heading {"level":2,"textAlign":"center","className":"mk-h2 mk-h2--light"} -->
<h2 class="wp-block-heading has-text-align-center mk-h2 mk-h2--light"><?php echo esc_html( makido_shutters_t( 'nl_h1' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mk-lens__p mk-lens__p--c"} -->
<p class="mk-lens__p mk-lens__p--c"><?php echo esc_html( makido_shutters_t( 'nl_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-lens__sub mk-lens__sub--small"} -->
<p class="mk-lens__sub mk-lens__sub--small"><?php echo esc_html( makido_shutters_t( 'nl_send_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"mk-sendlist"} -->
<ul class="mk-sendlist"><li><?php echo esc_html( makido_shutters_t( 'nl_i1' ) ); ?></li><li><?php echo esc_html( makido_shutters_t( 'nl_i2' ) ); ?></li><li><?php echo esc_html( makido_shutters_t( 'nl_i3' ) ); ?></li></ul>
<!-- /wp:list -->
<!-- wp:group {"className":"mk-nlform","layout":{"type":"default"}} -->
<div class="wp-block-group mk-nlform">
<?php echo shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'quotes@makido-shutters.example', 'label' => makido_shutters_t( 'forms_email' ), 'submit' => makido_shutters_t( 'forms_subscribe' ), 'notice' => makido_shutters_t( 'forms_mail_notice' ), 'subject' => makido_shutters_t( 'forms_mail_subject' ) ) ); ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mk-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mk-sec">
<!-- wp:group {"className":"mk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap">
<!-- wp:heading {"level":2,"textAlign":"center","className":"mk-h2"} -->
<h2 class="wp-block-heading has-text-align-center mk-h2"><?php echo esc_html( makido_shutters_t( 'nl_h3' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"mk-split","layout":{"type":"default"}} -->
<div class="wp-block-group mk-split">
<!-- wp:group {"className":"mk-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group mk-split__a">
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'nl_intro' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'nl_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mk-body"} -->
<p class="mk-body"><?php echo esc_html( makido_shutters_t( 'nl_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mk-split__ph"} -->
<figure class="wp-block-image size-full mk-split__ph"><img src="<?php echo makido_shutters_img( 'img-17.webp' ); ?>" alt="<?php echo makido_shutters_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
