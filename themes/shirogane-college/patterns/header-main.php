<?php
/**
 * Title: Header: split nav with wordmark
 * Slug: shirogane-college/header-main
 * Categories: shirogane-college
 * Inserter: no
 * Viewport Width: 1440
 * Description: Three links, the wordmark, three links and an Apply button on one 80 px row. One navigation block.
 */
?>
<!-- wp:group {"align":"full","className":"sg-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sg-head">
<!-- wp:group {"className":"sg-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group sg-head__in">
<!-- wp:group {"className":"sg-head__navwrap","layout":{"type":"default"}} -->
<div class="wp-block-group sg-head__navwrap">
<!-- wp:navigation {"overlayMenu":"mobile","className":"sg-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:html -->
<a class="sg-brand" href="/"><svg class="sg-mark" width="30" height="30" viewBox="0 0 30 30" fill="none" aria-hidden="true" focusable="false"><path d="M8 3h14l7 12-7 12H8L1 15z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/><g fill="currentColor"><ellipse cx="15" cy="18.5" rx="3.6" ry="2.8"/><circle cx="9.9" cy="14.5" r="1.4"/><circle cx="13" cy="11.2" r="1.4"/><circle cx="17" cy="11.2" r="1.4"/><circle cx="20.1" cy="14.5" r="1.4"/></g></svg><span class="sg-wordmark"><?php echo esc_html( shirogane_college_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<a class="sg-apply" href="/admissions/#apply"><span><?php echo esc_html( shirogane_college_t( 'cta_apply' ) ); ?></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->