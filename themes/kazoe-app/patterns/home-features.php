<?php
/**
 * Title: Home: numbered feature rows
 * Slug: kazoe-app/home-features
 * Categories: kazoe-app
 * Keywords: bookkeeping, landing
 * Viewport Width: 1440
 * Description: Four numbered rows with an 80px number column, full-width rules, boxed headings, an ink plus box and an always-visible photo.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"features","className":"kz-features","layout":{"type":"default"}} -->
<section id="features" class="wp-block-group alignfull kz-features"><!-- wp:group {"className":"kz-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group kz-sechead"><!-- wp:heading {"level":2,"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><span class="kz-box">Essential tools</span><span class="kz-box">for counter bookkeeping</span></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kz-rows sp-stagger"><!-- wp:group {"className":"kz-row kz-row--photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-row kz-row--photo sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kz-num"} -->
<p class="kz-num">01</p>
<!-- /wp:paragraph -->

<!-- wp:details {"showContent":true,"className":"kz-row__details"} -->
<details class="wp-block-details kz-row__details" open><summary><span class="kz-box">Daily close</span><span class="kz-box">with a single tap</span></summary>
<!-- wp:paragraph {"className":"kz-row__body"} -->
<p class="kz-row__body">Tally your register totals with a single tap at closing time. All sales figures and payment splits reconcile immediately so you finish your day on time.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-row__photo"} -->
<figure class="wp-block-image size-full kz-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k02-card-reader.webp' ) ); ?>" alt="Hand tapping a smartphone resting beside a payment card reader on a shop counter"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-row kz-row--photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-row kz-row--photo sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kz-num"} -->
<p class="kz-num">02</p>
<!-- /wp:paragraph -->

<!-- wp:details {"className":"kz-row__details"} -->
<details class="wp-block-details kz-row__details"><summary><span class="kz-box">Expense photos</span><span class="kz-box">at the counter</span></summary>
<!-- wp:paragraph {"className":"kz-row__body"} -->
<p class="kz-row__body">Photograph vendor receipts directly at the counter. The app organizes every image so paper slips never get misplaced before tax reporting.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-row__photo"} -->
<figure class="wp-block-image size-full kz-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k03-receipt-photo.webp' ) ); ?>" alt="Store owner photographing a paper receipt on a wooden counter using a mobile phone"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-row kz-row--photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-row kz-row--photo sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kz-num"} -->
<p class="kz-num">03</p>
<!-- /wp:paragraph -->

<!-- wp:details {"className":"kz-row__details"} -->
<details class="wp-block-details kz-row__details"><summary><span class="kz-box">A live sales log</span><span class="kz-box">by payment method</span></summary>
<!-- wp:paragraph {"className":"kz-row__body"} -->
<p class="kz-row__body">Monitor sales transactions as they occur throughout trading hours. View current totals by payment method on your phone, tablet, or desktop browser.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-row__photo"} -->
<figure class="wp-block-image size-full kz-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k04-tablet-cafe.webp' ) ); ?>" alt="Tablet computer mounted on a café counter stand showing a daily business chart"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-row kz-row--photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-row kz-row--photo sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kz-num"} -->
<p class="kz-num">04</p>
<!-- /wp:paragraph -->

<!-- wp:details {"className":"kz-row__details"} -->
<details class="wp-block-details kz-row__details"><summary><span class="kz-box">Accountant exports</span><span class="kz-box">in CSV and PDF</span></summary>
<!-- wp:paragraph {"className":"kz-row__body"} -->
<p class="kz-row__body">Generate clean CSV and PDF summaries ready for your bookkeeper. Tax-period reports export in moments with every tax rate properly separated.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-row__photo"} -->
<figure class="wp-block-image size-full kz-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k05-accountant-laptop.webp' ) ); ?>" alt="Shop owner and accountant reviewing financial records together on a laptop computer"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
