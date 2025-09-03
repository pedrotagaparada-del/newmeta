<?php
/**
 * Title: Header
 * Slug: blockskit-construction/header
 * Categories: all, header
 */
?>

<!-- wp:group {"className":"bk-header-transparent","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group bk-header-transparent" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":26,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-small","overlayTextColor":"pure-black","textColor":"accent-text","icon":"menu"} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'blockskit-construction' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About Us', 'blockskit-construction' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'blockskit-construction' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Projects', 'blockskit-construction' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'blockskit-construction' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'blockskit-construction' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:6px;padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'GET A QUOTE', 'blockskit-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->