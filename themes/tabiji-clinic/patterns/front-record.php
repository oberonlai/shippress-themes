<?php
/**
 * Title: Home: the record band
 * Slug: tabiji-clinic/front-record
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Slate-mist gradient band with a wavy top edge, counted facts, icon-disc link cards and a photo row bleeding off the right edge.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"tc-record","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-record"><!-- wp:html -->
<svg class="tc-record__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true"><path fill="#FBFCF7" d="M0 0H1440V40C1180 120 940 120 720 70C500 20 240 20 0 80Z"/></svg>
<!-- /wp:html --><!-- wp:group {"className":"tc-record__cols","layout":{"type":"default"}} -->
<div class="wp-block-group tc-record__cols"><!-- wp:group {"className":"tc-record__left","layout":{"type":"default"}} -->
<div class="wp-block-group tc-record__left"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'rc_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"tc-h2"} -->
<h2 class="wp-block-heading tc-h2"><?php echo esc_html( tabiji_clinic_t( 'rc_h_1' ) ); ?><br><?php echo esc_html( tabiji_clinic_t( 'rc_h_2' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( tabiji_clinic_t( 'rc_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"tc-facts sp-stagger","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-facts sp-stagger"><!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">60 <small><?php echo esc_html( tabiji_clinic_t( 'fact1_u' ) ); ?></small></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-fact__c"} -->
<p class="tc-fact__c"><?php echo esc_html( tabiji_clinic_t( 'fact1_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">6 <small><?php echo esc_html( tabiji_clinic_t( 'fact2_u' ) ); ?></small></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-fact__c"} -->
<p class="tc-fact__c"><?php echo esc_html( tabiji_clinic_t( 'fact2_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tc-fact__n sp-count"} -->
<p class="tc-fact__n sp-count">1 <small><?php echo esc_html( tabiji_clinic_t( 'fact3_u' ) ); ?></small></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-fact__c"} -->
<p class="tc-fact__c"><?php echo esc_html( tabiji_clinic_t( 'fact3_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-record__right","layout":{"type":"default"}} -->
<div class="wp-block-group tc-record__right"><!-- wp:group {"className":"tc-lcard sp-reveal sp-reveal--up","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-lcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"tc-lcard__disc","layout":{"type":"default"}} -->
<div class="wp-block-group tc-lcard__disc"><!-- wp:html -->
<svg viewBox="0 0 40 40" width="40" height="40" fill="none" stroke="#5E6B73" stroke-width="1.6" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true"><rect x="9" y="5" width="22" height="30" rx="2"/><path d="M14 13h12M14 18h12M15 27l3 3 6-7"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"tc-lcard__t"} -->
<p class="tc-lcard__t"><a href="/records/"><?php echo esc_html( tabiji_clinic_t( 'lc1' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-lcard sp-reveal sp-reveal--up","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-lcard sp-reveal sp-reveal--up"><!-- wp:group {"className":"tc-lcard__disc","layout":{"type":"default"}} -->
<div class="wp-block-group tc-lcard__disc"><!-- wp:html -->
<svg viewBox="0 0 40 40" width="40" height="40" fill="none" stroke="#5E6B73" stroke-width="1.6" stroke-linejoin="round" stroke-linecap="round" aria-hidden="true"><rect x="6" y="8" width="28" height="26" rx="3"/><path d="M6 15h28M13 4v7M27 4v7M13 22h4M23 22h4M13 28h4"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"tc-lcard__t"} -->
<p class="tc-lcard__t"><a href="/appointment/"><?php echo esc_html( tabiji_clinic_t( 'lc2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-record__photos sp-reveal sp-reveal--zoom","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-record__photos sp-reveal sp-reveal--zoom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-record__ph"} -->
<figure class="wp-block-image size-full tc-record__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-stamp.webp' ) ); ?>" alt="Close-up of a hand stamping a blank page in a vaccination record booklet."/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-record__ph"} -->
<figure class="wp-block-image size-full tc-record__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10-fridge.webp' ) ); ?>" alt="Open medical refrigerator filled with neat rows of plain white vaccine packaging boxes."/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-record__ph"} -->
<figure class="wp-block-image size-full tc-record__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-team.webp' ) ); ?>" alt="Nurse briefing five colleagues around a wooden conference table in a bright room."/></figure>
<!-- /wp:image --><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tc-record__ph"} -->
<figure class="wp-block-image size-full tc-record__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-airport.webp' ) ); ?>" alt="Traveller with a backpack walking across a sunlit, out-of-focus airport terminal concourse."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
