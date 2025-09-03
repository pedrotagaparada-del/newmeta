<?php
/**
 * Title: Hero Banner
 * Slug: blockskit-construction/hero-banner
 * Categories: all, banner
 * Keywords: hero banner
 */
$blockskit_construction_images = array(
    '1' => BLOCKSKIT_CONSTRUCTION_URL . 'assets/images/banner-img1.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_construction_images[1]); ?>","id":144,"dimRatio":20,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":850,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:850px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-144" alt="" src="<?php echo esc_url($blockskit_construction_images[1]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--xx-large)"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"15px","right":{"color":"var:preset|color|highlight","width":"5px"},"bottom":{"color":"var:preset|color|highlight","width":"5px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:15px;border-right-color:var(--wp--preset--color--highlight);border-right-width:5px;border-bottom-color:var(--wp--preset--color--highlight);border-bottom-width:5px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlight"}}}},"textColor":"highlight","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-highlight-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'CONSTRUCTION BUSINESS', 'blockskit-construction' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"highlight"} -->
<hr class="wp-block-separator has-text-color has-highlight-color has-alpha-channel-opacity has-highlight-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"lineHeight":"1"}},"textColor":"heading"} -->
<h1 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color" style="line-height:1"><?php esc_html_e( 'Better Solution For Building.', 'blockskit-construction' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|body"}}}},"textColor":"body"} -->
<p class="has-text-align-left has-body-color has-text-color has-link-color"><?php esc_html_e( 'Dictum occaecati? Netus, rutrum curae nobis dolor eleifend vel, quia, maecenas voluptatum semper provident. Laoreet mollis eum pellentesque natoque duis expedita diam sed fames quidem minim.', 'blockskit-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"20px","bottom":"20px"}},"border":{"radius":"5px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:20px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:20px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'GET STARTED', 'blockskit-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary-accent-text","className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"19px","bottom":"19px"}},"border":{"radius":"5px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-accent-text"}}}},"borderColor":"secondary"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-accent-text-color has-text-color has-link-color has-border-color has-secondary-border-color wp-element-button" style="border-width:1px;border-radius:5px;padding-top:19px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:19px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'LEARN MORE', 'blockskit-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->