<?php
/**
 * Title: Footer: address, hours and links
 * Slug: kairo-supply/footer-main
 * Categories: kairo-supply
 * Keywords: electrical wholesaler, trade counter
 * Viewport Width: 1440
 * Description: Deep slate footer with the counter details and two link columns.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"kai-footer","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull kai-footer">
<!-- wp:group {"className":"kai-wrap kai-footer__cols","layout":{"type":"default"}} -->
<div class="wp-block-group kai-wrap kai-footer__cols">
<!-- wp:group {"className":"kai-footer__c","layout":{"type":"default"}} -->
<div class="wp-block-group kai-footer__c">
<!-- wp:paragraph {"className":"kai-footer__name"} -->
<p class="kai-footer__name"><?php echo wp_kses_post( kairo_supply_t( 'hd_logo' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kairo_supply_t( 'ft_about' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kai-footer__open"} -->
<p class="kai-footer__open"><i class="kai-dot12" aria-hidden="true"></i><?php echo wp_kses_post( kairo_supply_t( 'ft_open' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kai-footer__c","layout":{"type":"default"}} -->
<div class="wp-block-group kai-footer__c">
<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="/who-we-serve/"><?php echo wp_kses_post( kairo_supply_t( 'ft_who' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/accounts/"><?php echo wp_kses_post( kairo_supply_t( 'ft_accounts' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/counter/"><?php echo wp_kses_post( kairo_supply_t( 'ft_counter' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/ranges/"><?php echo wp_kses_post( kairo_supply_t( 'ft_ranges' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kai-footer__c","layout":{"type":"default"}} -->
<div class="wp-block-group kai-footer__c">
<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="/delivery/"><?php echo wp_kses_post( kairo_supply_t( 'ft_delivery' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/rates/"><?php echo wp_kses_post( kairo_supply_t( 'ft_rates' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/team/"><?php echo wp_kses_post( kairo_supply_t( 'ft_team' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/about/"><?php echo wp_kses_post( kairo_supply_t( 'ft_about_link' ) ); ?></a></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><a href="/visit/"><?php echo wp_kses_post( kairo_supply_t( 'ft_visit' ) ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kai-footer__c","layout":{"type":"default"}} -->
<div class="wp-block-group kai-footer__c">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kairo_supply_t( 'ft_language' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p class="kai-footer__lang"><span>English</span> · <span>&#32321;&#39636;&#20013;&#25991;</span> · <span>&#26085;&#26412;&#35486;</span> · <span>Français</span> · <span>Deutsch</span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kai-footer__copy"} -->
<p class="kai-footer__copy"><?php echo wp_kses_post( kairo_supply_t( 'ft_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
